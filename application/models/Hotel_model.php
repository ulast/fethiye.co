<?php
/**
 * Proje : fethiye.co | for real estate
 * Tarih : 02.12.2014 - 13:13
 * Mail  : ulas@mail.com
 */

class Hotel_model extends MY_Model
{
    public function detail($hotel_ID)
    {
        $data       =   $this->db
                        ->select('*')
                        ->from('hotel')
                        ->where('hotel_ID',$hotel_ID)
                        ->get()->row_array();

        $data       =   json_decode($data['data'],TRUE);
    }

    public function save($post)
    {
        $content    =   array();
        foreach($this->langs() AS $lang)
        {
            if(empty($post[$lang['iso']]['seflink']))
            {
                $post[$lang['iso']]['seflink']    =   $this->seflink($post[$lang['iso']]['title'],$lang['iso']);
            }
            $content[$lang['iso']]  =   $post[$lang['iso']];
            unset($post[$lang['iso']]);
        }
        $content    =   json_encode($content);

        $data['data']   =   $content;
        foreach($post AS $key=>$value)
        {
            $data[$key] =   $value;
        }

        //var_dump($data);
        if($this->db->insert('hotel',$data))
        {
            redirect(base_url('administrator/hotel/detail/'. $this->db->insert_id()));
        }
    }

    public function extras()
    {
        $data       =   array();
        $extras     =   $this->db
                        ->select('*')
                        ->from('hotel_extras')
                        ->get()->result_array();

        if($extras)
        {
            foreach($extras AS $extra)
            {
                $data[$extra['extra_ID']]     =   json_decode($extra['data'],TRUE);
            }

            return $data;
        }
        else
        {
            return FALSE;
        }
    }
} 
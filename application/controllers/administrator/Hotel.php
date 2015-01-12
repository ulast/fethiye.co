<?php
/**
 * Proje : fethiye.co | for real estate
 * Tarih : 02.12.2014 - 13:16
 * Mail  : ulas@mail.com
 */

class Hotel extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Hotel_model','hotel');
    }

    public function add()
    {
        $data['langs']      =   $this->langs();

        $this->aheader();
        $this->load->view('administrator/hotel/add',$data);
        $this->afooter();
    }

    public function extras()
    {
        $data['langs']      =   $this->langs();

        if($this->input->post())
        {
            $add   =   $this->input->post('add');
            $count  =   count($data['langs']);
            $i = 0;
            foreach($data['langs'] AS $lang)
            {
                if(empty($add[$lang['iso']])){$i = ++$i;}
            }

            if($count != $i)
            {
                $add    =   json_encode($add);
//                var_dump($add);
                if($this->db->insert('hotel_extras',array('data'=>$add)))
                {
                    echo '<script>alert("Add New Extra");</script>';
                }
            }
        }

        $data['extras']     =   $this->hotel->extras();

        $this->aheader();
        $this->load->view('administrator/hotel/extras',$data);
        $this->afooter();
    }

    public function save()
    {
        if($this->input->post())
        {
            $this->hotel->save($this->input->post());
        }
    }
} 
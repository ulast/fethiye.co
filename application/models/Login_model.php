<?php
/**
 * Proje : fethiye.co | for real estate
 * Tarih : 02.12.2014 - 13:54
 * Mail  : ulas@mail.com
 */

class Login_model extends MY_Model
{
    public function __construct()
    {
        parent::__construct();
    }

    public function verification($username, $password)
    {
        $password   =   md5($password);

        $user       =   $this->db
                        ->select('*')
                        ->from('users')
                        ->where('username',$username)
                        ->where('password',$password)
                        ->join('user_categories','user_categories.status = users.category')
                        ->get()->row_array();

        return $user;
    }

    public function control()
    {
        if($this->session->userdata('login') != 'ok')
        {
            redirect(base_url('administrator/login'));
        }
    }
} 
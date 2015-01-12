<?php
/**
 * Proje : fethiye
 * Tarih : 01.12.2014 - 17:41
 * Mail  : ulas@mail.com
 */

class MY_Controller extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    //Main Header
    public function mheader()
    {
        $this->load->view('frontend/main/header');
    }

    //Main Footer
    public function mfooter()
    {
        $this->load->view('frontend/main/footer');
    }

    //Administrator Header
    public function aheader()
    {
        $this->load->model('Login_model','login');
        $this->login->control();
        $this->load->view('administrator/main/header');
    }

    //Administrator Footer
    public function afooter()
    {
        $this->load->view('administrator/main/footer');
    }

    //All Langs
    public function langs()
    {
        $langs  =   $this->db
                    ->select('*')
                    ->from('langs')
                    ->get()->result_array();

        return $langs;
    }
} 
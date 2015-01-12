<?php
/**
 * Proje : fethiye.co | for real estate
 * Tarih : 02.12.2014 - 13:48
 * Mail  : ulas@mail.com
 */

class Login extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        if($this->input->post())
        {
            $this->load->model('Login_model','login');
            $user   =   $this->login->verification($this->input->post('username',TRUE), $this->input->post('password',TRUE));
            if($user)
            {
                $this->session->set_userdata($user);
                $this->session->set_userdata('login','ok');
                redirect(base_url('administrator/main'));
                $data['login']      =   "Please wait..";
            }
            else
            {
                $data['login']      =   "Wrong Password or Username";
            }
        }
        else
        {
            $data['login']  =   NULL;
        }
        $this->load->view('administrator/main/login',$data);
    }

    public function logout()
    {
        $this->session->unset_userdata('login');
        redirect(base_url('administrator/login'));
    }
} 
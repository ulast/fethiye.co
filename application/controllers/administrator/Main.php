<?php
/**
 * Proje : fethiye.co | for real estate
 * Tarih : 02.12.2014 - 13:18
 * Mail  : ulas@mail.com
 */

class Main extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $this->aheader();
        $this->load->view('administrator/main/index');
        $this->afooter();
    }
} 
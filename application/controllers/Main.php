<?php
/**
 * Proje : fethiye.co | for real estate
 * Tarih : 01.12.2014 - 17:53
 * Mail  : ulas@mail.com
 */

class Main extends MY_Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index($lang = 'tr')
    {
        $this->mheader();
        $this->load->view('frontend/main/index');
        $this->mfooter();
    }
} 
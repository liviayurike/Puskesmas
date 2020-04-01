<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
    }

    public function index()
    {
        if ($this->session->userdata('level') == "user") {
            redirect('dokter', 'refresh');
        } elseif ($this->session->userdata('level') == "admin") {
            redirect('dokter', 'refresh');
        }
        $data['title'] = 'Puskesmas';
        //$this->load->view('auth/template/header', $data);
        $this->load->view('home/index');
    }

    public function home()
    {
        $data['title'] = 'Puskesmas';
        //$this->load->view('auth/template/header', $data);
        $this->load->view('Home/home');
    }
}

/* End of file Home.php */

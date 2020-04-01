<?php

defined('BASEPATH') or exit('No direct script access allowed');

class periksa extends CI_Controller
{

    var $API = "";

    public function __construct()
    {
        parent::__construct();
        $this->load->library('curl');
        $this->API = "http://localhost/rumahsakit-api/api";
    }

    public function index()
    {
        $data['title'] = 'List Periksa';
        $result =  $this->curl->simple_get($this->API . '/periksa');
        $data['periksa'] = json_decode($result, true);
        $this->load->view('template/header', $data);
        $this->load->view('periksa/index', $data);
        $this->load->view('template/footer');
    }
}

/* End of file periksa.php */

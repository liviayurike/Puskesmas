<?php
defined('BASEPATH') or exit('No direct script access allowed');

class auth extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->model('Auth_Model');
    }

    public function index()
    {
        $data['title'] = 'Puskesmas';
        // $this->load->view('template/header_login');
        $this->load->view('auth/template/header_auth', $data);
        $this->load->view('auth/login');
    }

    public function prosesLogin()
    {

        $username = htmlspecialchars($this->input->post('username'));
        $password = htmlspecialchars(MD5($this->input->post('password')));

        $cekLogin = $this->Auth_Model->login($username, $password);

        if ($cekLogin) {
            foreach ($cekLogin as $row);
            $this->session->set_userdata('id_user', $row->id_user);
            $this->session->set_userdata('user', $row->username);
            $this->session->set_userdata('level', $row->level);
            $this->session->set_userdata('status', $row->status);
            redirect('home/home');
        } else {
            $data['pesan'] = "Maaf Username dan Password anda salah!";
            $data['title'] = 'Login';
            $this->load->view('auth/template/header_auth', $data);
            $this->load->view('auth/login');
        }
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('home', 'refresh');
    }
}

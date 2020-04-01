<?php


defined('BASEPATH') or exit('No direct script access allowed');

class poli extends CI_Controller
{
    var $API = "";

    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('poli_model');
        $this->load->model('cetak_model');
        $this->load->library('curl');
        $this->API = "http://localhost/rumahsakit-api/api";
    }

    public function index()
    {
        $data['title'] = 'List Poliklinik';
        $data['poli'] = $this->poli_model->datatabels();

        $data['poli'] = $this->poli_model->getAllpoli();

        $this->load->view('template/header', $data);
        $this->load->view('poli/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Menambahkan Data Poliklinik';
        $result =  $this->curl->simple_get($this->API . '/dokter');
        $data['dokter'] = json_decode($result, true);
        $this->form_validation->set_rules('nama_poli', 'nama_poli', 'required');
        $this->form_validation->set_rules('nama_dok', 'nama_dok', 'required');
        $this->form_validation->set_rules('jadwal', 'jadwal', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('poli/tambah', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->poli_model->tambahdatapoli();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('poli', 'refresh');
        }
    }

    public function hapus($id_poli)
    {
        $this->poli_model->hapusdatapoli($id_poli);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('poli', 'refresh');
    }

    public function detail($id_poli)
    {
        $data['title'] = 'Detail Poliklinik';
        $data['poli'] = $this->dokter_model->getdokterByID($id_poli);
        $this->load->view('template/header', $data);
        $this->load->view('poli/detail', $data);
        $this->load->view('template/footer');
    }

    public function edit($id_poli)
    {
        $data['title'] = 'Form Edit Data Poliklinik';
        $data['poli'] = $this->poli_model->getdokterByID($id_poli);

        $this->form_validation->set_rules('nama_poli', 'nama_poli', 'required');
        $this->form_validation->set_rules('nama_dok', 'nama_dok', 'required');
        $this->form_validation->set_rules('jadwal', 'jadwal', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('template/header', $data);
            $this->load->view('poli/edit', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->poli_model->ubahdatapoli();
            $this->session->set_flashdata('flash-data', 'diedit');
            redirect('poli', 'refresh');
        }
    }

    public function laporan_pdf()
    {

        $this->load->library('pdf');

        $data['poli'] = $this->cetak_model->view();
        $this->load->library('pdf');

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "datapoli.pdf";
        $this->pdf->load_view('poli/laporan', $data);
    }
}

/* End of file Controllername.php */

<?php


defined('BASEPATH') or exit('No direct script access allowed');

class daftar extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->helper('url');
        $this->load->helper('form');
        $this->load->library('form_validation');
        $this->load->model('daftar_model');
        $this->load->model('poli_model');
        $this->load->model('cetak_model');
    }

    public function index()
    {
        $data['title'] = 'List Daftar Pasien';
        $data['daftar'] = $this->daftar_model->datatabels();

        $data['daftar'] = $this->daftar_model->getAlldaftar();

        $this->load->view('daftar/header', $data);
        $this->load->view('daftar/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        $data['title'] = 'Form Menambahkan Daftar Pasien';
        $data['daftar'] = $this->daftar_model->getAlldaftar();
        $data['poli'] = $this->poli_model->getAllpoli();

        $this->form_validation->set_rules('nama', 'nama', 'required');
        $this->form_validation->set_rules('alamat', 'alamat', 'required');
        $this->form_validation->set_rules('usia', 'usia', 'required');
        $this->form_validation->set_rules('keluhan', 'keluhan', 'required');

        if ($this->form_validation->run() == FALSE) {
            # code...
            $this->load->view('daftar/header', $data);
            $this->load->view('daftar/tambah', $data);
            $this->load->view('template/footer');
        } else {
            # code...
            $this->daftar_model->tambahdatadaftar();
            $this->session->set_flashdata('flash-data', 'ditambahkan');
            redirect('daftar', 'refresh');
        }
    }

    public function hapus($id_daftar)
    {
        $this->daftar_model->hapusdatadaftar($id_daftar);
        $this->session->set_flashdata('flash-data', 'dihapus');
        redirect('daftar', 'refresh');
    }


    public function laporan_pdf($id_daftar)
    {

        $this->load->library('pdf');

        $data['daftar'] = $this->cetak_model->viewDaftar($id_daftar);

        $this->pdf->setPaper('A4', 'potrait');
        $this->pdf->filename = "datadaftar.pdf";
        $this->pdf->load_view('daftar/laporan', $data);
    }
}

/* End of file Controllername.php */

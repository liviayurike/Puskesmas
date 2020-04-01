<?php


defined('BASEPATH') or exit('No direct script access allowed');

class dokter extends CI_Controller
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
        $data['title'] = 'List Dokter';
        $result =  $this->curl->simple_get($this->API . '/dokter');
        $data['dokter'] = json_decode($result, true);
        $this->load->view('template/header', $data);
        $this->load->view('dokter/index', $data);
        $this->load->view('template/footer');
    }

    public function tambah()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'nama_dok'       =>  $this->input->post('nama_dok'),
                'alamat_dok'      =>  $this->input->post('alamat_dok'),
                'no_telp_dok'      =>  $this->input->post('no_telp_dok'),
                'spesialis_dok' =>  $this->input->post('spesialis_dok')
            );
            $insert =  $this->curl->simple_post($this->API . '/dokter', $data, array(CURLOPT_BUFFERSIZE => 10));
            if ($insert) {
                $this->session->set_flashdata('hasil', 'Tambah Data Berhasil');
            } else {
                $this->session->set_flashdata('hasil', 'Tambah Data Gagal');
            }
            redirect('dokter');
        } else {
            $data['title'] = "Tambah Data Dokter";
            $this->load->view('template/header', $data);
            $this->load->view('dokter/tambah', $data);
            $this->load->view('template/footer');
        }
    }

    public function hapus($id)
    {
        if (empty($id)) {
            redirect('dokter');
        } else {
            $delete =  $this->curl->simple_delete($this->API . '/dokter?id_dok=', array('id_dok' => $id), array(CURLOPT_BUFFERSIZE => 10));
            if ($delete) {
                $this->session->set_flashdata('hasil', 'Delete Data gagal');
            } else {
                $this->session->set_flashdata('hasil', 'Delete Data Berhasil');
            }
            redirect('dokter');
        }
    }
}

/* End of file Controllername.php */

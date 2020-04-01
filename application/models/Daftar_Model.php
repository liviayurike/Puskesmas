<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Daftar_model extends CI_Model
{

    public function getAlldaftar()
    {
        // https://www.codeigniter.com/user_guide/database/query_builder.html#selecting-data
        $this->db->select('*');
        $this->db->from('daftar d');
        $this->db->join('poli p', 'p.id_poli = d.id_poli');
        $query = $this->db->get();
        return $query->result_array();
    }

    public function tambahdatadaftar()
    {
        $data = [
            "id_daftar" => $this->input->post('id_daftar', true),
            "nama" => $this->input->post('nama', true),
            "alamat" => $this->input->post('alamat', true),
            "usia" => $this->input->post('usia', true),
            "keluhan" => $this->input->post('keluhan', true),
            "id_poli" => $this->input->post('id_poli', true)
        ];
        $this->db->insert('daftar', $data);
    }

    public function hapusdatadaftar($id_daftar)
    {
        $this->db->where('id_daftar', $id_daftar);
        $this->db->delete('daftar');
    }

    public function getdaftarByID($id_daftar)
    {
        return $this->db->get_where('daftar', ['id_daftar' => $id_daftar])->row_array();
    }

    public function cariDatadaftar()
    {
        $keyword = $this->input->post('keyword');
        $this->db->select('*');
        $this->db->from('daftar d');
        $this->db->join('poli p', 'p.id_poli = d.id_poli');
        $this->db->like('d.id_daftar', $keyword);
        $this->db->or_like('d.nama', $keyword);
        $this->db->or_like('d.alamat', $keyword);
        $this->db->or_like('d.usia', $keyword);
        $this->db->or_like('d.keluhan', $keyword);
        $this->db->or_like('p.id_poli', $keyword);
        $query = $this->db->get();
        return $query->result_array();
        // return $this->db-> get('periksa')->result_array();
    }

    public function datatabels()
    {
        $query = $this->db->order_by('id_daftar', 'DESC')->get('daftar');
        return $query->result();
    }
}
/* End of file ModelName.php */

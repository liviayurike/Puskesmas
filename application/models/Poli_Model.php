<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Poli_model extends CI_Model
{

    public function getAllpoli()
    {
        // https://www.codeigniter.com/user_guide/database/query_builder.html#selecting-data
        $query = $this->db->get('poli');

        // https://www.codeigniter.com/user_guide/database/results.html
        return $query->result_array();
    }

    public function tambahdatapoli()
    {
        $data = [
            "id_poli" => $this->input->post('id_poli', true),
            "nama_poli" => $this->input->post('nama_poli', true),
            "nama_dok" => $this->input->post('nama_dok', true),
            "jadwal" => $this->input->post('jadwal', true)
        ];
        $this->db->insert('poli', $data);
    }

    public function hapusdatapoli($id_poli)
    {
        $this->db->where('id_poli', $id_poli);
        $this->db->delete('poli');
    }

    public function getdokterByID($id_poli)
    {
        return $this->db->get_where('poli', ['id_poli' => $id_poli])->row_array();
    }

    public function ubahdatapoli()
    {
        $data = [
            "id_poli" => $this->input->post('id_poli', true),
            "nama_poli" => $this->input->post('nama_poli', true),
            "nama_dok" => $this->input->post('nama_dok', true),
            "jadwal" => $this->input->post('jadwal', true)
        ];
        $this->db->where('id_poli', $this->input->post('id_poli'));
        $this->db->update('poli', $data);
    }

    public function cariDatapoli()
    {
        $keyword = $this->input->post('keyword');
        $this->db->like('id_poli', $keyword);
        $this->db->or_like('nama_poli', $keyword);
        $this->db->or_like('nama_dok', $keyword);
        $this->db->or_like('jadwal', $keyword);
        return $this->db->get('poli')->result_array();
    }

    public function datatabels()
    {
        $query = $this->db->order_by('id_poli', 'DESC')->get('poli');
        return $query->result();
    }
}
/* End of file ModelName.php */

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class cetak_model extends CI_Model
{

    public function view()
    {
        $this->db->select('id_poli,nama_poli,nama_dok,jadwal');
        $query = $this->db->get('poli');
        return $query->result();
    }

    public function viewDaftar($id_daftar)
    {
        $this->db->select('*');
        $this->db->from('daftar d');
        $this->db->join('poli p', 'p.id_poli = d.id_poli');
        $this->db->where('id_daftar', $id_daftar);
        $query = $this->db->get();
        return $query->result();
    }
}

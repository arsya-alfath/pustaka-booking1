<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getData()
    {
        $query = $this->db->get('siswa');
        return $query->result();
    }

    public function insert_data($data_siswa)
    {
        $this->db->insert('Siswa', $data_siswa);
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Siswa extends CI_Controller
{

    public function index()
    {
        $this->load->view('input_siswa');
    }

    public function proses_input()
    {
        $this->load->model('siswa_model');

        $nama_siswa = $this->input->post('nama_siswa');
        $nis = $this->input->post('nis');
        $kelas = $this->input->post('kelas');
        $tanggal_lahir = $this->input->post('tanggal_lahir');
        $tempat_lahir = $this->input->post('tempat_lahir');
        $alamat = $this->input->post('alamat');
        $jenis_kelamin = $this->input->post('jenis_kelamin');
        $agama = $this->input->post('agama');

        $data_siswa = array(
            'nama_siswa' => $nama_siswa,
            'nis' => $nis,
            'kelas' => $kelas,
            'tanggal_lahir' => $tanggal_lahir,
            'tempat_lahir' => $tempat_lahir,
            'alamat' => $alamat,
            'jenis_kelamin' => $jenis_kelamin,
            'agama' => $agama
        );

        $this->siswa_model->insert_data($data_siswa);

        $data['nama_siswa'] = $nama_siswa;
        $data['nis'] = $nis;
        $data['kelas'] = $kelas;
        $data['tanggal_lahir'] = $tanggal_lahir;
        $data['tempat_lahir'] = $tempat_lahir;
        $data['alamat'] = $alamat;
        $data['jenis_kelamin'] = $jenis_kelamin;
        $data['agama'] = $agama;

        $queryAllMenu = $this->siswa_model->getData();
        $data = array('queryAll' => $queryAllMenu);

        $this->load->view('hasil_input_siswa', $data);
    }
}

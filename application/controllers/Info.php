<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{
    public function index()
    {
        $data['data'] = 'Tentang Kami';
        $data['judul'] = 'Nelayan Belajar';
        $data['isi'] = '"Temukan Solusi Masalah Aktivitas Nelayan Disini"';
        $this->load->view('templates/user/header', $data);
        $this->load->view('fitur/viewtentangkami', $data);
        $this->load->view('templates/user/footer');
    }

    public function kontak()
    {
        $data['data'] = 'Kontak';
        $data['judul'] = 'Nelayan Belajar';
        $data['isi'] = '"Temukan Solusi Masalah Aktivitas Nelayan Disini"';
        $this->load->view('templates/user/header', $data);
        $this->load->view('fitur/viewkontak', $data);
        $this->load->view('templates/user/footer');
    }
}

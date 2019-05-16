<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Info extends CI_Controller
{
    public function index()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = 'Tentang Kami';
        $this->load->view('templates/user/header', $data);
        $this->load->view('fitur/viewtentangkami', $data);
        $this->load->view('templates/user/footer');
    }

    public function kontak()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = 'Kontak';
        $this->load->view('templates/user/header', $data);
        $this->load->view('fitur/viewkontak', $data);
        $this->load->view('templates/user/footer');
    }
}

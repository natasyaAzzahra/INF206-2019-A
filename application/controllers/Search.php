<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{
    //untuk menghubungkan database melalui model
    public function __construct()
    {
        parent::__construct();
        $this->load->model('Konten_model');
    }

    //function untuk fitur search pada aplikasi
    public function cari()
    {
        $data['data'] = 'Wawasan';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['allkonten'] = $this->Konten_model->cariDataKonten();
        $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="text-align: center">
        Konten yang dicari tidak ada!
        </div>');
        $this->load->view('templates/user/header', $data);
        $this->load->view('fitur/viewwawasan');
        $this->load->view('templates/user/footer');
    }
}

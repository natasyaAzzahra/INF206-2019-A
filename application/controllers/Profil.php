<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    //function untuk dapat menampilkan halaman edit profil user
    public function index()
    {
        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'trim');


        if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();

            //kondisi ketika user telah melakukan login
            if ($this->session->userdata('username')) {
                $data['data'] = 'Edit Profil';
                $this->load->view('templates/user/header', $data);
                $this->load->view('fitur/vieweditprofil', $data);
                $this->load->view('templates/user/footer');
            }
            //kondisi ketika user tidak dalam keadaan  login
            else {
                redirect('login');
            }
        } else {
            $this->User_model->editprofil();
        }
    }

    //function untuk menampilkan konten apa saja yang telah diposting oker user
    public function konten()
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        if ($this->session->userdata('username')) {
            $data['data'] = 'Konten';
            $this->load->view('templates/user/header', $data);
            $this->load->view('fitur/viewkonten', $data);
            $this->load->view('templates/user/footer');
        } else {
            redirect('login');
        }
    }
}

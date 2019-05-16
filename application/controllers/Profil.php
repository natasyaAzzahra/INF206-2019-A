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

    public function index()
    {
        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'trim');

        if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            if ($this->session->userdata('username')) {
                $data['data'] = 'Edit Profil';
                $this->load->view('templates/user/header', $data);
                $this->load->view('fitur/vieweditprofil', $data);
                $this->load->view('templates/user/footer');
            } else {
                redirect('login');
            }
        } else {
            $this->User_model->editprofil();
        }
    }

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

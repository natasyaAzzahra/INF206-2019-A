<?php

class Register extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }

    //function untuk menampilkan halaman registrasi
    public function index()
    {
        $data['data'] = 'Register';
        $this->load->view('templates/user/header', $data);
        $this->load->view('akun/viewregister');
    }

    //function untuk mendaftar akun
    public function tambah()
    {
        $this->form_validation->set_rules('namelengkap', 'Namalengkap', 'trim');
        $this->form_validation->set_rules('username', 'Username', 'trim|is_unique[user.username]');
        $this->form_validation->set_rules('email', 'Email', 'trim|is_unique[user.email]');
        $this->form_validation->set_rules('password', 'Password', 'trim|min_length[6]');

        //kondisi ketika tidak berhasil mendaftar
        if ($this->form_validation->run() == false) {
            $data['data'] = 'Register';
            $this->load->view('templates/user/header', $data);
            $this->load->view('akun/viewregister');
        }
        //kondisi ketika berhasil mendaftar
        else {
            $this->User_model->tambahDataUser();
            $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert" style="text-align: center">
            Selamat! Akun kamu sudah dibuat. Harap melakukan login
            </div>');
            redirect('login');
        }
    }
}

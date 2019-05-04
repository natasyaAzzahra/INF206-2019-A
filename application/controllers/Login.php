<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['data'] = 'Login';
            $this->load->view('templates/user/header', $data);
            $this->load->view('akun/viewlogin');
        } else {
            $this->User_model->_login();
        }
    }
    public function logout()
    {
        $this->session->unset_userdata('username');
        $this->session->unset_userdata('role_id');

        $this->session->set_flashdata('pesan', '<div class="alert alert-warning" role="alert" style="text-align: center">
        Anda telah melakukan logout!
        </div>');
        redirect('login');
    }
}

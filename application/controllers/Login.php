<?php

class Login extends CI_Controller
{
    public function __construct()
    {
        parent::__construct();
        // $this->load->model('User_model');
        $this->load->library('form_validation');
    }
    public function index()
    {
        $this->form_validation->set_rules('username', 'Username', 'required|trim');
        $this->form_validation->set_rules('password', 'Password', 'required|trim');

        if ($this->form_validation->run() == false) {
            $data['data'] = 'Login';
            $this->load->view('templates/header', $data);
            $this->load->view('akun/viewlogin');
        } else {
            $this->_login();
        }
    }
    private function _login()
    {
        $username = $this->input->post('username');
        $password = $this->input->post('password');

        $user = $this->db->get_where('user', ['username' => $username])->row_array();
        //jika usernya ada
        if ($user) {
            // jika usernya nelayan/content creator
            if ($user['role_id'] == 2) {
                if (password_verify($password, $user['password'])) {
                    $data = [
                        'username' => $user['username'],
                        'role_id' => $user['role_id']
                    ];
                    $this->session->set_userdata($data);
                    redirect('home/homeuser');
                } else {
                    $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="text-align: center">
                    Password yang dimasukkan salah!
                    </div>');
                    redirect('login');
                }
            }
            // jika usernya admin
            // elseif ($user['role_id'] == 1) {
            //     if (password_verify($password, $user['password'])) {
            //         redirect('home');
            //     } else {
            //         $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="text-align: center">
            //         Password yang dimasukkan salah!
            //         </div>');
            //         redirect('login');
            //     }
            // }
        }
        // jika usernya gak ada
        else {
            $this->session->set_flashdata('pesan', '<div class="alert alert-danger" role="alert" style="text-align: center">
            Username yang dimasukkan tidak terdaftar!
            </div>');
            redirect('login');
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

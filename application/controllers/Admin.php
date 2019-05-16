<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        if ($this->session->userdata('role_id') == 2) {
            redirect('home');
        } else if (!$this->session->userdata('username')) {
            redirect('login');
        }
    }

    public function index()
    {
        $data['data'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $this->load->view('templates/admin/header', $data);
        $this->load->view('home/indexadmin', $data);
        $this->load->view('templates/admin/footer');
    }
    public function daftaruser()
    {
        if ($this->session->userdata('username')) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Daftar User';
            $data['data'] = 'Daftar User';
            $data['alluser'] = $this->User_model->getAllUser();
            $this->load->view('templates/admin/header', $data);
            $this->load->view('admin/viewdaftaruser', $data);
            $this->load->view('templates/admin/footer');
        } else {
            redirect('login');
        }
    }

    public function hapus($id)
    {
        $this->User_model->hapusDataUser($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert" style="text-align: center">
        Data User berhasil dihapus!
        </div>');
        redirect('admin/daftaruser');
    }
}

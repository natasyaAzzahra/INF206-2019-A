<?php

class Admin extends CI_Controller
{
    public function __construct()
    {
        Parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');

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
        $data['title'] = 'Dashboard';
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

    public function uud()
    {
        if ($this->session->userdata('username')) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Peraturan UU';
            $data['data'] = 'Peraturan UU';
            $data['alluud'] = $this->User_model->getAllUud();

            $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
            $this->form_validation->set_rules('isi', 'Isi', 'trim|required');

            if ($this->form_validation->run() == false) {
                $this->load->view('templates/admin/header', $data);
                $this->load->view('admin/viewuud', $data);
                $this->load->view('templates/admin/footer');
            } else {
                $this->User_model->tambahuud();
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert" style="text-align: center">
                Peraturan Undang-undang berhasil ditambahkan!
                </div>');
                redirect('admin/uud');
            }
        } else {
            redirect('login');
        }
    }

    public function hapusuud($id)
    {
        $this->User_model->hapusDataUud($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert" style="text-align: center">
        Data Undang-undang berhasil dihapus!
        </div>');
        redirect('admin/uud');
    }
}

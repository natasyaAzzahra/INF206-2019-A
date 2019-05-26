<?php

class Admin extends CI_Controller
{
    //function untuk mengatur login admin
    public function __construct()
    {
        Parent::__construct();
        $this->load->model('User_model');
        $this->load->library('form_validation');

        // kondisi ketika user ingin masuk ke halaman admin, maka user tersebut akan di lemparkan ke halaman home(middleware)
        if ($this->session->userdata('role_id') == 2) {
            redirect('home');
        } else if (!$this->session->userdata('username')) {
            redirect('login');
        }
    }

    //function untuk halaman home admin
    public function index()
    {
        $data['data'] = 'Home';
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['title'] = 'Dashboard';
        $this->load->view('templates/admin/header', $data);
        $this->load->view('home/indexadmin', $data);
        $this->load->view('templates/admin/footer');
    }

    //function untuk menampilkan halaman daftar user pada admin
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

    //function untuk menghapus data user
    public function hapus($id)
    {
        $this->User_model->hapusDataUser($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert" style="text-align: center">
        Data User berhasil dihapus!
        </div>');
        redirect('admin/daftaruser');
    }

    //function untuk halaman pelaturan uu di admin
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

    //function untuk halaman mengubah peraturan di admin
    public function ubahuud($id)
    {
        if ($this->session->userdata('username')) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Peraturan UU';
            $data['data'] = 'Ubah Peraturan UU';
            $data['uud'] = $this->User_model->getUudById($id);

            $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
            $this->form_validation->set_rules('isi', 'Isi', 'trim|required');

            if ($this->form_validation->run() == false) {
                $this->load->view('templates/admin/header', $data);
                $this->load->view('admin/viewubahuud', $data);
                $this->load->view('templates/admin/footer');
            } else {
                $this->User_model->edituud();
                $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert" style="text-align: center">
                Peraturan Undang-undang berhasil diubah!
                </div>');
                redirect('admin/uud');
            }
        } else {
            redirect('login');
        }
    }
    
    //function untuk menghapus uud di admin
    public function hapusuud($id)
    {
        $this->User_model->hapusDataUud($id);
        $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert" style="text-align: center">
        Data Undang-undang berhasil dihapus!
        </div>');
        redirect('admin/uud');
    }

    // fungsi untuk menampilkan halaman daftar konten yang sudah diupload oleh konten creator
    public function daftarkonten()
    {
        if ($this->session->userdata('username')) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $data['title'] = 'Daftar Konten';
            $data['data'] = 'Daftar Konten';
            $data['allkonten'] = $this->User_model->getAllKonten();
            $this->load->view('templates/admin/header', $data);
            $this->load->view('admin/viewdaftarkonten', $data);
            $this->load->view('templates/admin/footer');
        } else {
            redirect('login');
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Profil extends CI_Controller
{
    /* method constract untuk mendeklarasikan library dan model agar dapat digunakan 
    oleh method-method yang lain dan berada di bawah controller Profil*/
    public function __construct()
    {
        parent::__construct();
        $this->load->model('User_model');
        $this->load->model('Konten_model');
        $this->load->library('form_validation');
    }

    //function untuk dapat menampilkan halaman edit profil user
    public function index()
    {
        $this->form_validation->set_rules('namalengkap', 'Nama Lengkap', 'trim');

        // kondisi ketika form validasi masih kosong
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
        }
        // kondisi ketika form sudah terisi
        else {
            $this->User_model->editprofil();
        }
    }

    //function untuk menampilkan konten apa saja yang telah diposting oleh user
    public function konten()
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('genre', 'Jenis Konten', 'trim|required');
        $this->form_validation->set_rules('video', 'Video', 'trim');
        $this->form_validation->set_rules('isi', 'Isi', 'trim|required');

        // kondisi ketika form validasi masih kosong
        if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            //kondisi ketika user telah melakukan login
            if ($this->session->userdata('username')) {
                $data['data'] = 'Konten Saya';
                $data['userkonten'] = $this->Konten_model->getUserKonten();
                $this->load->view('templates/user/header', $data);
                $this->load->view('fitur/viewkonten', $data);
                $this->load->view('templates/user/footer');
            }
            //kondisi ketika user tidak dalam keadaan login
            else {
                redirect('login');
            }
        }
        // kondisi ketika form sudah terisi
        else {
            $this->Konten_model->tambahkonten();
        }
    }

    // fungsi untuk menghapus konten
    public function hapuskonten($id)
    {
        // kondisi untuk content creator ketika ingin menghapus konten
        if ($this->session->userdata('role_id') == 2) {
            $this->Konten_model->hapusKonten($id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert" style="text-align: center">
            Konten berhasil dihapus!
            </div>');
            redirect('profil/konten');
        }

        // kondisi untuk admin ketika ingin menghapus konten
        elseif ($this->session->userdata('role_id') == 1) {
            $this->Konten_model->hapusKonten($id);
            $this->session->set_flashdata('pesan', '<div class="alert alert-success" role="alert" style="text-align: center">
            Konten berhasil dihapus!
            </div>');
            redirect('admin/daftarkonten');
        }
    }

    // fungsi untuk menampilkan detail konten berdasarkan id
    public function kontendetail($id)
    {
        $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
        $data['data'] = 'Detail Konten';
        $data['konten'] = $this->Konten_model->getKontenById($id);
        $this->load->view('templates/user/header', $data);
        $this->load->view('fitur/viewdetail', $data);
        $this->load->view('templates/user/footer');
    }

    //function untuk mengubah konten
    public function editkonten($id)
    {
        $this->form_validation->set_rules('judul', 'Judul', 'trim|required');
        $this->form_validation->set_rules('genre', 'Jenis Konten', 'trim|required');
        $this->form_validation->set_rules('video', 'Video', 'trim');
        $this->form_validation->set_rules('isi', 'Isi', 'trim|required');

        // kondisi ketika form validasi masih kosong
        if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            //kondisi ketika user telah melakukan login
            if ($this->session->userdata('username')) {
                $data['data'] = 'Ubah Konten';
                $data['konten'] = $this->Konten_model->getKontenById($id);
                $this->load->view('templates/user/header', $data);
                $this->load->view('fitur/viewubahkonten', $data);
                $this->load->view('templates/user/footer');
            }
            //kondisi ketika user tidak dalam keadaan login
            else {
                redirect('login');
            }
        }
        // kondisi ketika form sudah terisi
        else {
            $this->Konten_model->editkonten($id);
            redirect('profil/konten');
        }
    }

    public function pencarian()
    {
        $keyword = $this->input->post('keyword');
        $data['konten'] = $this->User_model->get_keyword($keyword);
        $this->load->view('templates/user/header', $data);
        $this->load->view('fitur/viewwawasan', $data);
        $this->load->view('templates/user/footer');
    }
}

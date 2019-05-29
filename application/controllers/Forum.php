<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Forum extends CI_Controller
{
    // fungsi construct untuk mendeklarsikan model ke seluruh fungsi/method yang ada di forum
    public function __construct()
    {
        Parent::__construct();
        $this->load->library('form_validation');
        $this->load->model('User_model');
        $this->load->model('Forum_model');
    }

    public function index()
    {
        $this->form_validation->set_rules('pertanyaan', 'Pertanyaan', 'required|trim');

        // kondisi ketika form validasi masih kosong
        if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            //kondisi ketika user telah melakukan login
            if ($this->session->userdata('username')) {
                $data['data'] = 'Forum';
                $data['allforum'] = $this->Forum_model->getAllPertanyaan();
                $this->load->view('templates/user/header', $data);
                $this->load->view('forum/viewforum', $data);
                $this->load->view('templates/user/footer');
            }
            //kondisi ketika user tidak dalam keadaan login
            else {
                redirect('login');
            }
        }
        // kondisi ketika form sudah terisi
        else {
            $this->Forum_model->tambahpertanyaan();
        }
    }

    // fungsi untuk menampilkan detail konten berdasarkan id
    public function detailforum($id)
    {
        $this->form_validation->set_rules('jawaban', 'Jawaban', 'required|trim');

        // kondisi ketika form validasi masih kosong
        if ($this->form_validation->run() == FALSE) {
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            //kondisi ketika user telah melakukan login
            if ($this->session->userdata('username')) {
                $data['data'] = 'Detail Pertanyaan';
                $data['forum'] = $this->Forum_model->getPertanyaanById($id);
                $data['alljawaban'] = $this->Forum_model->getAllJawaban($id);
                $this->load->view('templates/user/header', $data);
                $this->load->view('forum/viewdetailforum', $data);
                $this->load->view('templates/user/footer');
            }
            //kondisi ketika user tidak dalam keadaan login
            else {
                redirect('login');
            }
        }
        // kondisi ketika form sudah terisi
        else {
            $this->Forum_model->tambahjawaban($id);
        }
    }
}

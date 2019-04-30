<?php

class Register extends CI_Controller{
    public function index()
        {
            $data['data']='Register';
            $data['judul']='REGISTRASI ';
            $data['isi']='"Miliki Sebuah Akun & Dapatkan Pengalaman Berharga"';
            $this->load->view('templates/header',$data);
            $this->load->view('akun/viewregister');
            $this->load->view('templates/footer');
        }
}
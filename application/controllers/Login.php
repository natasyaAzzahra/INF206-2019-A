<?php

class Login extends CI_Controller{
    public function index()
        {
            $data['data']='Login';
            $data['judul']='LOGIN ';
            $data['isi']='"Satu Akun Untuk Berbagi Pengalaman Sesama Nelayan"';
            $this->load->view('templates/header',$data);
            $this->load->view('akun/viewlogin');
            $this->load->view('templates/footer');
        }
}
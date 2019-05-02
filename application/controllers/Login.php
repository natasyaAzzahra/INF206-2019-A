<?php

class Login extends CI_Controller{
    public function index()
        {
            $data['data']='Login';
            $this->load->view('templates/header',$data);
            $this->load->view('akun/viewlogin');
        }
}
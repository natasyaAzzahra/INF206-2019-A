<?php

class Register extends CI_Controller{
    public function index()
        {
            $data['data']='Register';
            $this->load->view('templates/header',$data);
            $this->load->view('akun/viewregister');
        }
}
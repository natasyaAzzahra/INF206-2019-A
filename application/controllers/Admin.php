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
}

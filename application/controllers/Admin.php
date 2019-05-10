<?php

class Admin extends CI_Controller
{
    public function index()
    {
        if (isset($_SESSION['username'])) {
            $data['data'] = 'Home';
            $data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
            $this->load->view('templates/admin/header', $data);
            $this->load->view('home/indexadmin', $data);
            $this->load->view('templates/admin/footer');
        } else {
            redirect('login');
        }
    }
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	//function untuk menampilkan halaman home user
	public function index()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['data'] = 'Home';
		$data['judul'] = 'Nelayan Belajar';
		$data['isi'] = '"Temukan Solusi Masalah Aktivitas Nelayan Disini"';
		$this->load->view('templates/user/header', $data);
		$this->load->view('home/index');
		$this->load->view('templates/user/footer');
	}

	//function untuk menampilkan halaman fitur wawasan user
	public function wawasan()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['data'] = 'Wawasan';
		$data['judul'] = 'Nelayan Belajar';
		$data['isi'] = '"Temukan Solusi Masalah Aktivitas Nelayan Disini"';
		$this->load->view('templates/user/header', $data);
		$this->load->view('fitur/viewwawasan');
		$this->load->view('templates/user/footer');
	}
}

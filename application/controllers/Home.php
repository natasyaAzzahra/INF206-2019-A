<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	// fungsi construct untuk mendeklarsikan model ke seluruh fungsi/method yang ada di home
	public function __construct()
	{
		Parent::__construct();
		$this->load->model('User_model');
	}

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
		$this->load->view('templates/user/header', $data);
		$this->load->view('fitur/viewwawasan');
		$this->load->view('templates/user/footer');
	}
	// fungsi untuk menampilkan halaman fitur peraturan undang undang
	public function peraturan()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['data'] = 'Peraturan UU';
		$data['alluud'] = $this->User_model->getAllUud();
		$this->load->view('templates/user/header', $data);
		$this->load->view('fitur/viewperaturan');
		$this->load->view('templates/user/footer');
	}
}

<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Home extends CI_Controller
{
	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 */
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

	public function konten()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		if (isset($_SESSION['username'])) {
			$this->load->view('fitur/viewkonten');
		} else {
			redirect('login');
		}
	}

	public function kontak()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['data'] = 'Home';
		$data['judul'] = 'Nelayan Belajar';
		$data['isi'] = '"Temukan Solusi Masalah Aktivitas Nelayan Disini"';
		$this->load->view('templates/user/header', $data);
		$this->load->view('fitur/viewkontak', $data);
		$this->load->view('templates/user/footer');
	}

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

	public function tentangkami()
	{
		$data['user'] = $this->db->get_where('user', ['username' => $this->session->userdata('username')])->row_array();
		$data['data'] = 'Tentang Kami';
		$data['judul'] = 'Nelayan Belajar';
		$data['isi'] = '"Temukan Solusi Masalah Aktivitas Nelayan Disini"';
		$this->load->view('templates/user/header', $data);
		$this->load->view('fitur/viewtentangkami', $data);
		$this->load->view('templates/user/footer');
	}
}

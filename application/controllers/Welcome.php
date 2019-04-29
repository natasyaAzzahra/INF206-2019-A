<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

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
		$data['data']='Home';
		$data['judul']='Nelayan Belajar';
		$data['isi']='"Temukan Solusi Masalah Aktivitas Nelayan Disini"';
		$this->load->view('templates/header',$data);
		$this->load->view('home/index');
		$this->load->view('templates/footer');
	}
	public function login()
	{
		$data['data']='Login';
		$data['judul']='LOGIN ';
		$data['isi']='"Satu Akun Untuk Berbagi Pengalaman Sesama Nelayan"';
		$this->load->view('templates/header',$data);
		$this->load->view('akun/login');
		$this->load->view('templates/footer');
	}
	public function register()
	{
		$data['data']='Register';
		$data['judul']='REGISTRASI ';
		$data['isi']='"Miliki Sebuah Akun & Dapatkan Pengalaman Berharga"';
		$this->load->view('templates/header',$data);
		$this->load->view('akun/register');
		$this->load->view('templates/footer');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('akun_model');
		$this->load->model('crud_model');
	}

	public function index()
	{
		$this->load->view('login');
	}
	
	public function login_go()
	{
		//ambil id & password
		$nama_admin = $this->input->post('nama_admin');
		$password = md5($this->input->post('password')); //enkripsi md5
		
		// var_dump($password);die();

		//cek akun jika benar maka login
		$this->akun_model->cek_akun($nama_admin, $password);	
	}
	
	
}

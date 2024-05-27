<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('akun_model');
		$this->load->model('crud_model');
	}

	public function index()
	{
		$this->load->view('homepage');
	}

	public function homepage_daftar()
	{
		$this->load->view('homepage_daftar');
	}


	public function homepage_daftar_go()
	{
		//variabel data
		$data = array(
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'no_telpon' => $this->input->post('no_telpon'),
			'email' => $this->input->post('email'),
			'password' => md5($this->input->post('password'))
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('pelanggan', $data);
		
		//redirect
		redirect('/welcome/homepage_login', 'refresh');
	}

	public function homepage_login()
	{
		$this->load->view('homepage_login');
	}

	public function homepage_login_go()
	{
		$email = $this->input->post('email');
        $password = $this->input->post('password');

        $user = $this->akun_model->login_pelanggan($email, $password);

		// var_dump($user);die();

		if ($user) {
            $this->session->set_userdata('id_pelanggan', $user->id_pelanggan);
            redirect('pelanggan');
        } else {
            $this->session->set_flashdata('error', 'Invalid email or password');
			echo '<script>alert("Login gagal! Harap periksa email atau password")</script>';
            redirect('welcome/homepage_login');
        }
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pelanggan extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('akun_model');
		$this->load->model('crud_model');

		if (!$this->session->userdata('id_pelanggan')) {
			echo '<script>alert("Anda belum login! Silahkan login terlebih dahulu....")</script>';
            redirect('/welcome/homepage_login');
        }
	}

	public function index()
	{	
		$data['array_booking'] = $this->crud_model->mengambil_data_join_id('booking',['armada','pelanggan','tujuan'],'pelanggan.id_pelanggan',$this->session->userdata('id_pelanggan'));
		
		// var_dump($data);die();

		$this->load->view('pelanggan_dashboard',$data);
	}

	public function booking_add()
	{		
		$data['array_tujuan'] = $this->crud_model->mengambil_data('tujuan');
		$data['array_armada'] = $this->crud_model->mengambil_data('armada');

		$this->load->view('pelanggan_booking_add',$data);
	}

	public function booking_add_go()
	{	
		//variabel data
		$data = array(
			'id_tujuan' => $this->input->post('id_tujuan'),
			'id_pelanggan' => $this->session->userdata('id_pelanggan'),
			'tanggal_keberangkatan' => $this->input->post('tanggal_keberangkatan'),
			'id_armada' => $this->input->post('id_armada'),		
			'paket' => $this->input->post('paket')		
		);

		// var_dump($data);die();
		
		//tampilkan view
		$this->crud_model->masukan_data('booking', $data);
		
		//redirect
		redirect('/pelanggan', 'refresh');
	}

	public function logout()
	{
		echo '<script>alert("Berhasil logout!")</script>';
		$this->akun_model->logout_pelanggan();
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		//load model
		$this->load->model('akun_model');
		$this->load->model('crud_model');
	}

	public function index()
	{
		$this->load->view('admin_dashboard');
	}
	public function booking()
	{
		$this->load->view('admin_booking');
	}
	public function booking_add()
	{
		$this->load->view('admin_booking_add');
	}
	public function armada()
	{
		// $data['array_armada'] = $this->crud_model->mengambil_data_join('armada',['tujuan']);

		$this->load->view('admin_armada');
	}
	public function armada_edit($id)
	{
		//load model crud
		$data['array_armada'] = $this->crud_model->mengambil_data_id('armada','id_armada',$id);
		$data['array_tujuan'] = $this->crud_model->mengambil_data('tujuan');
		$data['obj_armada'] = $data['array_armada'][0];

		$this->load->view('admin_armada_edit',$data);
	}
	public function armada_edit_go()
	{
		//variabel data edit
		$data = array(
			'nama_armada' => $this->input->post('nama_armada'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'id_tujuan' => $this->input->post('id_tujuan'),
			'no_telp' => $this->input->post('no_telp')		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('armada', $data,'id_armada',$this->input->post('id_armada'));

		//redirect
		redirect('/admin/armada', 'refresh');
	}
	public function armada_hapus($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('armada','id_armada',$id);

		//redirect
		redirect('/admin/armada', 'refresh');
	}	
	public function armada_add()
	{
		$data['array_tujuan'] = $this->crud_model->mengambil_data('tujuan');

		$this->load->view('admin_armada_add',$data);
	}
	public function armada_add_go()
	{
		//variabel data
		$data = array(
			'nama_armada' => $this->input->post('nama_armada'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'id_tujuan' => $this->input->post('id_tujuan'),
			'no_telp' => $this->input->post('no_telp')		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('armada', $data);
		
		//redirect
		redirect('/admin/armada', 'refresh');
	}
	public function tujuan()
	{
		// $data['array_tujuan'] = $this->crud_model->mengambil_data('tujuan');

		$this->load->view('admin_tujuan');
	}
	public function tujuan_edit($id)
	{
		//load model crud
		$data['array_tujuan'] = $this->crud_model->mengambil_data_id('tujuan','id_tujuan',$id);
		$data['obj_tujuan'] = $data['array_tujuan'][0];

		$this->load->view('admin_tujuan_edit',$data);
	}
	public function tujuan_edit_go()
	{
		//variabel data edit
		$data = array(
			'nama_tujuan' => $this->input->post('nama_tujuan')	
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('tujuan', $data,'id_tujuan',$this->input->post('id_tujuan'));

		//redirect
		redirect('/admin/tujuan', 'refresh');
	}
	public function tujuan_hapus($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('tujuan','id_tujuan',$id);

		//redirect
		redirect('/admin/tujuan', 'refresh');
	}	
	public function tujuan_add()
	{
		$this->load->view('admin_tujuan_add');
	}
	public function tujuan_add_go()
	{
		//variabel data
		$data = array(
			'nama_tujuan' => $this->input->post('nama_tujuan')	
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('tujuan', $data);
		
		//redirect
		redirect('/admin/tujuan', 'refresh');
	}
	public function pelanggan()
	{
		// $data['array_pelanggan'] = $this->crud_model->mengambil_data('pelanggan');

		$this->load->view('admin_pelanggan');
	}
	public function pelanggan_edit($id)
	{
		//load model crud
		$data['array_pelanggan'] = $this->crud_model->mengambil_data_id('pelanggan','id_pelanggan',$id);
		$data['obj_pelanggan'] = $data['array_pelanggan'][0];

		$this->load->view('admin_pelanggan_edit',$data);
	}
	public function pelanggan_edit_go()
	{
		//variabel data edit
		$data = array(
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp')		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('pelanggan', $data,'id_pelanggan',$this->input->post('id_pelanggan'));

		//redirect
		redirect('/admin/pelanggan', 'refresh');
	}
	public function pelanggan_hapus($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('pelanggan','id_pelanggan',$id);

		//redirect
		redirect('/admin/pelanggan', 'refresh');
	}	
	public function pelanggan_add()
	{
		$this->load->view('admin_pelanggan_add');
	}
	public function pelanggan_add_go()
	{
		//variabel data
		$data = array(
			'nama_pelanggan' => $this->input->post('nama_pelanggan'),
			'tempat_lahir' => $this->input->post('tempat_lahir'),
			'tanggal_lahir' => $this->input->post('tanggal_lahir'),
			'alamat' => $this->input->post('alamat'),
			'no_telp' => $this->input->post('no_telp')		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('pelanggan', $data);
		
		//redirect
		redirect('/admin/pelanggan', 'refresh');
	}
	public function logout()
	{
		// $this->load->view('admin_dashboard');
	}
}

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
		$data['jumlah_booking'] = $this->crud_model->menghitung_jumlah_row('booking');
		$data['jumlah_armada'] = $this->crud_model->menghitung_jumlah_row('armada');
		$data['jumlah_pelanggan'] = $this->crud_model->menghitung_jumlah_row('pelanggan');
		$data['jumlah_tujuan'] = $this->crud_model->menghitung_jumlah_row('tujuan');
		
		$this->load->view('admin_dashboard',$data);
	}
	public function algoritmadjaksara()
	{
		$this->load->view('admin_algoritmadjaksara');
	}
	public function algoritmadjaksara_go()
	{
		$this->load->view('admin_algoritmadjaksara_go');
	}
	public function booking()
	{
		$data['array_booking'] = $this->crud_model->mengambil_data_join('booking',['armada','tujuan','pelanggan']);
		
		$this->load->view('admin_booking',$data);
	}
	public function booking_add()
	{
		$data['array_tujuan'] = $this->crud_model->mengambil_data('tujuan');
		$data['array_armada'] = $this->crud_model->mengambil_data('armada');
		$data['array_pelanggan'] = $this->crud_model->mengambil_data('pelanggan');

		$this->load->view('admin_booking_add', $data);
	}
	public function booking_add_go()
	{
		//variabel data
		$data = array(
			'id_tujuan' => $this->input->post('id_tujuan'),
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'tanggal_keberangkatan' => $this->input->post('tanggal_keberangkatan'),
			'id_armada' => $this->input->post('id_armada'),		
			'paket' => $this->input->post('paket')		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('booking', $data);
		
		//redirect
		redirect('/admin/booking', 'refresh');
	}
	public function booking_edit($id)
	{
		$data['array_tujuan'] = $this->crud_model->mengambil_data('tujuan');
		$data['array_armada'] = $this->crud_model->mengambil_data('armada');
		$data['array_pelanggan'] = $this->crud_model->mengambil_data('pelanggan');		
		
		//load model crud
		$data['array_booking'] = $this->crud_model->mengambil_data_id('booking','id_booking',$id);
		$data['obj_booking'] = $data['array_booking'][0];

		$this->load->view('admin_booking_edit',$data);
	}	
	public function booking_edit_go()
	{
		//variabel data edit
		$data = array(
			'id_tujuan' => $this->input->post('id_tujuan'),
			'id_pelanggan' => $this->input->post('id_pelanggan'),
			'tanggal_keberangkatan' => $this->input->post('tanggal_keberangkatan'),
			'paket' => $this->input->post('paket')		
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('booking', $data,'id_booking',$this->input->post('id_booking'));

		//redirect
		redirect('/admin/booking', 'refresh');
	}
	public function booking_hapus($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('booking','id_booking',$id);

		//redirect
		redirect('/admin/booking', 'refresh');
	}		
	public function armada()
	{
		$data['array_armada'] = $this->crud_model->mengambil_data('armada');

		$this->load->view('admin_armada',$data);
	}
	public function armada_edit($id)
	{
		//load model crud
		$data['array_armada'] = $this->crud_model->mengambil_data_id('armada','id_armada',$id);
		$data['obj_armada'] = $data['array_armada'][0];

		$this->load->view('admin_armada_edit',$data);
	}
	public function armada_edit_go()
	{
		//variabel data edit
		$data = array(
			'nama_armada' => $this->input->post('nama_armada'),
			'tipe_mobil' => $this->input->post('tipe_mobil'),
			'jumlah_tampungan' => $this->input->post('jumlah_tampungan')		
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
		$data['array_tujuan'] = '';#$this->crud_model->mengambil_data('tujuan');

		$this->load->view('admin_armada_add',$data);
	}
	public function armada_add_go()
	{
		//variabel data
		$data = array(
			'nama_armada' => $this->input->post('nama_armada'),
			'tipe_mobil' => $this->input->post('tipe_mobil'),
			'jumlah_tampungan' => $this->input->post('jumlah_tampungan')		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('armada', $data);
		
		//redirect
		redirect('/admin/armada', 'refresh');
	}
	public function tujuan()
	{
		$data['array_tujuan'] = $this->crud_model->mengambil_data('tujuan');

		$this->load->view('admin_tujuan',$data);
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
			'nama_tujuan' => $this->input->post('nama_tujuan'),	
			'paket' => $this->input->post('paket'),	
			'harga' => $this->input->post('harga')	
		);

		//load model mengubah data
		$this->crud_model->mengubah_data_id('tujuan', $data,'id_tujuan',$this->input->post('id_tujuan'));

		//redirect
		redirect('/admin/tujuan', 'refresh');
	}
	public function tujuan_hapus($id)
	{
		//load model hapus data
		$this->crud_model->menghapus_data_id('tujuan','tipe_armada',$id);

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
			'nama_tujuan' => $this->input->post('nama_tujuan'),	
			'paket' => $this->input->post('paket'),	
			'harga' => $this->input->post('harga')	
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('tujuan', $data);
		
		//redirect
		redirect('/admin/tujuan', 'refresh');
	}
	public function pelanggan()
	{
		$data['array_pelanggan'] = $this->crud_model->mengambil_data('pelanggan');

		$this->load->view('admin_pelanggan',$data);
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
			'alamat' => $this->input->post('alamat'),
			'no_telpon' => $this->input->post('no_telpon')		
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
			'alamat' => $this->input->post('alamat'),
			'no_telpon' => $this->input->post('no_telpon')		
		);
		
		//tampilkan view
		$this->crud_model->masukan_data('pelanggan', $data);
		
		//redirect
		redirect('/admin/pelanggan', 'refresh');
	}
	public function logout()
	{
		//redirect
		redirect('/', 'refresh');
	}
}

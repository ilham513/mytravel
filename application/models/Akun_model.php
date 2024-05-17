<?php

class Akun_model extends CI_Model{
	public function login_pelanggan($email, $password)
	{
		$this->db->where('email', $email);
        $this->db->where('password', md5($password));
        $query = $this->db->get('pelanggan');
		
		// var_dump($this->db->last_query());die();
        return $query->row();
	}

	public function logout_pelanggan() {
        $this->session->unset_userdata('id_pelanggan');
        redirect('/');
    }

	public function cek_akun($nama_admin, $password)
	{
		//query ambil data login
		$query = $this->db->query("SELECT * FROM admin WHERE nama_admin='$nama_admin' AND password='$password'");
		$result = $query->result_array();
		
		// var_dump($query);die();
		
		//membuat session login
		if (count($result) > 0) {
			//set session
			$this->session->set_userdata('login', true);
			
			// //jika gudang maka kasih session role gudang
			// if($id == 'gudang'){
				// $this->session->set_userdata('role', 'gudang');
			// }
	
			echo 'Login berhasil';
			
			redirect('admin', 'refresh');
		} else {
			echo '<script>alert("Id atau password salah. Mohon tulis kembali!")</script>';
			redirect('login', 'refresh');
		}		
	}

	public function mengecek_session()
	{
		if($this->session->userdata('login')){
			
		}else{
			echo '<script>alert("Silahkan login terlebih dahulu!")</script>';
			redirect('login', 'refresh');
		}
				
	}


	public function menghapus_session()
	{
		//hapus session
		$this->session->unset_userdata('login');
		$this->session->unset_userdata('role');
		
		//hapus semua session
		// sess_destroy();
		
		//redirect
		echo '<script>alert("berhasil logout")</script>';
		redirect('login', 'refresh');				
	}

}
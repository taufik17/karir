<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index(){ // halaman utama register jobseeker
		$isi['title'] = "ICC | Register Jobseeker";
		$this->load->view('web/daftar/jobseeker/tampilan_register',$isi);
	}

	public function alumniitera(){ // halaman register alumni itera
		$isi['title'] = "ICC | Register alumni";
		$this->load->view('web/daftar/jobseeker/form_alumniitera',$isi);
	}

	public function umum(){ // halaman register non alumni itera
		$isi['title'] = "ICC | Register non alumni ITERA";
		$this->load->view('web/daftar/jobseeker/form_umum',$isi);
	}

	public function mahasiswa(){ // halaman register mahasiswa
		$isi['title'] = "ICC | Register Mahasiswa";
		$this->load->view('web/daftar/jobseeker/form_mahasiswa',$isi);
	}

	public function savereg_umum(){
		$pswd = $this->input->post('password');
		$isi['username'] = $this->input->post('username');
		$username = $this->input->post('username');
		$isi['password'] = hash('sha512',$pswd . config_item('encryption_key'));
		$isi['status'] = 1;
		$isi['role_user'] = 2;

		$sandi1 = $this->input->post('password');
		$sandi2 = $this->input->post('password2');

		if ($sandi1 != $sandi2) {
			echo "<script>window.alert('Sandi Tidak Sama')</script>";
			$this->session->set_flashdata('info_reg_umum',
			'<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-ban"></i> Alert!</h4>
			sandi tidak sama
			</div>');
			redirect('register/umum');
		} else {
			$username = $this->input->post('username');
			$this->model_daftar->cek_username_jobseeker($username);
			$this->model_daftar->getinsert_user($isi);
			$id = $this->db->query("SELECT id_akun FROM user WHERE username = '$username'");
			foreach ($id->result() as $row) {
				$id_akun = $row->id_akun;
			}
			$data['Email_jobseeker']	= $this->input->post('Email_jobseeker');
			$data['Nama_jobseeker']	= $this->input->post('Nama_jobseeker');
			$data['no_hp'] = $this->input->post('nohp_jobseeker');
			$data['id_akun'] = $id_akun;
			$data['role_jobseeker'] = 2;
			$data['perguruan_tinggi'] = $this->input->post('perguruan_tinggi');
			$this->model_daftar->getinsertjobseeker($data);
			redirect('login/member');
		}

	}

	function hash($string)
	{
		return hash('sha512', $string . config_item('encryption_key'));
	}

	public function inijobseeker(){
		echo "ini jobseeker";
	}

	public function inicompany(){
		echo "ini company";
	}
}

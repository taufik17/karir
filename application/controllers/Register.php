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

	public function sregalumniitera(){ // save registrasi alumni itera
		$key = $this->input->post('Email_jobseeker');
		$pswd = $this->input->post('password_jobseeker');
		$data['Email_jobseeker']	= $this->input->post('Email_jobseeker');
		$data['password_jobseeker'] = hash('sha512',$pswd . config_item('encryption_key'));
		$data['NIM_jobseeker'] = $this->input->post('NIM_jobseeker');
		$data['Nama_jobseeker']	= $this->input->post('Nama_jobseeker');
		$data['nohp_jobseeker'] = $this->input->post('nohp_jobseeker');

		$sandi1 = $this->input->post('password_jobseeker');
		$sandi2 = $this->input->post('ulangi_password');
		$this->load->model('model_daftar');

		$cektera=$this->model_daftar->cekitera($key);
		$cek1=$this->model_daftar->checkEmail($key);
		$cek2=$this->model_daftar->cekmail($key);

		if ($sandi1 != $sandi2) {
			echo "<script>window.alert('Sandi Tidak Sama')</script>";
			$this->session->set_flashdata('info',
			'<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h3><i class="icon fa fa-ban"></i> Alert!</h3>
			sandi tidak sama
			</div>');
			redirect('Register/alumniitera');
		}
		else {
			if($cektera == false) {
				echo "<script>window.alert('Gunakan Email ITERA')</script>";
				echo "<meta http-equiv='refresh' content='0;url=http://localhost/karir/Register/alumniitera'>";
			}
			else {
				if($cek1 == false)
				{
					echo "<script>window.alert('Email anda invalid')</script>";
					echo "<meta http-equiv='refresh' content='0;url=http://localhost/mtageo/Register'>";
				}
				else
				{
					if ($cek2 == false) {
						echo "<script>window.alert('Email Sudah Terdaftar')</script>";
						echo "<meta http-equiv='refresh' content='0;url=http://localhost/mtageo/Register'>";
					}
					else
					{
						$this->model_daftar->getinsert($data);
						$this->session->set_flashdata('info',
						'<div class="alert alert-success alert-dismissible">
						<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
						<h3><i class="icon fa fa-check"></i> Alert!</h3>
						Pendaftaran Berhasil
						</div>');
						redirect('Register/alumniitera');
					}
				}
			}
		}
	}

	function sregnonalumniitera(){ // save registrasi alumni non itera
		$key = $this->input->post('Email_jobseeker');
		$pswd = $this->input->post('password_jobseeker');
		$data['Email_jobseeker']	= $this->input->post('Email_jobseeker');
		$data['password_jobseeker'] = hash('sha512',$pswd . config_item('encryption_key'));
		$data['Nama_jobseeker']	= $this->input->post('Nama_jobseeker');
		$data['nohp_jobseeker'] = $this->input->post('nohp_jobseeker');

		$sandi1 = $this->input->post('password_jobseeker');
		$sandi2 = $this->input->post('ulangi_password');
		$this->load->model('model_daftar');

		$cek2=$this->model_daftar->cekmail2($key);

		if ($sandi1 != $sandi2) {
			echo "<script>window.alert('Sandi Tidak Sama')</script>";
			$this->session->set_flashdata('info',
			'<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h3><i class="icon fa fa-ban"></i> Alert!</h3>
			sandi tidak sama
			</div>');
			redirect('Register/umum');
		}
		else {
			if ($cek2 == false) {
				echo "<script>window.alert('Email Sudah Terdaftar')</script>";
				echo "<meta http-equiv='refresh' content='0;url=http://localhost/karir/Register/umum'>";
			}
			else {
				$this->model_daftar->getinsert2($data);
				$this->session->set_flashdata('info',
				'<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h3><i class="icon fa fa-check"></i> Alert!</h3>
				Pendaftaran Berhasil
				</div>');
				redirect('Register/umum');
			}
		}
	}

	function sregmahasiswa(){ // save registrasi mahasiswa
		$key = $this->input->post('Email_jobseeker');
		$pswd = $this->input->post('password_jobseeker');
		$data['Email_jobseeker']	= $this->input->post('Email_jobseeker');
		$data['password_jobseeker'] = hash('sha512',$pswd . config_item('encryption_key'));
		$data['Nama_jobseeker']	= $this->input->post('Nama_jobseeker');
		$data['nohp_jobseeker'] = $this->input->post('nohp_jobseeker');
		$data['NIM_jobseeker'] = $this->input->post('NIM_jobseeker');
		$data['status'] = $this->input->post('status');

		$sandi1 = $this->input->post('password_jobseeker');
		$sandi2 = $this->input->post('ulangi_password');
		$this->load->model('model_daftar');

		$cek2=$this->model_daftar->cekmail3($key);

		if ($sandi1 != $sandi2) {
			echo "<script>window.alert('Sandi Tidak Sama')</script>";
			$this->session->set_flashdata('info',
			'<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h3><i class="icon fa fa-ban"></i> Alert!</h3>
			sandi tidak sama
			</div>');
			redirect('Register/mahasiswa');
		}
		else {
			if ($cek2 == false) {
				echo "<script>window.alert('Email Sudah Terdaftar')</script>";
				echo "<meta http-equiv='refresh' content='0;url=http://localhost/karir/Register/mahasiswa'>";
			}
			else {
				$this->model_daftar->getinsert3($data);
				$this->session->set_flashdata('info',
				'<div class="alert alert-success alert-dismissible">
				<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
				<h3><i class="icon fa fa-check"></i> Alert!</h3>
				Pendaftaran Berhasil
				</div>');
				redirect('Register/mahasiswa');
			}
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

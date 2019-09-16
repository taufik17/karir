<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_company extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ITERA | Register Company";
		$isi['jenis_industri'] = $this->model_data->jenis_industri();
		$isi['provinsi'] = $this->model_data->provinsi();
		$this->load->view('web/daftar/company/tampilan_register',$isi);
	}

	function kabupaten(){
			$propinsiID = $_GET['id'];
			$kabupaten   = $this->db->get_where('kabupaten',array('id_prov'=>$propinsiID));
			echo " <div class='form-group-company'>
						<label>Kota / Kabupaten<span class='required'>&nbsp*</span>&nbsp:</label>";
			echo "<select id='kabupaten' name='kabupaten' class='form-control'>";
			foreach ($kabupaten->result() as $k)
			{
					echo "<option value='$k->id'>$k->nama</option>";
			}
			echo "</select></div>";
	}

	function sregcompany(){
		$isi['title'] = "ITERA | Register Company";
		$isi['email'] = $this->input->post('Email_officer');
		$username = $this->input->post('username');
		$id = $this->db->query("SELECT id_akun FROM user WHERE username = '$username'");

		foreach ($id->result() as $row) {
			$id_akun = $row->id_akun;
		}
		$isi = $id_akun;
		$data['id_akun'] = $id_akun;
		$data['Nama_perusahaan']	= $this->input->post('Nama_perusahaan');
		$data['id_industri'] = $this->input->post('Jenis_industri');
		$data['Email_perusahaan']	= $this->input->post('Email_perusahaan');
		$data['Website'] = $this->input->post('website');
		$data['telp_perusahaan'] = $this->input->post('telp_perusahaan');
		$data['id_provinsi'] = $this->input->post('provinsi');
		$data['id_kabupaten_kota'] = $this->input->post('kabupaten');
		$data['alamat'] = $this->input->post('alamat');
		$data['kode_pos'] = $this->input->post('kode_pos');

		$data['Nama_officer'] = $this->input->post('Nama_officer');
		$data['Email_officer'] = $this->input->post('Email_officer');
		$data['Telp_officer'] = $this->input->post('Telp_officer');
		$data['Hp_officer'] = $this->input->post('Hp_officer');

		$this->load->model('model_daftar');
		$this->model_daftar->getinsertcompany($data);
		$this->model_daftar->getupdateuser($isi);
		$this->load->view('web/login/company/tampilan_company_login');
	}


	function reg1(){
		$isi['title'] = "ITERA | Pendaftaran Perusahaan";
		$isi['nama_perusahaan']	= $this->input->post('nama_perusahaan');
		$isi['jenis_industri'] = $this->model_data->jenis_industri();
		$isi['provinsi'] = $this->model_data->provinsi();
		$isi['username'] = $this->input->post('username');
		$pswd = $this->input->post('password');
		$pswd2 = $this->input->post('password2');
		$data['password'] = hash('sha512',$pswd . config_item('encryption_key'));
		$data['username'] = $this->input->post('username');
		$data['role_user'] = 1;
		$username = $this->input->post('username');
		if ($pswd != $pswd2) {
			echo "<script>window.alert('Sandi Tidak Sama')</script>";
			$this->session->set_flashdata('info_reg_company',
			'<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-ban"></i> Alert!</h4>
			sandi tidak sama
			</div>');
			redirect('register_company');
		} else {
			$this->model_daftar->cek_username($username);
			$this->model_daftar->getinsertreg1($data);
			$this->load->view('web/daftar/company/step2', $isi);
		}
	}

	function hash($string)
	{
		return hash('sha512', $string . config_item('encryption_key'));
	}
}

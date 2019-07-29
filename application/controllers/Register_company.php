<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_company extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ITERA | Register Company";
		$isi['jenis_industri'] = $this->db->query("SELECT id, jenis_industri FROM industri");
		$isi['negara'] = $this->db->query("SELECT id, nama_negara FROM negara");
		$isi['provinsi'] = $this->db->query("SELECT id, nama FROM provinsi");
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
		$this->load->view('web/daftar/company/step2',$isi);
		$key = $this->input->post('Email_jobseeker');
		$pswd = $this->input->post('password_jobseeker');
		$data['Nama_perusahaan']	= $this->input->post('Nama_perusahaan');
		$data['Jenis_industri'] = $this->input->post('Jenis_industri');
		$data['Email_perusahaan']	= $this->input->post('Email_perusahaan');
		$data['website'] = $this->input->post('website');
		$data['telp_perusahaan'] = $this->input->post('telp_perusahaan');
		$data['provinsi'] = $this->input->post('provinsi');
		$data['kabupaten'] = $this->input->post('kabupaten');
		$data['alamat'] = $this->input->post('alamat');
		$data['kode_pos'] = $this->input->post('kode_pos');
	
		$this->load->model('model_daftar');
		$this->model_daftar->getinsert($data);
	}
}

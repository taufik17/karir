<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_company extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ITERA | Register Company";
		$isi['jenis_industri'] = $this->db->query("SELECT id_industri, jenis_industri FROM industri");
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
		$isi['email'] = $this->input->post('Email_officer');
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
		$this->load->view('web/daftar/company/step2',$isi);
	}
}

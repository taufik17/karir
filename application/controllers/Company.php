<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
	public function index()
	{
		$sess_company = $this->session->userdata('Email_officer');
		if(!empty($sess_company))
		{
			redirect('company/dashboard');
		}else {
			echo "login dulu";
		}
	}

	public function dashboard(){
		$this->model_keamanan->getkeamanancompany();
		$isi['title'] = "ICC | Dashboard Company";
		$isi['menu'] = "company/menu/menu";
		$isi['konten'] = "company/konten/konten_beranda";
		$isi['profil_company'] = $this->model_data->profil_company();
		$this->load->view('company/tampilan_dashboard_company',$isi);
	}

	public function listjob(){
		$this->model_keamanan->getkeamanancompany();
		$isi['title'] = "ICC | List Job";
		$isi['menu'] = "company/menu/menu";
		$isi['konten'] = "company/konten/konten_tambah_joblist";
		$isi['profil_company'] = $this->model_data->profil_company();
		$this->load->view('company/tampilan_dashboard_company',$isi);
	}

	public function data_pekerjaan(){
    $data = $this->model_data->data_pekerjaan();
    echo json_encode($data);
  }

	public function tambah_joblist(){
		$nama_joblist = $this->input->post('job');
		$deadline = $this->input->post('waktu');
    $data = $this->model_data->insert_job($nama_joblist, $deadline);
    echo json_encode($data);
	}

	public function detailjob(){
		$key = $this->uri->segment(3);
		echo "ini adalah data pekerjaan $key";
	}

	function logout(){
		$this->session->sess_destroy();
		$this->session->unset_userdata($sess_company);
		redirect('Beranda');
	}
}

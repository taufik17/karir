<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$session_admin = $this->session->userdata('Email_admin');
		$isi['title'] = "ICC | Admin Login";
		if(!empty($session_admin))
		{
			redirect('admin/dashboard');
		}else {
			$this->load->view('admin/tampilan_login',$isi);
		}
	}

	function login(){
		$u = $this->input->post('Email');
		$p = $this->input->post('Password');
		$this->load->model('model_userlogin');
		$this->model_userlogin->getloginadmin($u, $p);
	}

	function dashboard(){
		$this->model_keamanan->getkeamananadmin();
		$isi['title'] = "ICC | Admin Dashboard";
		$isi['menu'] = "admin/menu/menu_dashboard";
		$isi['konten'] = "admin/konten/konten_beranda";
		$isi['data']		= $this->model_data->dataadmin();
		$isi['jmlh_almni_itera'] = $this->model_data->jmlh_almni_itera();
		$isi['jmlh_almni_non_itera'] = $this->model_data->jmlh_almni_non_itera();
		$isi['jmlh_mhs'] = $this->model_data->jmlh_mhs();
		$isi['jmlh_company'] = $this->model_data->jmlh_company();
		$this->load->view('admin/tampilan_dashboard',$isi);
	}

	function logout(){
		$this->session->sess_destroy();
		$this->session->unset_userdata($sess_admin);
		redirect('Admin');
	}
}

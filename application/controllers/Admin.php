<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ICC | Admin Login";
		$this->load->view('admin/tampilan_login',$isi);
	}

	function login(){
		$u = $this->input->post('username');
		$p = $this->input->post('password');
		$this->load->model('model_userlogin');
		$this->model_userlogin->getloginadmin($u, $p);
	}

	function dashboard(){
		$isi['title'] = "ICC | Admin Dashboard";
		$this->load->view('admin/tampilan_dashboard',$isi);
	}
}

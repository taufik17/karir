<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ICC | Member Login";
		$this->load->view('web/login/pilihan_login', $isi);
	}

	public function member(){
		$isi['title'] = "ICC | Member Login";
		$this->load->view('web/login/jobseeker/tampilan_member_login', $isi);
	}

	public function company(){
		$isi['title'] = "ICC | Company Login";
		$this->load->view('web/login/company/tampilan_company_login', $isi);
	}

	public function loginjobseeker(){
		$output = array('error' => false);
		$u = $this->input->post('emailjobseeker');
		$p = $this->input->post('passwordjobseeker');
		$this->load->model('model_userlogin');
		$this->model_userlogin->getlogin($u, $p);
	}

	public function logincompany(){
		$output = array('error' => false);
		$u = $this->input->post('emailcompany');
		$p = $this->input->post('passwordcompany');
		$this->load->model('model_userlogin');
		$this->model_userlogin->getlogin2($u, $p);
	}

	public function inijobseeker(){
		echo "ini jobseeker";
	}

	public function inicompany(){
		echo "ini company";
	}
}

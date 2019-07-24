<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
	public function index()
	{
		//do nothing
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

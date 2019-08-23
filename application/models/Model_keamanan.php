<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_keamanan extends CI_model {

	public function getkeamananadmin()
	{
		$session_admin = $this->session->userdata('Email_admin');
		if(empty($session_admin))
		{
			$this->session->sess_destroy($session_admin);
			redirect('Admin');
		}
	}

	public function getkeamanancompany()
	{
		$sess_company = $this->session->userdata('Email_officer');
		if(empty($sess_company))
		{
			$this->session->sess_destroy($sess_company);
			redirect('Company');
		}
	}

	public function getkeamananmember(){
		$sess_member = $this->session->userdata('Email_jobseeker');
		if (empty($sess_member)) {
			$this->session->sess_destroy($sess_member);
			redirect('login/member');
		}
	}

}

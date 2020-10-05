<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_keamanan extends CI_model {

	public function getkeamananadmin()
	{
		$session_admin = $this->session->userdata('username_admin');
		if(empty($session_admin))
		{
			$this->session->sess_destroy($session_admin);
			redirect('Admin');
		}
	}

	public function getkeamananuser()
	{
		$sess_user = $this->session->userdata('username_user');
		$id_akun = $this->session->userdata('id_akun');
		$role = $this->session->userdata('role_user');
		if((empty($sess_user)&&empty($id_akun)&&empty($role)))
		{
			$this->session->sess_destroy($sess_user);
			redirect('Company');
		}		
	}

}

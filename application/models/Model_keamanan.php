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
		$role = $this->session->userdata('role_user');
		if((empty($sess_user)))
		{
			$this->session->unset_userdata('username_user');
			redirect('beranda');
		}
		else {
			if ($role != "2" ) {
				$this->session->sess_destroy('username_user');
				redirect('beranda');
			}
		}
	}

	public function getkeamanancompany()
	{
		$sess_user_company = $this->session->userdata('username_user_cpy');
		$role = $this->session->userdata('role_user');
		if((empty($sess_user_company)))
		{
			$this->session->unset_userdata('username_user_cpy');
			redirect('beranda');
		}
		else {
			if ($role != "1" ) {
				$this->session->sess_destroy('username_user_cpy');
				redirect('beranda');
			}
		}
	}

}

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
}
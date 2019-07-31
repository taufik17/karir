<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_keamanan extends CI_model {

	public function getkeamananadmin()
	{
		$Email = $this->session->userdata('Email_admin');
		if(empty($Email))
		{
			$this->session->sess_destroy($sess_admin);
			redirect('Admin');
		}
	}
}

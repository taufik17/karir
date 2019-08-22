<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ICC | Member Login";
		$this->load->view('web/login/jobseeker/tampilan_member_login', $isi);
	}
}

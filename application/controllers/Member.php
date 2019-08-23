<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamananmember();
		$isi['title'] = "ICC | Dashboard Member";
		$this->load->view('member/tampilan_dashboard_member', $isi);
	}

	function logout(){
		$this->session->sess_destroy();
		$this->session->unset_userdata($sess_member);
		redirect('login/member');
	}
}

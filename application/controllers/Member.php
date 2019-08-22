<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ICC | Dashboard Member";
		$this->load->view('member/tampilan_dashboard_member', $isi);
	}
}

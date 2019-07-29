<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_company extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ITERA | Register Company";
		$this->load->view('web/daftar/company/tampilan_register',$isi);
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ICC | Register";
		$this->load->view('web/tampilan_register',$isi);
	}

	public function registerjobseeker(){

	}

	public function registercompany(){

	}

	public function inijobseeker(){
		echo "ini jobseeker";
	}

	public function inicompany(){
		echo "ini company";
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ITERA | Career Center";
		$this->load->view('web/tampilan_beranda',$isi);
	}
}

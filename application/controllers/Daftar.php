<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Daftar extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ICC | Pilih Daftar";
		$this->load->view('pilihan_daftar', $isi);
	}
}

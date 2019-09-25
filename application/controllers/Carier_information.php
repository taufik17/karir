<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Carier_information extends CI_Controller {
	public function index()
	{
		$isi['title'] = "Carier Information | ICC";
		$isi['menu'] = "company/menu/menu";
		$isi['konten'] = "web/konten_carier_information";
		$this->load->view('web/tampilan_faq', $isi);
	}
}

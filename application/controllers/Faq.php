<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {
	public function index()
	{
		$isi['title'] = "FAQ | ICC";
		$isi['menu'] = "company/menu/menu";
		$isi['konten'] = "web/konten_faq";
		$this->load->view('web/tampilan_faq', $isi);
	}
}

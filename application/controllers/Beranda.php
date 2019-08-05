<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ITERA | Career Center";
		$isi['provinsi'] = $this->model_data->provinsi();
		$isi['jenis_industri'] = $this->model_data->jenis_industri();
		$this->load->view('web/tampilan_beranda',$isi);
	}
}

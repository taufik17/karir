<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ITERA | Event";
		$this->load->view('web/tampilan_event',$isi);
	}
}

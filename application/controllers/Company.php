<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ICC | Dashboard Company";
		$isi['profil_company'] = $this->model_data->profil_company();
		$this->load->view('company/tampilan_dashboard_company',$isi);
	}
}

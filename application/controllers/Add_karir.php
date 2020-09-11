<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_karir extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamananuser();
		$username_user = $this->session->userdata('username_user');
		$nama_member = $this->session->userdata('Nama_jobseeker');
		$isi['data'] = $this->db->query("SELECT * FROM jobseeker WHERE id_akun = (SELECT id_akun FROM user WHERE username = '$username_user')");
		$isi['title'] = "ICC | Joblist ";
		$isi['data_list'] = $this->model_data->data_list_ajax(5, 0);
		$this->load->view('member/tampilan_add_karir', $isi);
	}

	public function viewjob(){
		echo "view job";
	}
}

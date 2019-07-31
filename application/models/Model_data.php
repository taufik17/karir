<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_model {

	public function dataadmin() {
		$email_login = $this->session->userdata('Email_admin');
		$data = $this->db->query("SELECT * FROM admin WHERE Email_admin='$email_login'");
		return $data;
	}

	public function jmlh_almni_itera(){
		$data = $this->db->query("SELECT id_jobseeker_alumni FROM jobseeker_alumni")->num_rows();
		return $data;
	}

	public function jmlh_almni_non_itera(){
		$data = $this->db->query("SELECT id_jobseeker_nonalumni FROM jobseeker_nonalumni")->num_rows();
		return $data;
	}

	public function jmlh_mhs(){
		$data = $this->db->query("SELECT id_jobseeker_mhs FROM jobseeker_mahasiswa")->num_rows();
		return $data;
	}

	public function jmlh_company(){
		$data = $this->db->query("SELECT Id_perusahaan FROM company")->num_rows();
		return $data;
	}

}

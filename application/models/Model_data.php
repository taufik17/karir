<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_model {

	function dataadmin() {
		$email_login = $this->session->userdata('Email_admin');
		$data = $this->db->query("SELECT * FROM admin WHERE Email_admin='$email_login'");
		return $data;
	}

	function jmlh_almni_itera(){
		$data = $this->db->query("SELECT id_jobseeker_alumni FROM jobseeker_alumni")->num_rows();
		return $data;
	}

	function jmlh_almni_non_itera(){
		$data = $this->db->query("SELECT id_jobseeker_nonalumni FROM jobseeker_nonalumni")->num_rows();
		return $data;
	}

	function jmlh_mhs(){
		$data = $this->db->query("SELECT id_jobseeker_mhs FROM jobseeker_mahasiswa")->num_rows();
		return $data;
	}

	function jmlh_company(){
		$data = $this->db->query("SELECT Id_perusahaan FROM company")->num_rows();
		return $data;
	}

	function profil_company(){
		$data = $this->db->query("SELECT * FROM company");
		return $data;
	}

	function provinsi(){
		$data = $this->db->query("SELECT id, nama FROM provinsi");
		return $data;
	}

	function jenis_industri(){
		$data = $this->db->query("SELECT id_industri, jenis_industri FROM industri");
		return $data;
	}

	function data_company(){
		$hasil = $this->db->get('company');
    return $hasil->result();
	}

	function data_pekerjaan(){
		$id_perusahaan = $this->session->userdata('Id_perusahaan');
		$hasil = $this->db->query("SELECT * FROM joblist WHERE perusahaan = $id_perusahaan");
		return $hasil->result();
	}

}

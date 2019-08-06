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

	function insert_job($nama_joblist, $deadline){
		$id_perusahaan = $this->session->userdata('Id_perusahaan');
    $hasil = $this->db->query("INSERT INTO `joblist` (`id_joblist`, `Nama_joblist`, `perusahaan`, `deadline`) VALUES (NULL, '$nama_joblist', '$id_perusahaan', '$deadline')");
    return $hasil;
  }

	function list_pekerjaan(){
		$hasil = $this->db->query("SELECT * FROM `joblist` NATURAL JOIN company WHERE `status` = '<span class=\"label label-warning\">Pending</span>'");
		return $hasil->result();
	}

	function hapus_joblist($idjoblist){
		$hasil=$this->db->query("DELETE FROM joblist WHERE id_joblist='$idjoblist'");
    return $hasil;
	}

	function validasi_joblist($idjoblist){
		$hasil = $this->db->query("UPDATE `joblist` SET `status` = '<span class=\"label label-success\">Telah tayang</span>' WHERE `joblist`.`id_joblist` = $idjoblist");
		return $hasil;
	}

	function fetch_data($limit, $start)
	{
		$this->db->select("*");
		$this->db->from("joblist");
		$this->db->order_by("id_joblist", "DESC");
		$this->db->limit($limit, $start);
		$query = $this->db->get();
		return $query;
	}

}

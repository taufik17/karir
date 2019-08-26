<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_karir extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamananmember();
		$email_member = $this->session->userdata('Email_jobseeker');
		$nama_member = $this->session->userdata('Nama_jobseeker');
		$query1 = $this->db->query("SELECT * FROM jobseeker_alumni WHERE Email_jobseeker = '$email_member'")->num_rows();
		$query2 = $this->db->query("SELECT * FROM jobseeker_nonalumni WHERE Email_jobseeker = '$email_member'")->num_rows();
		$query3 = $this->db->query("SELECT * FROM jobseeker_mahasiswa WHERE Email_jobseeker = '$email_member'")->num_rows();
		if ($query1 == 1) {
			$isi['data'] = $this->db->query("SELECT * FROM jobseeker_alumni WHERE Email_jobseeker = '$email_member'");
			$isi['title'] = "ICC | profil - $nama_member ";
			$isi['konten'] = "member/konten_profil";
			$this->load->view('member/tampilan_add_karir', $isi);
		}
		if ($query2 == 1) {
			$isi['data'] = $this->db->query("SELECT * FROM jobseeker_nonalumni WHERE Email_jobseeker = '$email_member'");
			$isi['title'] = "ICC | profil - $nama_member ";
			$isi['konten'] = "member/konten_profil";
			$this->load->view('member/tampilan_add_karir', $isi);
		}
		if ($query3 == 1) {
			$isi['data'] = $this->db->query("SELECT * FROM jobseeker_mahasiswa WHERE Email_jobseeker = '$email_member'");
			$isi['title'] = "ICC | profil - $nama_member ";
			$isi['konten'] = "member/konten_profil";
			$this->load->view('member/tampilan_add_karir'. $isi);
		}
	}
}

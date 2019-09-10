<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
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
			$this->load->view('member/tampilan_dashboard_member', $isi);
		}
		if ($query2 == 1) {
			$isi['data'] = $this->db->query("SELECT * FROM jobseeker_nonalumni WHERE Email_jobseeker = '$email_member'");
			$isi['title'] = "ICC | profil - $nama_member ";
			$isi['konten'] = "member/konten_profil";
			$this->load->view('member/tampilan_dashboard_member', $isi);
		}
		if ($query3 == 1) {
			$isi['data'] = $this->db->query("SELECT * FROM jobseeker_mahasiswa WHERE Email_jobseeker = '$email_member'");
			$isi['title'] = "ICC | profil - $nama_member ";
			$isi['konten'] = "member/konten_profil";
			$this->load->view('member/tampilan_dashboard_member', $isi);
		}
	}

	function karir(){
		$this->model_keamanan->getkeamananmember();
		$email_member = $this->session->userdata('Email_jobseeker');
		$nama_member = $this->session->userdata('Nama_jobseeker');
		$query1 = $this->db->query("SELECT * FROM jobseeker_alumni WHERE Email_jobseeker = '$email_member'")->num_rows();
		$query2 = $this->db->query("SELECT * FROM jobseeker_nonalumni WHERE Email_jobseeker = '$email_member'")->num_rows();
		$query3 = $this->db->query("SELECT * FROM jobseeker_mahasiswa WHERE Email_jobseeker = '$email_member'")->num_rows();
		if ($query1 == 1) {
			$isi['data'] = $this->db->query("SELECT * FROM jobseeker_alumni WHERE Email_jobseeker = '$email_member'");
			$isi['title'] = "ICC | karir - $nama_member ";
			$isi['konten'] = "member/konten_karir";
			$this->load->view('member/tampilan_dashboard_member', $isi);
		}
		if ($query2 == 1) {
			$isi['data'] = $this->db->query("SELECT * FROM jobseeker_nonalumni WHERE Email_jobseeker = '$email_member'");
			$isi['title'] = "ICC | karir - $nama_member ";
			$isi['konten'] = "member/konten_karir";
			$this->load->view('member/tampilan_dashboard_member', $isi);
		}
		if ($query3 == 1) {
			$isi['data'] = $this->db->query("SELECT * FROM jobseeker_mahasiswa WHERE Email_jobseeker = '$email_member'");
			$isi['title'] = "ICC | karir - $nama_member ";
			$isi['konten'] = "member/konten_karir";
			$this->load->view('member/tampilan_dashboard_member', $isi);
		}
	}

	function event(){
		$this->model_keamanan->getkeamananmember();
		$email_member = $this->session->userdata('Email_jobseeker');
		$nama_member = $this->session->userdata('Nama_jobseeker');
		$query1 = $this->db->query("SELECT * FROM jobseeker_alumni WHERE Email_jobseeker = '$email_member'")->num_rows();
		$query2 = $this->db->query("SELECT * FROM jobseeker_nonalumni WHERE Email_jobseeker = '$email_member'")->num_rows();
		$query3 = $this->db->query("SELECT * FROM jobseeker_mahasiswa WHERE Email_jobseeker = '$email_member'")->num_rows();
		if ($query1 == 1) {
			$isi['data'] = $this->db->query("SELECT * FROM jobseeker_alumni WHERE Email_jobseeker = '$email_member'");
			$isi['title'] = "ICC | event - $nama_member ";
			$isi['konten'] = "member/konten_event";
			$this->load->view('member/tampilan_dashboard_member', $isi);
		}
		if ($query2 == 1) {
			$isi['data'] = $this->db->query("SELECT * FROM jobseeker_nonalumni WHERE Email_jobseeker = '$email_member'");
			$isi['title'] = "ICC | event - $nama_member ";
			$isi['konten'] = "member/konten_event";
			$this->load->view('member/tampilan_dashboard_member', $isi);
		}
		if ($query3 == 1) {
			$isi['data'] = $this->db->query("SELECT * FROM jobseeker_mahasiswa WHERE Email_jobseeker = '$email_member'");
			$isi['title'] = "ICC | event - $nama_member ";
			$isi['konten'] = "member/konten_event";
			$this->load->view('member/tampilan_dashboard_member', $isi);
		}
	}

	function cv(){
		
	}

	function logout(){
		$this->model_keamanan->getkeamananmember();
		$this->session->sess_destroy();
		$this->session->unset_userdata($sess_member);
		redirect('login/member');
	}
}

<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamananuser();
		$username_user = $this->session->userdata('username_user');
		$role_user = $this->session->userdata('role_user');
		$isi['data'] = $this->db->query("SELECT * FROM jobseeker WHERE id_akun = (SELECT id_akun FROM user WHERE username = '$username_user')");
		$isi['title'] = "ICC | profil - $username_user ";
		$isi['konten'] = "member/konten_profil";
		$this->load->view('member/tampilan_dashboard_member', $isi);
	}

	function karir(){
		$this->model_keamanan->getkeamananuser();
		$username_user = $this->session->userdata('username_user');
		$role_user = $this->session->userdata('role_user');
		$isi['data'] = $this->db->query("SELECT * FROM jobseeker WHERE id_akun = (SELECT id_akun FROM user WHERE username = '$username_user')");
		$isi['title'] = "ICC | karir - $username_user";
		$isi['konten'] = "member/konten_karir";
		$this->load->view('member/tampilan_dashboard_member', $isi);
	}

	function event(){
		$this->model_keamanan->getkeamananuser();
		$username_user = $this->session->userdata('username_user');
		$role_user = $this->session->userdata('role_user');
		$isi['data'] = $this->db->query("SELECT * FROM jobseeker WHERE id_akun = (SELECT id_akun FROM user WHERE username = '$username_user')");
		$isi['title'] = "ICC | event - $username_user";
		$isi['konten'] = "member/konten_event";
		$this->load->view('member/tampilan_dashboard_member', $isi);
	}

	function cv(){
		$this->model_keamanan->getkeamananuser();
		$username_user = $this->session->userdata('username_user');
		$role_user = $this->session->userdata('role_user');
		$isi['data'] = $this->db->query("SELECT * FROM jobseeker WHERE id_akun = (SELECT id_akun FROM user WHERE username = '$username_user')");
		$isi['title'] = "ICC | CV - $username_user";
		$isi['konten'] = "member/konten_cv";
		$this->load->view('member/tampilan_dashboard_member', $isi);
	}

	function pemintan(){
		$this->model_keamanan->getkeamananuser();
		$username_user = $this->session->userdata('username_user');
		$role_user = $this->session->userdata('role_user');
		$isi['data'] = $this->db->query("SELECT * FROM jobseeker WHERE id_akun = (SELECT id_akun FROM user WHERE username = '$username_user')");
		$isi['title'] = "ICC | Peminatan - $username_user";
		$isi['konten'] = "member/konten_peminatan";
		$this->load->view('member/tampilan_dashboard_member', $isi);
	}

	function logout(){
		$this->model_keamanan->getkeamananuser();
		$this->session->sess_destroy();
		$this->session->unset_userdata($sess_user);
		redirect('login/member');
	}
}

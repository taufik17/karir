<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_daftar extends CI_model {

  public function getdata($key)
  {
    $this->db->where('Email_jobseeker',$key);
    $hasil = $this->db->get('jobseeker_alumni');
    return $hasil;
  }

  public function getinsertcompany($data) {
    $this->db->where('Email_officer');
    $this->db->insert('company', $data);
  }

  public function getinsertjobseeker($data) {
    $this->db->where('email_jobseeker');
    $this->db->insert('jobseeker', $data);
  }

  public function getinsertstep2($password, $email) {
    $this->db->query("UPDATE `company` SET `Password_perusahaan` = '$password' WHERE `company`.`Email_officer` = '$email'");
  }

  public function cekitera($key) {
    $emailitera = "@student.itera.ac.id";
    if( strpos( $key, $emailitera ) !== false) {
      return true;
    }
    else {
      return false;
    }
  }

  public function cek_username($username){
    $this->db->where('username', $username);
    $hasil = $this->db->get('user');
    if ($hasil->num_rows()>0) {
      echo "<script>window.alert('Sandi Tidak Sama')</script>";
			$this->session->set_flashdata('info_reg_company',
			'<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-ban"></i> Alert!</h4>
			Username sudah ada, harap gunakan username lain.
			</div>');
			redirect('register_company');
    }

  }

  public function cek_username_jobseeker($username){
    $this->db->where('username', $username);
    $hasil = $this->db->get('user');
    if ($hasil->num_rows()>0) {
      echo "<script>window.alert('Sandi Tidak Sama')</script>";
			$this->session->set_flashdata('info_reg_company',
			'<div class="alert alert-danger alert-dismissible">
			<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
			<h4><i class="icon fa fa-ban"></i> Alert!</h4>
			Username sudah ada, harap gunakan username lain.
			</div>');
			redirect('register/umum');
    }

  }

  public function getinsertreg1($data){
    $this->db->where('id_akun');
    $this->db->insert('user', $data);
  }

  public function getinsert_user($isi){
    $this->db->where('id_akun');
    $this->db->insert('user', $isi);
  }

  public function getupdateuser($isi){
    $this->db->query("UPDATE `user` SET `status` = '1' WHERE `user`.`id_akun` = $isi;");
  }

}

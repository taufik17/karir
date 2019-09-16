<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Model_daftar extends CI_model {

  public function getdata($key)
  {
    $this->db->where('Email_jobseeker',$key);
    $hasil = $this->db->get('jobseeker_alumni');
    return $hasil;
  }

  public function getinsert($data)
  {
    $this->db->where('Email_jobseeker');
    $this->db->insert('jobseeker_alumni',$data);
  }

  public function getinsert2($data)
  {
    $this->db->where('Email_jobseeker');
    $this->db->insert('jobseeker_nonalumni',$data);
  }

  public function getinsert3($data)
  {
    $this->db->where('Email_jobseeker');
    $this->db->insert('jobseeker_mahasiswa',$data);
  }

  public function getinsertcompany($data) {
    $this->db->where('Email_officer');
    $this->db->insert('company', $data);
  }

  public function getinsertstep2($password, $email) {
    $this->db->query("UPDATE `company` SET `Password_perusahaan` = '$password' WHERE `company`.`Email_officer` = '$email'");
  }

  public function checkEmail($key) {
    if(!filter_var($key, FILTER_VALIDATE_EMAIL))
    {
      // invalid address
      return false;
    }
    else
    {
      // valid address
      return true;
    }
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

  public function cekmail($key)
  {
    $this->db->where('Email_jobseeker',$key);
    $hasil = $this->db->get('jobseeker_alumni');
    if ($hasil->num_rows()>0) {
      # code...
      foreach ($hasil->result() as $row)
      {
        $sess = array('Email_jobseeker' => $row->Email_jobseeker);
        //$this->session->set_userdata($sess);
        return false;
      }
    }
    else {
      return true;
    }
  }

  public function cekmail2($key)
  {
    $this->db->where('Email_jobseeker',$key);
    $hasil = $this->db->get('jobseeker_nonalumni');
    if ($hasil->num_rows()>0) {
      # code...
      foreach ($hasil->result() as $row)
      {
        $sess = array('Email_jobseeker' => $row->Email_jobseeker);
        //$this->session->set_userdata($sess);
        return false;
      }
    }
    else {
      return true;
    }
  }

  public function cekmail3($key)
  {
    $this->db->where('Email_jobseeker',$key);
    $hasil = $this->db->get('jobseeker_mahasiswa');
    if ($hasil->num_rows()>0) {
      # code...
      foreach ($hasil->result() as $row)
      {
        $sess = array('Email_jobseeker' => $row->Email_jobseeker);
        //$this->session->set_userdata($sess);
        return false;
      }
    }
    else {
      return true;
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

  public function getinsertreg1($data){
    $this->db->where('id_akun');
    $this->db->insert('user', $data);
  }

  public function getupdateuser($isi){
    $this->db->query("UPDATE `user` SET `status` = '1' WHERE `user`.`id_akun` = $isi;");
  }

}

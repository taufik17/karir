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

}

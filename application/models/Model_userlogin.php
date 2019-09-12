<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_userlogin extends CI_model {

	public function getlogin($u,$p)
	{
		$pwd = hash('sha512', $p . config_item('encryption_key'));
		$this->db->where('Email_jobseeker',$u);
		$this->db->where('Password_jobseeker',$pwd);
		$query = $this->db->get('jobseeker_alumni');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$sess = array('Email_jobseeker'	=> $row->Email_jobseeker,
								'Nama_jobseeker'	=> $row->Nama_jobseeker,
							  'Password_jobseeker'	=> $row->Password_jobseeker);
				$this->session->set_userdata($sess);
				$output['message'] = 'Masuk. Silahkan tunggu...';
			}
			goto go_echo;
		}
		else {
			goto next1;
		}

		next1:
		$pwdnonalumni = hash('sha512', $p . config_item('encryption_key'));
		$this->db->where('Email_jobseeker',$u);
		$this->db->where('Password_jobseeker',$pwdnonalumni);
		$query2 = $this->db->get('jobseeker_nonalumni');
		if($query2->num_rows()>0)
		{
			foreach ($query2->result() as $row)
			{
				$sess = array('Email_jobseeker'	=> $row->Email_jobseeker,
								'Nama_jobseeker'	=> $row->Nama_jobseeker,
							  'Password_jobseeker'	=> $row->Password_jobseeker);
				$this->session->set_userdata($sess);
				$output['message'] = 'Masuk. Silahkan tunggu...';
			}
			goto go_echo;
		}
		else {
			goto next2;
		}

		next2:
		$pwdmhs = hash('sha512', $p . config_item('encryption_key'));
		$this->db->where('Email_jobseeker',$u);
		$this->db->where('Password_jobseeker',$pwdmhs);
		$query3 = $this->db->get('jobseeker_mahasiswa');
		if($query3->num_rows()>0)
		{
			foreach ($query3->result() as $row)
			{
				$sess = array('Email_jobseeker'	=> $row->Email_jobseeker,
								'Nama_jobseeker'	=> $row->Nama_jobseeker,
							  'Password_jobseeker'	=> $row->Password_jobseeker);
				$this->session->set_userdata($sess);
				$output['message'] = 'Masuk. Silahkan tunggu...';
			}
			goto go_echo;
		}
		else {
			goto go_error;
		}

		go_error:
			$output['error'] = true;
			$output['message'] = 'Masuk gagal. Email atau password salah';

			go_echo:
		echo json_encode($output);
	}

	public function login_member($u, $p) {
		$pwd = hash('sha512', $p . config_item('encryption_key'));
		$this->db->where('Email_jobseeker',$u);
		$this->db->where('Password_jobseeker',$pwd);
		$query = $this->db->get('jobseeker_alumni');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				$sess = array('Email_jobseeker'	=> $row->Email_jobseeker,
								'Nama_jobseeker'	=> $row->Nama_jobseeker,
							  'Password_jobseeker'	=> $row->Password_jobseeker);
				$this->session->set_userdata($sess);
				redirect('member');
			}
		}
		$pwdnonalumni = hash('sha512', $p . config_item('encryption_key'));
		$this->db->where('Email_jobseeker',$u);
		$this->db->where('Password_jobseeker',$pwdnonalumni);
		$query2 = $this->db->get('jobseeker_nonalumni');
		if($query2->num_rows()>0)
		{
			foreach ($query2->result() as $row)
			{
				$sess = array('Email_jobseeker'	=> $row->Email_jobseeker,
								'Nama_jobseeker'	=> $row->Nama_jobseeker,
							  'Password_jobseeker'	=> $row->Password_jobseeker);
				$this->session->set_userdata($sess);
				redirect('member');
			}
		}
		$pwdmhs = hash('sha512', $p . config_item('encryption_key'));
		$this->db->where('Email_jobseeker',$u);
		$this->db->where('Password_jobseeker',$pwdmhs);
		$query3 = $this->db->get('jobseeker_mahasiswa');
		if($query3->num_rows()>0)
		{
			foreach ($query3->result() as $row)
			{
				$sess = array('Email_jobseeker'	=> $row->Email_jobseeker,
								'Nama_jobseeker'	=> $row->Nama_jobseeker,
							  'Password_jobseeker'	=> $row->Password_jobseeker);
				$this->session->set_userdata($sess);
				redirect('member');
			}
		}
	}


	public function getlogin_user($u,$p){
		$pwd = hash('sha512', $p . config_item('encryption_key'));
		$this->db->where('username',$u);
		$this->db->where('password',$pwd);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				if ($row->role_user == '1' || $row->role_user == '2' ) {
					$sess_user = array('username_user'	=> $row->username,
								  'password_user'	=> $row->password,
									'role_user' => $row->role_user,
									'id_akun' => $row->id_akun);
					$this->session->set_userdata($sess_user);
					$output['message'] = 'Masuk. Silahkan tunggu...';
				} else{
					$output['error'] = true;
					$output['message'] = 'Masuk gagal. Email atau password salah';
				}

			}
		}
			else{
				$output['error'] = true;
				$output['message'] = 'Masuk gagal. Email atau password salah';
			}
			echo json_encode($output);
	}

	public function getloginadmin($u,$p)
	{
		$pwd = hash('sha512', $p . config_item('encryption_key'));
		$this->db->where('username',$u);
		$this->db->where('password',$pwd);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				if ($row->role_user == 3) {
					$session_admin = array('username_admin'	=> $row->username,
								  'password'	=> $row->password);
					$this->session->set_userdata($session_admin);
					$output['message'] = 'Masuk. Silahkan tunggu...';
				}
			}
		}
			else{
				$output['error'] = true;
				$output['message'] = 'Masuk gagal. Email atau password salah';
			}
			echo json_encode($output);
	}

	public function hash($string)
    {
        return hash('sha512', $string . config_item('encryption_key'));
    }

}

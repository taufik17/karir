<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_userlogin extends CI_model {

	public function getlogin_user($u,$p){
		$pwd = hash('sha512', $p . config_item('encryption_key'));
		$this->db->where('username',$u);
		$this->db->where('password',$pwd);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				if (($row->role_user == '1') AND $row->status == '1' ) {
					$sess_user_company = array('username_user_cpy'	=> $row->username,
								  'password_user_cpy'	=> $row->password,
									'role_user' => $row->role_user,
									'id_akun_cpy' => $row->id_akun);
					$this->session->set_userdata($sess_user_company);
					$output['message'] = 'Masuk. Silahkan tunggu...';
				}
				elseif (($row->role_user == '2') AND $row->status == '1') {
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

	public function login_company(){
		$pwd = hash('sha512', $p . config_item('encryption_key'));
		$this->db->where('username',$u);
		$this->db->where('password',$pwd);
		$query = $this->db->get('user');
		if($query->num_rows()>0)
		{
			foreach ($query->result() as $row)
			{
				if (($row->role_user == '1' || $row->role_user == '2') AND $row->status == '1' ) {
					$sess_user = array('username_user'	=> $row->username,
								  'password_user'	=> $row->password,
									'role_user' => $row->role_user,
									'id_akun' => $row->id_akun);
					$this->session->set_userdata($sess_user);
					$output['message'] = 'Masuk. Silahkan tunggu...';
				}
				redirect('company');
			}
		}
		else
		{
			$this->session->set_flashdata('info',
					'<div class="alert alert-block alert-dismiss">
					<button type="button" class="close" data-dismiss="alert">
					<i class="icon-remove"></i>
					</button>
					<i class="icon-ban-circle red"></i>
					<strong class="red">
					</strong>Maaf Pengguna atau Sandi salah </div>');
			redirect('login/company');
		}
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

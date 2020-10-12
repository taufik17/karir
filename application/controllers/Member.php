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
		$id_akun = $this->session->userdata('id_akun');
		$cari_idjobseeker = $this->db->query("SELECT id_jobseeker FROM jobseeker WHERE id_akun = $id_akun");
		foreach ($cari_idjobseeker->result() as $row) {
			$id_jobseeker = $row->id_jobseeker;
		}
		$isi['data'] = $this->db->query("SELECT * FROM jobseeker WHERE id_akun = (SELECT id_akun FROM user WHERE username = '$username_user')");
		$isi['title'] = "ICC | karir - $username_user";
		$isi['data_pekerjaan'] = $this->model_data->getdatapekerjaan($id_jobseeker);
		$isi['jumlah_dilamar'] = $this->model_data->getdatapekerjaan($id_jobseeker)->num_rows();
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

	function rekomendasi(){
		$this->model_keamanan->getkeamananuser();
		$username_user = $this->session->userdata('username_user');
		$role_user = $this->session->userdata('role_user');
		$isi['data'] = $this->db->query("SELECT * FROM jobseeker WHERE id_akun = (SELECT id_akun FROM user WHERE username = '$username_user')");
		$isi['title'] = "ICC | Rekomendasi Pekerjaan - $username_user";
		$isi['konten'] = "member/konten_rekomendasi";
		$this->load->view('member/tampilan_dashboard_member', $isi);
	}

	function apply(){
		$this->model_keamanan->getkeamananuser();
		$id_pekerjaan = $this->input->post('id_pekerjaan');
		$id_akun = $this->session->userdata('id_akun');
		$url = $this->input->post('url');
		$cari_idjobseeker = $this->db->query("SELECT id_jobseeker FROM jobseeker WHERE id_akun = $id_akun");
		foreach ($cari_idjobseeker->result() as $row) {
			$id_jobseeker = $row->id_jobseeker;
		}
		$this->model_data->lamar_pekerjaan($id_pekerjaan, $id_jobseeker);
		$lihat = base_url('member/karir');
		$this->session->set_flashdata('info',
				'<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
					aria-hidden="true">
					<div class="modal-dialog modal-notify modal-default" role="document">
						<!--Content-->
						<div class="modal-content text-center">
							<!--Header-->
							<div class="modal-header d-flex justify-content-center" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); background:#00a65a">
								<h5 style="color:white">Sukses</h5>
							</div>
							<!--Body-->
							<div class="modal-body">
								<i class="fa fa-check fa-4x animated rotateIn mb-4" style="padding-top:15px; color:green;"></i>
								<p>Pekerjaan telah dilamar.</p>
							</div>

							<!--Footer-->
							<div class="modal-footer flex-center">
 									<a href="'.$lihat.'" class="btn btn-success">Lihat</a>
								<a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Tutup</a>
							</div>
						</div>
						<!--/.Content-->
					</div>
				</div>');

		redirect($url);
	}

	function logout(){
		$this->model_keamanan->getkeamananuser();
		$this->session->sess_destroy();
		$this->session->unset_userdata($sess_user);
		redirect('beranda');
	}
}

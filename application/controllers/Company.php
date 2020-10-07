<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {

	public function index(){
		$this->model_keamanan->getkeamanancompany();
		$id_akun = $this->session->userdata('id_akun_cpy');
		
		$id = $this->db->query("SELECT Id_perusahaan FROM company WHERE id_akun = $id_akun");
		foreach ($id->result() as $row) {
			$id_perusahaan = $row->Id_perusahaan;
		}
		$isi['title'] = "ICC | Dashboard Company";
		$isi['menu'] = "company/menu/menu";
		$isi['konten'] = "company/konten/konten_beranda";
		$isi['profil_company'] = $this->model_data->profil_company();
		$isi['pelamar'] = $this->model_data->jumlah_pelamar($id_perusahaan);
		$isi['jumlah_pekerjaan'] = $this->model_data->jumlah_pekerjaan($id_perusahaan);
		$this->load->view('company/tampilan_dashboard_company',$isi);
	}

	public function profilCompany()
	{
		$this->model_keamanan->getkeamanancompany();
		$isi['title'] = "ICC | Profil Perusahaan";
		$isi['menu'] = "company/menu/menu";
		$isi['konten'] = "company/konten/konten_profil";
		$isi['profil_company'] = $this->model_data->profil_company();
		$this->load->view('company/tampilan_dashboard_company',$isi);
	}

	public function listjob(){
		$this->model_keamanan->getkeamanancompany();
		$isi['title'] = "ICC | List Pekerjaan";
		$isi['menu'] = "company/menu/menu";
		$isi['konten'] = "company/konten/konten_joblist";
		$isi['profil_company'] = $this->model_data->profil_company();
		$this->load->view('company/tampilan_dashboard_company',$isi);
	}

	public function data_pekerjaan(){
		$id_akun = $this->session->userdata('id_akun');
		$id = $this->db->query("SELECT Id_perusahaan FROM company WHERE id_akun = $id_akun");
		foreach ($id->result() as $row) {
			$id_perusahaan = $row->Id_perusahaan;
		}
    $data = $this->model_data->data_pekerjaan($id_perusahaan);
    echo json_encode($data);
  }

	public function tambah_joblist(){
		$this->model_keamanan->getkeamanancompany();
		$isi['title'] = "ICC | Tambah Pekerjaan";
		$isi['menu'] = "company/menu/menu";
		$isi['konten'] = "company/konten/konten_tambah_pekerjaan";
		$isi['data_berkas'] = $this->model_data->data_requir_berkas();
		$isi['data_jurusan'] = $this->model_data->data_jurusan();
		$isi['profil_company'] = $this->model_data->profil_company();
		$this->load->view('company/tampilan_dashboard_company',$isi);
	}

	public function simpan_pekerjaan(){
		// var_dump($_POST);exit();
		$this->model_keamanan->getkeamanancompany();
		$data['perusahaan'] = $this->input->post('perusahaan');
		$data['Nama_joblist'] = $this->input->post('Nama_joblist');
		$data['Tipe_pekerjaan'] = $this->input->post('Tipe_pekerjaan');
		$data['deadline'] = $this->input->post('deadline');
		$data['dibutuhkan'] = $this->input->post('dibutuhkan');
		$data['deskripsi_pekerjaan'] = $this->input->post('deskripsi_pekerjaan');
		$data['syarat_khusus'] = $this->input->post('syarat_khusus');
		$data['min_lulus'] = $this->input->post('lulusan');
		$this->model_data->getinsert_job($data);

		$n_joblist = $this->input->post('Nama_joblist');
		$perusahaan = $this->input->post('perusahaan');
		$id = $this->db->query("SELECT id_joblist FROM joblist WHERE Nama_joblist = '$n_joblist' AND perusahaan = '$perusahaan'");
		foreach ($id->result() as $row) {
			$id_joblist = $row->id_joblist;
		}
		$checkbox = $_POST['berkas'];
		for($i=0;$i<count($checkbox);$i++){
			$req_berkas = $this->input->post('berkas');
			$isi = array('id_requirement' => $req_berkas[$i], 'id_joblist' => $id_joblist);
			$this->db->insert('tb_detail_req_brks', $isi);
		}

		$multiselect = $_POST['data_jurusan'];
		for($i=0;$i<count($multiselect);$i++){
			$req_jurusan = $this->input->post('data_jurusan');
			$isi = array('id_requirement' => $req_jurusan[$i], 'id_joblist' => $id_joblist);
			$this->db->insert('tb_detail_req_jrsn', $isi);
		}

		redirect('company/listjob');
	}

	public function view(){
		$role_user = $this->session->userdata('role_user');
		$key = $this->uri->segment(3);
		if (empty($key)) {
			echo "<h1>forbidden<h1>";
		}
		else {
			$id = $this->db->query("SELECT Nama_perusahaan FROM company WHERE Id_perusahaan = '$key'");
			foreach ($id->result() as $row) {
				$nama = $row->Nama_perusahaan;
			}
			$isi['title'] = "$nama | ICC";
			if ($role_user == '2') {
				$isi['menu'] = "member/menu";
			}
			else {
				$isi['menu'] = "web/menu";
			}
			$isi['konten'] = "web/konten_profil_company";
			$isi['data'] = $this->db->query("SELECT Id_perusahaan, Nama_perusahaan, deskripsi_perusahaan, id_industri, id_provinsi, id_kabupaten_kota, Logo_perusahaan, sampul, Website, telp_perusahaan, Alamat FROM company WHERE Id_perusahaan = $key ");
			$this->load->view('web/tampilan_view_company', $isi);
		}
	}

	public function lowongan(){
		$role_user = $this->session->userdata('role_user');
		$key = $this->uri->segment(3);
		if (empty($key)) {
			echo "<h1>forbidden<h1>";
		} else {
			$id = $this->db->query("SELECT Nama_perusahaan FROM company WHERE Id_perusahaan = '$key'");
			foreach ($id->result() as $row) {
				$nama = $row->Nama_perusahaan;
			}
			$isi['title'] = "Daftar Lowongan Buka | $nama";
			if ($role_user == '2') {
				$isi['menu'] = "member/menu";
			}
			else {
				$isi['menu'] = "web/menu";
			}
			$isi['konten'] = "web/konten_lowongan_company";
			$isi['joblist'] = $this->db->query("SELECT * FROM joblist
																					WHERE perusahaan = $key
																					AND status = '<span class=\"label label-success\">Telah tayang</span>'
																					AND deadline >= current_date()");
			$isi['data'] = $this->db->query("SELECT Id_perusahaan, Nama_perusahaan, deskripsi_perusahaan, id_industri, id_provinsi, id_kabupaten_kota, Logo_perusahaan, sampul, Website, telp_perusahaan, Alamat FROM company WHERE Id_perusahaan = $key ");
			$this->load->view('web/tampilan_view_company', $isi);
		}
	}

	public function lowongan_tutup(){
		$role_user = $this->session->userdata('role_user');
		$key = $this->uri->segment(3);
		if (empty($key)) {
			echo "<h1>forbidden<h1>";
		}
		else {
			$id = $this->db->query("SELECT Nama_perusahaan FROM company WHERE Id_perusahaan = '$key'");
			foreach ($id->result() as $row) {
				$nama = $row->Nama_perusahaan;
			}
			$isi['title'] = "Daftar Lowongan Tutup | $nama";
			if ($role_user == '2') {
				$isi['menu'] = "member/menu";
			}
			else {
				$isi['menu'] = "web/menu";
			}
			$isi['konten'] = "web/konten_lowongan_company_tutup";
			$isi['joblist'] = $this->db->query("SELECT * FROM joblist
																					WHERE perusahaan = $key
																					AND status = '<span class=\"label label-success\">Telah tayang</span>'
																					AND deadline <= current_date()");
			$isi['data'] = $this->db->query("SELECT Id_perusahaan, Nama_perusahaan, deskripsi_perusahaan, id_industri, id_provinsi, id_kabupaten_kota, Logo_perusahaan, sampul, Website, telp_perusahaan, Alamat FROM company WHERE Id_perusahaan = $key ");
			$this->load->view('web/tampilan_view_company', $isi);
		}
	}

	public function detailjob_buka(){
		$role_user = $this->session->userdata('role_user');
		$key = $this->uri->segment(3);
		$id_job = $this->uri->segment(4);
		if (empty($key) || empty($id_job)) {
			echo "<h1>forbidden<h1>";
		}
		else {
			$id = $this->db->query("SELECT Nama_perusahaan FROM company WHERE Id_perusahaan = '$key'");
			foreach ($id->result() as $row) {
				$nama = $row->Nama_perusahaan;
			}
			$id2 = $this->db->query("SELECT Nama_joblist FROM joblist WHERE id_joblist = '$id_job'");
			foreach ($id2->result() as $n_job) {
				$nama_job = $n_job->Nama_joblist;
			}
			$isi['title'] = "$nama_job | $nama";
			if ($role_user == '2') {
				$isi['menu'] = "member/menu";
			}
			else {
				$isi['menu'] = "web/menu";
			}
			$isi['konten'] = "web/konten_detail_pekerjaan";
			$isi['joblist'] = $this->db->query("SELECT * FROM joblist
																					WHERE perusahaan = $key
																					AND id_joblist = $id_job");
			$isi['data'] = $this->db->query("SELECT Id_perusahaan, Nama_perusahaan, deskripsi_perusahaan, id_industri, id_provinsi, id_kabupaten_kota, Logo_perusahaan, sampul, Website, telp_perusahaan, Alamat FROM company WHERE Id_perusahaan = $key ");
			$this->load->view('web/tampilan_view_company', $isi);
		}
	}

	public function detailjob_tutup(){
		$role_user = $this->session->userdata('role_user');
		$key = $this->uri->segment(3);
		$id = $this->db->query("SELECT Nama_perusahaan FROM company WHERE Id_perusahaan = '$key'");
		foreach ($id->result() as $row) {
			$nama = $row->Nama_perusahaan;
		}
		$isi['title'] = "Daftar Lowongan | $nama";
		if ($role_user == '2') {
			$isi['menu'] = "member/menu";
		}
		else {
			$isi['menu'] = "web/menu";
		}
		$isi['konten'] = "web/konten_detail_pekerjaan_tutup";
		$isi['joblist'] = $this->db->query("SELECT * FROM joblist
																				WHERE perusahaan = 1
																				AND status = '<span class=\"label label-success\">Telah tayang</span>'
																				AND deadline <= current_date()");
		$isi['data'] = $this->db->query("SELECT Id_perusahaan, Nama_perusahaan, deskripsi_perusahaan, id_industri, id_provinsi, id_kabupaten_kota, Logo_perusahaan, sampul, Website, telp_perusahaan, Alamat FROM company WHERE Id_perusahaan = $key ");
		$this->load->view('web/tampilan_view_company', $isi);
	}

	function logout(){
		$this->session->sess_destroy();
		$this->session->unset_userdata($sess_user);
		redirect('beranda');
	}
}

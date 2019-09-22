<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Company extends CI_Controller {
	public function index()
	{
		$sess_user = $this->session->userdata('username_user');
		if(!empty($sess_user))
		{
			redirect('company/dashboard');
		}else {
			echo "login dulu";
		}
	}

	public function dashboard(){
		$this->model_keamanan->getkeamananuser();
		$isi['title'] = "ICC | Dashboard Company";
		$isi['menu'] = "company/menu/menu";
		$isi['konten'] = "company/konten/konten_beranda";
		$isi['profil_company'] = $this->model_data->profil_company();
		$this->load->view('company/tampilan_dashboard_company',$isi);
	}

	public function listjob(){
		$this->model_keamanan->getkeamananuser();
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
		$this->model_keamanan->getkeamananuser();
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
		$this->model_keamanan->getkeamananuser();
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
		$key = $this->uri->segment(3);
		$isi['title'] = "ICC | Nama Company";
		$isi['menu'] = "company/menu/menu";
		$isi['konten'] = "member/konten_profil";
		$this->load->view('web/tampilan_view_company', $isi);
	}

	public function detailjob(){
		$key = $this->uri->segment(3);
		echo "ini adalah data pekerjaan $key";
	}

	function logout(){
		$this->session->sess_destroy();
		$this->session->unset_userdata($sess_user);
		redirect('login/company');
	}
}

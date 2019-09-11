<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->table 		= 'calendar';
		$this->load->model('Globalmodel', 'modeldb');
		$this->load->model('model_news');
		$this->load->library('upload');
	}

	public function index()
	{
		$session_admin = $this->session->userdata('username_admin');
		$isi['title'] = "ICC | Admin Login";
		if(!empty($session_admin))
		{
			redirect('admin/dashboard');
		}else {
			$this->load->view('admin/tampilan_login',$isi);
		}
	}

	function login(){
		$u = $this->input->post('Email');
		$p = $this->input->post('Password');
		$this->load->model('model_userlogin');
		$this->model_userlogin->getloginadmin($u, $p);
	}

	function dashboard(){
		$this->model_keamanan->getkeamananadmin();
		$isi['title'] = "ICC | Admin Dashboard";
		$isi['menu'] = "admin/menu/menu";
		$isi['konten'] = "admin/konten/konten_beranda";
		$isi['data']		= $this->model_data->dataadmin();
		$isi['jmlh_user_umum'] = $this->model_data->jmlh_user_umum();
		$isi['jmlh_mhs_itera'] = $this->model_data->jmlh_mhs_itera();
		$isi['jmlh_mhs_non_itera'] = $this->model_data->jmlh_mhs_non_itera();
		$isi['jmlh_company'] = $this->model_data->jmlh_company();
		$this->load->view('admin/tampilan_dashboard',$isi);
	}

	function industri(){
		$this->model_keamanan->getkeamananadmin();
		$isi['title'] = "ICC | Admin Dashboard";
		$isi['menu'] = "admin/menu/menu";
		$isi['konten'] = "admin/konten/konten_industri";
		$isi['data']		= $this->model_data->dataadmin();
		$this->load->view('admin/tampilan_dashboard',$isi);
	}

	function add_news(){
		$this->model_keamanan->getkeamananadmin();
		$isi['data']		= $this->model_data->dataadmin();
		$isi['title'] = "ICC | Admin Add News";
		$isi['menu'] = "admin/menu/menu";
		$isi['konten'] = "admin/konten/konten_add_news";
		$this->load->view('admin/tampilan_dashboard',$isi);
	}

	function simpan_post(){
			$config['upload_path'] = './assets/gambar/news'; //path folder
			$config['allowed_types'] = 'gif|jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
			$config['encrypt_name'] = TRUE; //nama yang terupload nantinya

			$this->upload->initialize($config);
			if(!empty($_FILES['filefoto']['name'])){
					if ($this->upload->do_upload('filefoto')){
							$gbr = $this->upload->data();
							//Compress Image
							$config['image_library']='gd2';
							$config['source_image']='./assets/gambar/news'.$gbr['file_name'];
							$config['create_thumb']= FALSE;
							$config['maintain_ratio']= FALSE;
							$config['quality']= '60%';
							$config['width']= 710;
							$config['height']= 420;
							$config['new_image']= './assets/gambar/news'.$gbr['file_name'];
							$this->load->library('image_lib', $config);
							$this->image_lib->resize();

							$gambar=$gbr['file_name'];
							$jdl=$this->input->post('judul');
							$berita=$this->input->post('berita');
							$this->model_news->simpan_berita($jdl,$berita,$gambar);
							$this->session->set_flashdata('info',
									'<div class="alert alert-success alert-dismissible">
																									<button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
																									<h4><i class="icon fa fa-check"></i> Berhasil !</h4>
																									Berita telah ditambahkan
																							</div>');
							redirect('admin/list_news');
			}else{
					redirect('admin/add_news');
			}

			}else{
					redirect('admin/add_news');
			}
	}

	function list_news(){
		$this->model_keamanan->getkeamananadmin();
		$isi['data']		= $this->model_data->dataadmin();
		$isi['datalist'] = $this->model_news->get_all_berita();
		$isi['title'] = "ICC | Admin List News";
		$isi['menu'] = "admin/menu/menu";
		$isi['konten'] = "admin/konten/konten_list_news";
		$this->load->view('admin/tampilan_dashboard',$isi);
	}

	function kalender_event(){
		$this->model_keamanan->getkeamananadmin();
		$data_calendar = $this->modeldb->get_list($this->table);
		$calendar = array();
		foreach ($data_calendar as $key => $val)
		{
			$calendar[] = array(
				'id' 	=> intval($val->id),
				'title' => $val->title,
				'description' => trim($val->description),
				'start' => date_format( date_create($val->start_date) ,"Y-m-d H:i:s"),
				'end' 	=> date_format( date_create($val->end_date) ,"Y-m-d H:i:s"),
				'color' => $val->color,
			);
		}

		$isi = array();
		$isi['get_data']			= json_encode($calendar);
		$isi['data']		= $this->model_data->dataadmin();
		$isi['title'] = "ICC | Admin Kalender Event";
		$isi['menu'] = "admin/menu/menu";
		$isi['konten'] = "admin/konten/konten_kalender_event";
		$this->load->view('admin/tampilan_dashboard',$isi);
	}

	public function peserta_event(){
		$this->model_keamanan->getkeamananadmin();
		$isi['data']		= $this->model_data->dataadmin();
		$isi['title'] = "ICC | Admin Peserta Event";
		$isi['menu'] = "admin/menu/menu";
		$isi['konten'] = "admin/konten/konten_peserta_event";
		$this->load->view('admin/tampilan_dashboard',$isi);
	}

	public function data_peserta(){
		$data = $this->model_data->data_peserta();
    echo json_encode($data);
	}

	public function detail_peserta(){
		$this->model_keamanan->getkeamananadmin();
		$isi['data']		= $this->model_data->dataadmin();
		$isi['daftar_peserta'] = $this->model_data->daftar_peserta();
		$isi['title'] = "ICC | Admin Detail Peserta";
		$isi['menu'] = "admin/menu/menu";
		$isi['konten'] = "admin/konten/konten_detail_peserta_event";
		$this->load->view('admin/tampilan_dashboard',$isi);
	}

	public function requirement_berkas(){
		$this->model_keamanan->getkeamananadmin();
		$isi['data']		= $this->model_data->dataadmin();
		$isi['title'] = "ICC | Admin requirement berkas";
		$isi['menu'] = "admin/menu/menu";
		$isi['konten'] = "admin/konten/konten_requirement";
		$this->load->view('admin/tampilan_dashboard',$isi);
	}

	public function requirement_jurusan(){
		$this->model_keamanan->getkeamananadmin();
		$isi['data']		= $this->model_data->dataadmin();
		$isi['title'] = "ICC | Admin requirement jurusan";
		$isi['menu'] = "admin/menu/menu";
		$isi['konten'] = "admin/konten/konten_requirement_jurusan";
		$this->load->view('admin/tampilan_dashboard',$isi);
	}

	public function list_requirement(){
		$data = $this->model_data->list_requirement();
    echo json_encode($data);
	}

	public function list_requirement_jurusan(){
		$data = $this->model_data->list_requirement_jurusan();
    echo json_encode($data);
	}

	public function save()
	{
		$response = array();
		$this->form_validation->set_rules('title', 'Title cant be empty ', 'required');
		if ($this->form_validation->run() == TRUE)
		{
			$param = $this->input->post();
			$calendar_id = $param['calendar_id'];
			unset($param['calendar_id']);

			if($calendar_id == 0)
			{
				date_default_timezone_set('Asia/Jakarta');
				$param['create_at']   	= date('Y-m-d H:i:sa');
				$insert = $this->modeldb->insert($this->table, $param);

				if ($insert > 0)
				{
					$response['status'] = TRUE;
					$response['notif']	= 'Success add calendar';
					$response['id']		= $insert;
				}
			}
			else
			{
				date_default_timezone_set('Asia/Jakarta');
				$where 		= [ 'id'  => $calendar_id];
				$param['modified_at']   	= date('Y-m-d H:i:s');
				$update = $this->modeldb->update($this->table, $param, $where);

				if ($update > 0)
				{
					$response['status'] = TRUE;
					$response['notif']	= 'Success add calendar';
					$response['id']		= $calendar_id;
				}
				else
				{
					$response['status'] = FALSE;
					$response['notif']	= 'Server wrong, please save again';
				}

			}
		}
		else
		{
			$response['status'] = FALSE;
			$response['notif']	= validation_errors();
		}

		echo json_encode($response);
	}

	public function delete()
	{
		$response 		= array();
		$calendar_id 	= $this->input->post('id');
		if(!empty($calendar_id))
		{
			$where = ['id' => $calendar_id];
			$delete = $this->modeldb->delete($this->table, $where);

			if ($delete > 0)
			{
				$response['status'] = TRUE;
				$response['notif']	= 'Success delete calendar';
			}
			else
			{
				$response['status'] = FALSE;
				$response['notif']	= 'Server wrong, please save again';
			}
		}
		else
		{
			$response['status'] = FALSE;
			$response['notif']	= 'Data not found';
		}

		echo json_encode($response);
	}

	function list_permohonan(){
		$data = $this->model_data->list_pekerjaan();
    echo json_encode($data);
	}

	function list_kategori_industri(){
		$data = $this->model_data->list_kategori_industri();
    echo json_encode($data);
	}

	function tambah_kategori(){
		$namakategori=$this->input->post('namakategori');
    $data=$this->model_data->insert_kategori($namakategori);
    echo json_encode($data);
	}

	function tambah_requirement(){
		$namarequirement=$this->input->post('namarequirement');
    $data=$this->model_data->insert_requirement($namarequirement);
    echo json_encode($data);
	}

	function tambah_requirement_jurusan(){
		$namajurusan=$this->input->post('namarequirement_jurusan');
    $data=$this->model_data->insert_requirement_jurusan($namajurusan);
    echo json_encode($data);
	}

	function hapusjoblist(){
		$idjoblist=$this->input->post('kode');
    $data=$this->model_data->hapus_joblist($idjoblist);
    echo json_encode($data);
	}


	function hapuskategori(){
		$id_industri=$this->input->post('kode_kategori');
    $data=$this->model_data->hapus_kategori($id_industri);
    echo json_encode($data);
	}

	function hapusrequirement(){
		$id_requirement=$this->input->post('kode_requirement');
    $data=$this->model_data->hapus_requirement($id_requirement);
    echo json_encode($data);
	}

	function hapusrequirement_jurusan(){
		$id_requirement_jurusan=$this->input->post('kode_requirement_jurusan');
    $data=$this->model_data->hapus_requirement_jurusan($id_requirement_jurusan);
    echo json_encode($data);
	}

	function getidkategori(){
		$id_kategori = $this->input->get('id');
    $data = $this->model_data->get_tipe_by_kode($id_kategori);
    echo json_encode($data);
	}

	function getidrequirement(){
		$id_requirement = $this->input->get('id');
    $data = $this->model_data->get_tipe_by_kode_req($id_requirement);
    echo json_encode($data);
	}

	function getidrequirement_jurusan(){
		$id_requirement = $this->input->get('id');
    $data = $this->model_data->get_tipe_by_kode_req_jurusan($id_requirement);
    echo json_encode($data);
	}

	function update_kategori(){
		$id=$this->input->post('id_industri');
    $jenis=$this->input->post('jenis_industri');
    $data=$this->model_data->update_kategori($id, $jenis);
    echo json_encode($data);
	}

	function update_requirement(){
		$id=$this->input->post('id_requirement');
		$nama=$this->input->post('nama_requirement');
		$data=$this->model_data->update_requirement($id, $nama);
		echo json_encode($data);
	}

	function update_requirement_jurusan(){
		$id=$this->input->post('id_requirement');
		$nama=$this->input->post('nama_jurusan');
		$data=$this->model_data->update_requirement_jurusan($id, $nama);
		echo json_encode($data);
	}

	function validasi(){
		$idjoblist=$this->input->post('kode');
    $data=$this->model_data->validasi_joblist($idjoblist);
    echo json_encode($data);
	}

	function logout(){
		$this->session->sess_destroy();
		$this->session->unset_userdata($sess_admin);
		redirect('Admin');
	}
}

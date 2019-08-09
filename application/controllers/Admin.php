<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function __construct()
	{
		parent::__construct();
		$this->table 		= 'calendar';
		$this->load->model('Globalmodel', 'modeldb');
	}

	public function index()
	{
		$session_admin = $this->session->userdata('Email_admin');
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
		$isi['jmlh_almni_itera'] = $this->model_data->jmlh_almni_itera();
		$isi['jmlh_almni_non_itera'] = $this->model_data->jmlh_almni_non_itera();
		$isi['jmlh_mhs'] = $this->model_data->jmlh_mhs();
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

	function getidkategori(){
		$id_kategori = $this->input->get('id');
    $data = $this->model_data->get_tipe_by_kode($id_kategori);
    echo json_encode($data);
	}

	function update_kategori(){
		$id=$this->input->post('id_industri');
    $jenis=$this->input->post('jenis_industri');
    $data=$this->model_data->update_kategori($id, $jenis);
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

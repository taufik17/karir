<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Add_karir extends CI_Controller {
	public function index()
	{
		$this->model_keamanan->getkeamananuser();
		$username_user = $this->session->userdata('username_user');
		$nama_member = $this->session->userdata('Nama_jobseeker');
		$isi['data'] = $this->db->query("SELECT * FROM jobseeker WHERE id_akun = (SELECT id_akun FROM user WHERE username = '$username_user')");
		$isi['title'] = "ICC | Joblist ";
		$isi['provinsi'] = $this->model_data->provinsi();
		$isi['jenis_industri'] = $this->model_data->jenis_industri();
		$config['base_url'] = base_url().'beranda/pagination';
		$config['total_rows'] = $this->model_data->jmlhPerusahaanBuka();
		$config['per_page'] = 10;

		// styling
		$config['full_tag_open'] = '<nav> <ul class="pagination justify-content-center">';
		$config['full_tag_close'] = ' </ul> </nav>';
		$config['first_link'] = 'First';
		$config['first_tag_open'] = '<li class="page-item">';
		$config['first_tag_close'] = '</li>';

		$config['last_link'] = 'Last';
		$config['last_tag_open'] = '<li class="page-item">';
		$config['last_tag_close'] = '</li>';

		$config['next_link'] = '&raquo';
		$config['next_tag_open'] = '<li class="page-item">';
		$config['next_tag_close'] = '</li>';

		$config['left_link'] = '&laquo';
		$config['left_tag_open'] = '<li class="page-item">';
		$config['left_tag_close'] = '</li>';

		$config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
		$config['cur_tag_close'] = '</a></li>';

		$config['num_tag_open'] = '<li class="page-item">';
		$config['num_tag_close'] = '</li>';

		$config['attributes'] = array('class' => 'page-link');

		$config['first_url'] = base_url();

		$this->pagination->initialize($config);
		$isi['start'] = 0;
		$isi['data_list'] = $this->model_data->data_list_ajax($config['per_page'], $isi['start']);
		$this->load->view('member/tampilan_add_karir', $isi);
	}

	public function viewjob(){
		echo "view job";
	}
}

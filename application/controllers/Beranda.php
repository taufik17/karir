<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$sess_company = $this->session->userdata('Email_officer');
		$sess_member = $this->session->userdata('Email_jobseeker');
		if(!empty($sess_company))
		{
			redirect('company');
		}
		if(!empty($sess_member))
		{
			redirect('member');
		}
		else {
			$isi['title'] = "ITERA | Career Center";
			$isi['provinsi'] = $this->model_data->provinsi();
			$isi['jenis_industri'] = $this->model_data->jenis_industri();
			$isi['event'] = $this->model_data->event();
			$isi['data_list'] = $this->model_data->data_list();
			$this->load->view('web/tampilan_beranda',$isi);	
		}
	}

	function fetch()
	{
		$output = '';
		$this->load->model('model_data');
		$data = $this->model_data->fetch_data($this->input->post('limit'), $this->input->post('start'));
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
				<div class="post_data">
					<h3 class="text-danger">'.$row->Nama_joblist.'</h3>
					<p>'.$row->perusahaan.'</p>
				</div>
				';
			}
		}
		echo $output;
	}

	function fetchcategory()
	{
		$output = '';
		$this->load->model('model_data');
		$data = $this->model_data->fetch_data_category($this->input->post('limit_category'), $this->input->post('start_category'));
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
					<li><a class="justify-content-between d-flex" href="beranda/category/'.$row->jenis_industri.'"><p>'.$row->jenis_industri.'</p><span>'.$row->jumlah.'</span></a></li>
				';
			}
		}
		echo $output;
	}

	function category(){
		$key = $this->uri->segment(3);
		echo "ini adalah konten $key";
	}

}

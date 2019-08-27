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
			$isi['data_terbaru'] = $this->model_data->fetch_data();
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
				<div class="single-post row">
					<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
						<a class="comp-logo col-md-2 pl-0 pr-terbaru" href="http://localhost/karir/company/view/'.$row->perusahaan.'">
							<img width="95" class="box-shadow p-1" alt="ITERA" src="http://localhost/karir/assets/logo_perusahaan/default.png">
						</a>
						<div>
							<h5 class="m-0"><a class="txt-dark-blue" href="http://localhost/karir/company/view/'.$row->perusahaan.'"><strong>ITERA</strong></a></h5>
							<span class="d-block txt-dark-blue">
							ini deskripsi perusahaan ITERA
							</span>
						</div>
					</div>
					<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
						<div class="w-100">
						<h1>2</h1>
							<span>Lowongan</span>
							<h5>
								<a class="genric-btn info circle arrow tiny collapsed" href="http://localhost/karir/company/view/'.$row->perusahaan.'">
								<i class="fa fa-eye"></i>
								</a>
							</h5>
						</div>
					</div>
				</div>
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

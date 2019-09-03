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

		// foreach ($query->result() as $nama)
		$data = $this->model_data->fetch_data($this->input->post('limit'), $this->input->post('start'));
		if($data->num_rows() > 0)
		{
			$base_url = base_url();
			foreach($data->result() as $row)
			{
				$output .= '
				<div class="post_data">
					<div class="single-post row">
						<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
						<a class="comp-logo col-md-2 pl-0 pr-terbaru" href="<?= base_url(); ?>company/view">
							<img class="box-shadow p-1" src="'.$base_url.'assets/logo_perusahaan/'.$row->logo_perusahaan.'" width="95px" alt="'.$row->nama_perusahaan.'" >
						</a>
							<div>
								<p><a href="company/detailjob/'.$row->id_joblist.'" target="_blank" class="txt-dark-blue"><strong>'.$row->Nama_joblist.'</strong></a></p>
								<span class="d-block txt-dark-blue">
									<p>'.$row->nama_perusahaan.'</p>
									<p><i class="fa fa-map-marker"></i>&nbsp'.$row->nama.'</p>
								</span>
								<p class="mb-1 mt-1"></p>
							</div>
						</div>
						<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
							<div class="w-100">
								<h5>
								<a href="company/detailjob/'.$row->id_joblist.'">
									Lihat
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

	function fetch_news(){
		$output = '';
		$this->load->model('model_data');

		// foreach ($query->result() as $nama)
		$data = $this->model_data->fetch_news($this->input->post('limit_news'), $this->input->post('start_news'));
		if($data->num_rows() > 0)
		{
			$base_url = base_url();
			foreach($data->result() as $row)
			{
				$output .= '
				<div class="post_data">
				<div class="recent-posts-widget">

				<div>
					<a href="news/view/'.$row->berita_id.'" target="_blank">
					<img width="100%" height="120px" src="'.$base_url.'assets/gambar/news/'.$row->berita_image.'">
					</a>
					<br>
					</div>
						<div>
							<div class="post-header">
 							<h5>
 							<a href="news/view/'.$row->berita_id.'" target="_blank">
								'.$row->berita_judul.'
							</a>
							</h5>
 							<div>
								<time class="post-meta-date" datetime="2019-04-29T17:03:15+00:00">
								'.$row->berita_tanggal.'
								</time>
								</div>
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

	function fetchlocation()
	{
		$output = '';
		$this->load->model('model_data');
		$data = $this->model_data->fetch_data_location($this->input->post('limit_location'), $this->input->post('start_location'));
		if($data->num_rows() > 0)
		{
			foreach($data->result() as $row)
			{
				$output .= '
					<li><a class="justify-content-between d-flex" href="beranda/location/'.$row->id_provinsi.'"><p>'.$row->nama.'</p><span>'.$row->jumlah.'</span></a></li>
				';
			}
		}
		echo $output;
	}

	function location()
	{
		$key = $this->uri->segment(3);
		echo "ini adalah konten $key";
	}

	function category(){
		$key = $this->uri->segment(3);
		echo "ini adalah konten $key";
	}

}

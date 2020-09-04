<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$username_user = $this->session->userdata('username_user');
		$role_user = $this->session->userdata('role_user');

			$isi['title'] = "ITERA | Career Center";
			$isi['provinsi'] = $this->model_data->provinsi();
			$isi['jenis_industri'] = $this->model_data->jenis_industri();
			$isi['event'] = $this->model_data->event();

			//pagination
			$config['base_url'] = base_url().'beranda/pagination';
			$config['total_rows'] = $this->model_data->jmlhPerusahaanBuka();
			$config['per_page'] = 5;

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
			$isi['start'] = $this->uri->segment(3);
			$isi['data_list'] = $this->model_data->data_list_ajax($config['per_page'], $isi['start']);
			$this->load->view('web/tampilan_beranda',$isi);

	}

	public function redirect()
	{
		$role_user = $this->session->userdata('role_user');
		if ($role_user == '1') {
			redirect('company');
		}
		if ($role_user == '2') {
			redirect('member');
		}

	}

	public function pagination()
	{
		$username_user = $this->session->userdata('username_user');
		$role_user = $this->session->userdata('role_user');
		if ($role_user == '1') {
			redirect('company');
		}
		if ($role_user == '2') {
			redirect('member');
		}
		else {
			$isi['title'] = "ITERA | Career Center";
			$isi['provinsi'] = $this->model_data->provinsi();
			$isi['jenis_industri'] = $this->model_data->jenis_industri();
			$isi['event'] = $this->model_data->event();

			//pagination
			$config['base_url'] = "http://localhost/karir/beranda/pagination";
			$config['total_rows'] = $this->model_data->jmlhPerusahaanBuka();
			$config['per_page'] = 5;

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

			$config['prev_link'] = '&laquo';
			$config['prev_tag_open'] = '<li class="page-item">';
			$config['prev_tag_close'] = '</li>';

			$config['cur_tag_open'] = '<li class="page-item active"> <a class="page-link" href="#">';
			$config['cur_tag_close'] = '</a></li>';

			$config['num_tag_open'] = '<li class="page-item">';
			$config['num_tag_close'] = '</li>';

			$config['attributes'] = array('class' => 'page-link');

			$config['first_url'] = base_url();

			$this->pagination->initialize($config);
			$isi['start'] = $this->uri->segment(3);
			$isi['data_list'] = $this->model_data->data_list_ajax($config['per_page'], $isi['start']);
			$isi['konten'] = "web/konten_pagination";
			$this->load->view('web/tampilan_beranda_pagination',$isi);
		}
	}

	function fetch()
	{
		$output = '';
		$this->load->model('model_data');
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
							<img class="box-shadow p-1" src="'.$base_url.'assets/gambar/company/profil/'.$row->logo_perusahaan.'" width="95px" alt="'.$row->nama_perusahaan.'" >
						</a>
							<div>
								<p><a href="company/detailjob_buka/'.$row->perusahaan.'/'.$row->id_joblist.'" target="_blank" class="txt-dark-blue"><strong>'.$row->Nama_joblist.'</strong></a></p>
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
								<a href="company/detailjob_buka/'.$row->perusahaan.'/'.$row->id_joblist.'" target="_blank">
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

	function fetch_popular()
	{
		$output = '';
		$this->load->model('model_data');
		$data = $this->model_data->fetch_data_popular($this->input->post('limit_popular'), $this->input->post('start_popular'));
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
							<img class="box-shadow p-1" src="'.$base_url.'assets/gambar/company/profil/'.$row->logo_perusahaan.'" width="95px" alt="'.$row->nama_perusahaan.'" >
						</a>
							<div>
								<p><a href="company/detailjob_buka/'.$row->perusahaan.'/'.$row->id_joblist.'" target="_blank" class="txt-dark-blue"><strong>'.$row->Nama_joblist.'</strong></a></p>
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
								<a href="company/detailjob_buka/'.$row->perusahaan.'/'.$row->id_joblist.'" target="_blank">
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

	function cari() {
		$katalog = $this->input->post('search');
		$prvinsi = $this->input->post('prov');
		$kategori = $this->input->post('kategori');
		$isi['string'] = $this->input->post('cari');
		$isi['profinsi'] = $this->input->post('provinsi');
		$isi['kategori'] = $this->input->post('kategori');
		$isi['title'] = "ITERA | Search Result";
		$isi['provinsi'] = $this->model_data->provinsi();
		$isi['jenis_industri'] = $this->model_data->jenis_industri();
		$this->load->model('model_data');
		$isi['event'] = $this->model_data->event();
		$isi['data_list'] = $this->db->query("SELECT Id_perusahaan, Nama_perusahaan, Logo_perusahaan, deskripsi_perusahaan, Nama_joblist
FROM joblist NATURAL JOIN company
WHERE Id_perusahaan = perusahaan
AND deadline >= current_date()
AND Nama_joblist LIKE '%$katalog%' OR Nama_perusahaan LIKE '%$katalog%'
AND id_provinsi = $prvinsi
AND id_industri = $kategori
AND status = '<span class=\"label label-success\">Telah tayang</span>'
");
																					// SELECT * FROM joblist, company WHERE Nama_joblist = 'ITERA' OR Nama_perusahaan = 'ITERA'
		$this->load->view('tampilan_hasil_cari', $isi);
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

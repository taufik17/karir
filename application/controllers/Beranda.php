<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Beranda extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ITERA | Career Center";
		$isi['provinsi'] = $this->model_data->provinsi();
		$isi['jenis_industri'] = $this->model_data->jenis_industri();
		$this->load->view('web/tampilan_beranda',$isi);
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

}

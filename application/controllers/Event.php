<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ITERA | Event";
		$this->load->view('web/tampilan_event',$isi);
	}

	function careerday(){
		$isi['title'] = "Event | CareerDay";
		$this->load->view('web/tampilan_carerday',$isi);
	}

	function daftar(){
		$config['upload_path'] = './assets/foto_careerday/'; //path folder
		$config['allowed_types'] = 'jpg|png|jpeg|bmp'; //type yang dapat diakses bisa anda sesuaikan
		$config['encrypt_name'] = true; //nama yang terupload nantinya

		$this->upload->initialize($config);
		if(!empty($_FILES['filefoto']['name']))
		{
			if ($this->upload->do_upload('filefoto'))
			{
				$gbr = $this->upload->data();
				$data['foto'] = $gbr['file_name']; //Mengambil file name dari gambar yang diupload
				$data['nama'] = $this->input->post('nama');
				$data['jk'] = $this->input->post('jk');
				$data['tgl_lahir'] = $this->input->post('tanggal_lahir');
				$data['alamat'] = $this->input->post('alamat');
				$data['asal_sekolah_pt'] = $this->input->post('asal');
				$data['tahun_lulus_terakhir'] = $this->input->post('tahun_lulus');
				$data['email'] = $this->input->post('email');
				$data['nohp'] = $this->input->post('no_hp');
				$data['alasan_ikut'] = $this->input->post('alasan');
				$data['id_event'] = 86;
				$this->load->model('model_data');
				$this->model_data->getinsert_career_day($data);

				$this->session->set_flashdata('info',
						'<div class="alert alert-success alert-dismissible">
                <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                <h5><i class="icon fa fa-check"></i> Info</h5>
                Pendaftaran Berhasil
              </div>');
				redirect('event/careerday');
			}
			else
			{
				echo "Gambar Gagal Upload. Gambar harus bertipe gif|jpg|png|jpeg|bmp";
			}
		}
	}
}

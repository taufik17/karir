<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {
	public function index()
	{
		$isi['title'] = "ITERA | Event";
		$this->load->view('web/tampilan_event',$isi);
	}

	function viewevent(){
		$id_event = $this->uri->segment(3);
		$isi['id'] = $this->uri->segment(3);
		if ($id_event == 86) {
			$isi['title'] = "Event | CareerDay";
			$isi['event'] = $this->db->query("SELECT * FROM calendar WHERE id = $id_event");
			$this->load->view('web/tampilan_carerday',$isi);
		}
		else {
			$isi['title'] = "Event | nama event";
			$isi['event'] = $this->db->query("SELECT * FROM calendar WHERE id = $id_event");
			$this->load->view('web/isi_event',$isi);
		}
	}

	function daftar(){
		date_default_timezone_set('Asia/Jakarta');
		$sekarang =  date('Y-m-d');
		$start = $this->input->post('start_date');
		$end = $this->input->post('end_date');
		if ($start <= $sekarang && $end >= $sekarang ) {
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
					$data['id_event'] = $this->input->post('id');
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
		else {
			 echo "<script>alert('Pendaftaran telah ditutup');window.location='../event'</script>";
		}

	}

}

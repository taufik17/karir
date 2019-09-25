<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Faq extends CI_Controller {
	public function index()
	{
		$this->load->view('web/tampilan_faq');
		$key = $this->uri->segment(3);
		$id = $this->db->query("SELECT Nama_perusahaan FROM company WHERE Id_perusahaan = '$key'");
		foreach ($id->result() as $row) {
			$nama = $row->Nama_perusahaan;
		}
		$isi['title'] = "Daftar Lowongan Buka | $nama";
		$isi['menu'] = "company/menu/menu";
		$isi['konten'] = "web/konten_lowongan_company";
		
		$this->load->view('web/tampilan_view_company', $isi);
	}
}

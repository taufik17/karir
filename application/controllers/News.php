<?php
class News extends CI_Controller{
    function __construct(){
        parent::__construct();
        $this->load->model('model_news');
    }
		function index(){
			// do nothing
		}
    function view(){
			$kode=$this->uri->segment(3);
			$isi['data_news'] = $this->db->query("SELECT * FROM tbl_berita WHERE berita_id = $kode");
			$this->load->view('web/tampilan_news', $isi);
    }
}

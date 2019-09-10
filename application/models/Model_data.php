<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Model_data extends CI_model {

	function dataadmin() {
		$email_login = $this->session->userdata('Email_admin');
		$data = $this->db->query("SELECT * FROM admin WHERE Email_admin='$email_login'");
		return $data;
	}

	function jmlh_almni_itera(){
		$data = $this->db->query("SELECT id_jobseeker_alumni FROM jobseeker_alumni")->num_rows();
		return $data;
	}

	function jmlh_almni_non_itera(){
		$data = $this->db->query("SELECT id_jobseeker_nonalumni FROM jobseeker_nonalumni")->num_rows();
		return $data;
	}

	function jmlh_mhs(){
		$data = $this->db->query("SELECT id_jobseeker_mhs FROM jobseeker_mahasiswa")->num_rows();
		return $data;
	}

	function jmlh_company(){
		$data = $this->db->query("SELECT Id_perusahaan FROM company")->num_rows();
		return $data;
	}

	function profil_company(){
		$data = $this->db->query("SELECT * FROM company");
		return $data;
	}

	function provinsi(){
		$data = $this->db->query("SELECT id, nama FROM provinsi");
		return $data;
	}

	function jenis_industri(){
		$data = $this->db->query("SELECT id_industri, jenis_industri FROM industri");
		return $data;
	}

	function data_company(){
		$hasil = $this->db->get('company');
    return $hasil->result();
	}

	function data_pekerjaan(){
		$id_perusahaan = $this->session->userdata('Id_perusahaan');
		$hasil = $this->db->query("SELECT * FROM joblist WHERE perusahaan = $id_perusahaan");
		return $hasil->result();
	}

	function insert_job($nama_joblist, $deadline){
		$id_perusahaan = $this->session->userdata('Id_perusahaan');
    $hasil = $this->db->query("INSERT INTO `joblist` (`id_joblist`, `Nama_joblist`, `perusahaan`, `deadline`) VALUES (NULL, '$nama_joblist', '$id_perusahaan', '$deadline')");
    return $hasil;
  }

	function list_pekerjaan(){
		$hasil = $this->db->query("SELECT * FROM `joblist` NATURAL JOIN company WHERE `status` = '<span class=\"label label-warning\">Pending</span>' AND `perusahaan` = Id_perusahaan");
		return $hasil->result();
	}

	function list_kategori_industri(){
		$hasil = $this->db->query("SELECT * FROM `industri`");
		return $hasil->result();
	}

	function hapus_joblist($idjoblist){
		$hasil=$this->db->query("DELETE FROM joblist WHERE id_joblist='$idjoblist'");
    return $hasil;
	}

	function hapus_kategori($id_industri){
		$hasil = $this->db->query("DELETE FROM industri WHERE id_industri='$id_industri'");
		return $hasil;
	}

	function hapus_requirement($id_requirement){
		$hasil = $this->db->query("DELETE FROM requirement_berkas WHERE id_requirement='$id_requirement'");
		return $hasil;
	}

	function hapus_requirement_jurusan($id_requirement_jurusan){
		$hasil = $this->db->query("DELETE FROM requirement_jurusan WHERE id_requirement='$id_requirement_jurusan'");
		return $hasil;
	}

	function validasi_joblist($idjoblist){
		$hasil = $this->db->query("UPDATE `joblist` SET `status` = '<span class=\"label label-success\">Telah tayang</span>' WHERE `joblist`.`id_joblist` = $idjoblist");
		return $hasil;
	}

	function insert_kategori($namakategori){
		$data = array('jenis_industri' => $namakategori );
    $hasil = $this->db->insert('industri', $data);
    return $hasil;
	}

	function insert_requirement($namarequirement){
		$data = array('nama_requirement' => $namarequirement );
    $hasil = $this->db->insert('requirement_berkas', $data);
    return $hasil;
	}

	function insert_requirement_jurusan($namajurusan){
		$data = array('nama_jurusan' => $namajurusan );
    $hasil = $this->db->insert('requirement_jurusan', $data);
    return $hasil;
	}

	function get_tipe_by_kode($id){
		$this->db->where('id_industri', $id);
    $hsl = $this->db->get('industri', $id);
		$hasil = array();
    if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_industri' => $data->id_industri,
                    'jenis_industri' => $data->jenis_industri,
                    );
            }
        }
    return $hasil;
	}

	function get_tipe_by_kode_req($id){
		$this->db->where('id_requirement', $id);
    $hsl = $this->db->get('requirement_berkas', $id);
		$hasil = array();
    if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_requirement' => $data->id_requirement,
                    'nama_requirement' => $data->nama_requirement,
                    );
            }
        }
    return $hasil;
	}

	function get_tipe_by_kode_req_jurusan($id){
		$this->db->where('id_requirement', $id);
    $hsl = $this->db->get('requirement_jurusan', $id);
		$hasil = array();
    if($hsl->num_rows()>0){
            foreach ($hsl->result() as $data) {
                $hasil=array(
                    'id_requirement' => $data->id_requirement,
                    'nama_jurusan' => $data->nama_jurusan,
                    );
            }
        }
    return $hasil;
	}

	function update_kategori($id, $jenis){
		return $hasil = $this->db->query("UPDATE industri SET jenis_industri='$jenis' WHERE id_industri=$id");
	}

	function update_requirement($id, $nama){
		return $hasil = $this->db->query("UPDATE requirement_berkas SET nama_requirement='$nama' WHERE id_requirement=$id");
	}

	function update_requirement_jurusan($id, $nama){
		return $hasil = $this->db->query("UPDATE requirement_jurusan SET nama_jurusan='$nama' WHERE id_requirement=$id");
	}

	function fetch_data($limit, $start)
	{
		// $query = $this->db->select("Nama_joblist, id_joblist, perusahaan")
		// 					->from("joblist")
		// 					->where("status = '<span class=\"label label-success\">Telah tayang</span>'")
		// 					->order_by("id_joblist", "DESC")
		// 					->limit($limit, $start)
		// 					->get();

		//
		// $query = $this->db->query("SELECT *
		// FROM joblist
		// NATURAL JOIN industri
		// WHERE  status = '<span class=\"label label-success\">Telah tayang</span>'
		// ORDER BY id_joblist DESC
		// LIMIT $limit OFFSET $start ");

		$query = $this->db->query("SELECT Nama_joblist, id_joblist, nama_perusahaan, logo_perusahaan, nama
		FROM joblist
		NATURAL JOIN company
		NATURAL JOIN provinsi
    WHERE id_perusahaan = perusahaan
		AND  status = '<span class=\"label label-success\">Telah tayang</span>'
		AND id_provinsi = id
		ORDER BY id_joblist DESC
		LIMIT $limit OFFSET $start ");

		return $query;
	}

	function fetch_data_popular($limit_popular, $start_popular)
	{
		$query = $this->db->query("SELECT Nama_joblist, COUNT(*) as jumlah, id_joblist, nama_perusahaan, logo_perusahaan, nama
		FROM joblist
		NATURAL JOIN company
		NATURAL JOIN provinsi
    NATURAL JOIN  lamaran

    WHERE id_perusahaan = perusahaan
		AND  status = '<span class=\"label label-success\">Telah tayang</span>'
		AND id_provinsi = id
    AND pekerjaan = id_joblist
    GROUP BY pekerjaan
		ORDER BY jumlah  DESC
		LIMIT $limit_popular OFFSET $start_popular ");

		return $query;
	}

	function fetch_news($limit_news, $start_news){
		$query = $this->db->query("SELECT * FROM tbl_berita ORDER BY berita_id DESC LIMIT $limit_news OFFSET $start_news");
		return $query;
	}

	function fetch_data_category($limit_category, $start_category)
	{
		$query = $this->db->query("SELECT jenis_industri, COUNT(*) AS jumlah FROM company NATURAL JOIN industri ORDER BY jumlah DESC");
		return $query;
	}

	function fetch_data_location($limit_location, $start_location)
	{
		$query = $this->db->query("SELECT id_provinsi, nama, COUNT(nama) AS jumlah FROM provinsi NATURAL JOIN company WHERE id = id_provinsi GROUP BY nama ORDER BY nama");
		return $query;
	}

	function event(){
		$query = $this->db->query("select * from calendar WHERE start_date<=current_date() AND end_date >= current_date()");
		return $query;
	}

	function getinsert_career_day($data){
		$this->db->insert('peserta_careerday', $data);
	}

	function data_peserta(){
		$hasil = $this->db->query("SELECT title,id_event, count(id) as jumlah FROM peserta_careerday NATURAL JOIN calendar where id=86");
		return $hasil->result();
	}

	function daftar_peserta() {
		$hasil = $this->db->query("SELECT * FROM peserta_careerday");
		return $hasil;
	}

	function data_list() {
		$hasil = $this->db->query("SELECT Id_perusahaan, Nama_perusahaan, deskripsi_perusahaan, Logo_perusahaan
			FROM company");
		return $hasil;
	}

	function cari($prov, $kategori){
		$hasil = $this->db->query("SELECT Id_perusahaan, Nama_perusahaan, deskripsi_perusahaan, Logo_perusahaan
																					FROM company
																					WHERE id_provinsi = $prov
																					AND id_industri = $kategori");
		return $hasil;
	}

	function list_requirement(){
		$hasil = $this->db->query("SELECT * FROM requirement_berkas");
		return $hasil->result();
	}

	function list_requirement_jurusan(){
		$hasil = $this->db->query("SELECT * FROM requirement_jurusan");
		return $hasil->result();
	}

}

<div class="col-md-3">
	<div class="list-group">
		<a <?=$this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '' ? 'class="list-group-item aktif"' : 'class="list-group-item" '?>
			href="<?= base_url(); ?>company">
			<i class="fa fa-home tab10" aria-hidden="true"></i>
			Beranda
		</a>
		<a <?=$this->uri->segment(2) == 'listjob' ? 'class="list-group-item aktif"' : 'class="list-group-item" '?>
			href="<?= base_url(); ?>company/listjob">
			<i class="fa fa-list-alt tab10" aria-hidden="true"></i>
			List Job
		</a>
		<a <?=$this->uri->segment(2) == 'profil' ? 'class="list-group-item aktif"' : 'class="list-group-item" '?>
			href="<?= base_url(); ?>company/tambahjoblist">
			<i class="fa fa-user tab10" aria-hidden="true"></i>
			profil
		</a>
	</div>

	<div class="list-group">
		<a class="list-group-item list-group-item-header" href="#">Mahasiswa</a>
		<a class="list-group-item " href="http://siakad.itera.ac.id/mahasiswa/jadwal"><i class="fa fa-clock-o tab10" aria-hidden="true"></i> Jadwal Kuliah</a>
		<a class="list-group-item " href="http://siakad.itera.ac.id/mahasiswa/kuesioner"><i class="fa fa-question-circle tab10" aria-hidden="true"></i> Kuesioner</a>
		<a class="list-group-item " href="http://siakad.itera.ac.id/mahasiswa/pembayaran"><i class="fa fa-calendar-check-o tab10" aria-hidden="true"></i> Pembayaran UKT</a>
		<a class="list-group-item " href="http://siakad.itera.ac.id/mahasiswa/status"><i class="fa fa-list-ul tab10" aria-hidden="true"></i> Status Per Semester</a>
		<a class="list-group-item " href="http://siakad.itera.ac.id/mahasiswa/kkn"><i class="fa fa-check-square tab10" aria-hidden="true"></i> Pendaftaran KKN</a>
		<a class="list-group-item " href="http://siakad.itera.ac.id/mahasiswa/kkn/laporan"><i class="fa fa-file-text-o tab10" aria-hidden="true"></i> Laporan KKN</a>
	</div>

	<div class="list-group">
		<a class="list-group-item list-group-item-header" href="#">Informasi</a>
		<a class="list-group-item " href="http://siakad.itera.ac.id/mahasiswa/kelas"><i class="fa fa-book tab10" aria-hidden="true"></i> Kelas</a>
		<a class="list-group-item " href="http://siakad.itera.ac.id/mahasiswa/kalender"><i class="fa fa-calendar tab10" aria-hidden="true"></i> Kalender Akademik</a>
		<a class="list-group-item " href="http://siakad.itera.ac.id/mahasiswa/berita"><i class="fa fa-rss tab10" aria-hidden="true"></i> Berita Itera</a>
	</div>
</div>

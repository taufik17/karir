<?php $this->load->view('company/konten_header'); ?>

<section class="header-company section-gap">
	<div class="container">
		<div class="row">
			<?php foreach ($profil_company->result() as $nama ) {
				?>
			<div class="col-md-3">
			<?php } ?>

<div class="list-group">
  <a class="list-group-item aktif" href="http://siakad.itera.ac.id/mahasiswa"><i class="fa fa-home tab10" aria-hidden="true"></i> Beranda</a>
  <a class="list-group-item " href="http://siakad.itera.ac.id/mahasiswa/krsbaru"><i class="fa fa-plus-circle tab10" aria-hidden="true"></i> Tambah List Job</a>
  <a class="list-group-item " href="http://siakad.itera.ac.id/mahasiswa/transkrip"><i class="fa fa-list-alt tab10" aria-hidden="true"></i> List Job</a>
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

			<div class="col-md-9">
				<div class="nav-tabs-custom">
					<ul class="nav nav-tabs">
						<li><a aria-expanded="false" href="#settings" data-toggle="tab">Ubah Data</a></li>
						<li><a aria-expanded="false" href="#DataMahasiswa" data-toggle="tab">Data Mahasiswa</a></li>
						<li class="active"><a aria-expanded="true" href="#UbahPassword" data-toggle="tab">Ubah Kata Sandi</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane" id="DataMahasiswa">
							<table width="100%" class="table table-striped table-bordered table-hover dataTable" id="dataTables-example">
								<tbody>
									<tr>
										<td width="26%" align="left"><b>NIM</b></td>
										<td></td>
									</tr>
									<tr>
										<td align="left"><b>Nama Lengkap</b></td>
										<td>sunarno</td>
									</tr>
									<tr><td align="left"><b>Jurusan</b></td>
										<td>Teknik Geofisika</td>
									</tr>
									<tr>
										<td align="left"><b>Jenis Kelamin</b></td>
										<td>--</td>
									</tr>
									<tr>
										<td align="left"><b>Email</b></td>
										<td>sunarno@student.itera.ac.id</td>
									</tr>
									<tr>
										<td align="left"><b>Nomor Telepon</b></td>
										<td></td>
									</tr>
									<tr>
										<td align="left"><b>Alamat</b></td>
										<td></td>
									</tr>
									<tr>
										<td align="left"><b>Semester</b></td>
										<td>0</td>
									</tr>
								</tbody>
							</table>
						</div>

						<div class="tab-pane active" id="UbahPassword">
							<form class="form-horizontal" action="http://localhost/mtageo/ProfilMhs/updatesandi" enctype="multipart/form-data" method="post">
								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputPassword">Sandi Sekarang</label>
									<div class="col-sm-10">
										<input name="OldPassword" class="form-control" id="inputOldPassword" required="" type="password" placeholder="Kata Sandi Saat Ini">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputPassword">Sandi baru</label>
									<div class="col-sm-10">
										<input name="NewPassword" class="form-control" id="inputNewPassword" required="" type="password" placeholder="Kata Sandi Baru" minlength="8">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputPassword">Ketik ulang sandi baru</label>
									<div class="col-sm-10">
										<input name="AgainNewPassword" class="form-control" id="inputAgainNewPassword" required="" type="password" placeholder="Ulangi kata sandi baru" minlength="8">
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<div class="checkbox">
											<label>
												<input type="checkbox"> Data yang saya input Sudah Benar
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
									</div>
								</div>
							</form>
						</div>

						<div class="tab-pane" id="settings">
							<form class="form-horizontal" action="http://localhost/mtageo/ProfilMhs/updatedata" enctype="multipart/form-data" method="post">
								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputEmail">NIM</label>
									<div class="col-sm-10">
										<input name="NIM" class="form-control" id="inputNIM" required="" type="text" placeholder="NIM" value="">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputName">Nama Lengkap</label>
									<div class="col-sm-10">
										<input name="Nama_mhs" class="form-control" id="inputName" required="" type="text" placeholder="Nama Lengkap" value="sunarno">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputJurusan">Jurusan</label>
									<div class="col-sm-10">
										<input name="Jurusan" disabled="" class="form-control" id="inputJurusan" type="email" placeholder="Teknik Geofisika">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputEmail">Jenis Kelamin</label>
									<div class="col-sm-10">
										<select name="JK" tabindex="-1" class="form-control select2 select2-hidden-accessible" aria-hidden="true" style="width: 100%;" required="">
											<option selected="selected">--</option>
											<option value="Laki - Laki">Laki Laki</option>
											<option value="Perempuan">Perempuan</option>
										</select>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputEmail">Email</label>

									<div class="col-sm-10">
										<input disabled="" class="form-control" id="inputEmail" type="email" placeholder="sunarno@student.itera.ac.id">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputName">No HP / Telepon</label>

									<div class="col-sm-10">
										<input name="telp" class="form-control" id="inputPhone" type="text" placeholder="No HP / Telepon" value="">
									</div>
								</div>
								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputAddress">Alamat</label>

									<div class="col-sm-10">
										<textarea name="Alamat" class="form-control" id="inputAddress" placeholder="Alamat Lengkap"></textarea>
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="inputMasuk">Semester</label>

									<div class="col-sm-10">
										<input name="semester" class="form-control" id="inputMasuk" required="" type="number" placeholder="Semester" value="0">
									</div>
								</div>

								<div class="form-group">
									<label class="col-sm-2 control-label" for="exampleInputFile">Foto Profil</label>
									<div class="col-sm-10">
										<div class="dropify-wrapper" style="height: 264px;"><div class="dropify-message"><span class="file-icon"></span> <p>Drag atau drop untuk memilih file</p><p class="dropify-error">error</p></div><div class="dropify-loader"></div><div class="dropify-errors-container"><ul></ul></div><input name="filefoto" class="dropify" type="file" data-height="250"><button class="dropify-clear" type="button">Hapus</button><div class="dropify-preview"><span class="dropify-render"></span><div class="dropify-infos"><div class="dropify-infos-inner"><p class="dropify-filename"><span class="file-icon"></span> <span class="dropify-filename-inner"></span></p><p class="dropify-infos-message">Ganti</p></div></div></div></div>
										<input name="oldfile" type="text" value="avatar5.png" hidden="">
										<p class="help-block">File Max 2 Mb</p>
									</div>
								</div>

								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<div class="checkbox">
											<label>
												<input type="checkbox"> Data yang saya input Sudah Benar
											</label>
										</div>
									</div>
								</div>
								<div class="form-group">
									<div class="col-sm-offset-2 col-sm-10">
										<button class="btn btn-primary" type="submit"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
									</div>
								</div>
							</form>
						</div>
						<!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				</div>
				<!-- /.nav-tabs-custom -->
			</div>
		</div>

	</div>
</section>


<br>
&nbsp
<br>

<?php $this->load->view('web/konten_footer') ?>

<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/dist/js/demo.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

</body>
</html>

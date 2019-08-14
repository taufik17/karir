<?php $this->load->view('company/konten_header'); ?>

<section class="header-company section-gap">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="single-feature">
					<h4 align="center">Silahkan isi data ini dengan lengkap untuk mendaftar career day </h4>
					<div class="container-fluid">
						<br>
						<div class="row">
							<div class="col-sm-6">
								<form method="POST" action="<?php echo base_url();?>Event/daftar" enctype="multipart/form-data">
									<?php foreach ($event->result() as $judul ) {
										?>
										<input type="hidden" name="id" value="<?= $id; ?>">
										<input type="hidden" name="start_date" value="<?= $judul->start_date; ?>">
										<input type="hidden" name="end_date" value="<?= $judul->end_date; ?>">
									<?php } ?>
									<label for="exampleFormControlInput1">Nama<span class="required">&nbsp*</span>&nbsp:</label>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
										<input type="text" name="nama" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
									</div>
									<br>
									<br>

									<label for="exampleFormControlInput1">Jenis Kelamin<span class="required">&nbsp*</span>&nbsp:</label>
									<div class="input-group-icon mt-10">
										<div class="form-select" id="default-select">
											<select name="jk">
												<option selected="selected">-- pilih --</option>
												<option value="1">Laki - Laki</option>
												<option value="2">Perempuan</option>
											</select>
										</div>
									</div>
									<br>
									<br>

									<label for="exampleFormControlInput1">Tanggal Lahir<span class="required">&nbsp*</span>&nbsp:</label>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
										<input type="text" name="tanggal_lahir" id="datepicker" placeholder="Tanggal Lahir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Address'" required class="single-input">
									</div>
									<br>
									<br>

									<label for="exampleFormControlInput1">Alamat<span class="required">&nbsp*</span>&nbsp:</label>
									<div class="input-group-icon mt-10">
										<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
										<input type="text" name="alamat" placeholder="Alamat" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alamat'" required class="single-input">
									</div>
									<br>
									<br>

									<label for="exampleFormControlInput1">Foto<span class="required">&nbsp*</span>&nbsp:</label>
									<div class="input-group-icon mt-10">
										<input type="file" name="filefoto" class="dropify" data-height="100">
										<p style="font-size: 10px;">Gunakan foto formal 3 X 4 background merah / biru</p>
									</div>
									<br>
									<br>

							</div>
							<div class="col-sm-6">

								<label for="exampleFormControlInput1">Asal Sekolah / Perguruan Tinggi<span class="required">&nbsp*</span>&nbsp:</label>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-thumb-tack" aria-hidden="true"></i></div>
									<input type="text" name="asal" placeholder="Asal Sekolah / Perguruan Tinggi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Asal Sekolah / Perguruan Tinggi'" required class="single-input">
								</div>
								<br>
								<br>

								<label for="exampleFormControlInput1">Tahun Lulus Pendidikan Terakhir<span class="required">&nbsp*</span>&nbsp:</label>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-calendar" aria-hidden="true"></i></div>
									<input type="text" name="tahun_lulus" id="yearpicker" placeholder="Tahun Lulus Pendidikan Terakhir" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Tahun Lulus Pendidikan Terakhir'" required class="single-input">
								</div>
								<br>
								<br>

								<label for="exampleFormControlInput1">Email<span class="required">&nbsp*</span>&nbsp:</label>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
									<input type="email" name="email" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required class="single-input">
								</div>
								<br>
								<br>

								<label for="exampleFormControlInput1">No HP<span class="required">&nbsp*</span>&nbsp:</label>
								<div class="input-group-icon mt-10">
									<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
									<input type="text" name="no_hp" placeholder="No HP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No HP'" required class="single-input">
								</div>
								<br>
								<br>

								<label for="exampleFormControlInput1">Alasan Ikut<span class="required">&nbsp*</span>&nbsp:</label>
								<div class="mt-10">
										<textarea class="single-textarea" name="alasan" placeholder="Alasan" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Alasan'" required=""></textarea>
									</div>
								<br>
								<br>

							</div>
						</div>
					</div>
					<hr class="batas_garis">
						<div style="text-align: center; margin-top: 30px; margin-bottom: 30px;">
						<button class="btn btn-primary" type="submit">
							Daftar
							<i class="fa fa-user-plus"></i>
						</button>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</section>

<br>
&nbsp
<br>

	<?php $this->load->view('web/konten_footer') ?>

</body>
</html>

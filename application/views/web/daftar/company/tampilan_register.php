<?php $this->load->view('web/konten_header') ?>
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Daftarkan Dirimu
				</h1>
				<p class="tex-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
		</div>
	</div>
</section>
<!-- Start features Area -->
<section class="features-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="single-feature">
					<h4 align="center">Silahkan isi data ini dengan lengkap untuk mendaftar sebagai member Employer (Perusahaan) </h4>
					<div class="container-fluid">
						<br>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<h5>
									1. Informasi Perusahaan
								</h5>
								<p>silahkan isi data-data dibawah ini sesuai dengan kondisi perusahaan yang di wakili untuk memudahkan kami berkoordinasi dengan Anda</p>
								<hr>
								<form method="POST" action="<?php echo base_url();?>Register_company/sregcompany">
									<div class="form-group-company">
										<label for="exampleFormControlInput1">Nama Perusahaan<span class="required">&nbsp*</span>&nbsp:</label>
										<input type="text" class="form-control" id="Nama_perusahaan" name="Nama_perusahaan" required>
									</div>

									<div class="form-group-company">
										<label for="exampleFormControlSelect1">Jenis Industri<span class="required">&nbsp*</span>&nbsp:</label>
										<select class="form-control" id="exampleFormControlSelect1" name="Jenis_industri" required>
											<option selected="selected">--Pilih indusri--</option>
											<?php
											foreach ($jenis_industri->result() as $row ) {
											?>
											<option value="<?php echo $row->id_industri; ?>" ><?php echo $row->jenis_industri; ?></option>
											<?php } ?>
										</select>
									</div>
									<br>
									<hr>

									<div class="form-group-company">
										<label for="exampleFormControlInput1">Email<span class="required">&nbsp*</span>&nbsp:</label>
										<input type="email" class="form-control" id="Email_perusahaan" name="Email_perusahaan" required>
									</div>

									<div class="form-group-company">
										<label for="exampleFormControlInput1">Website<span class="required">&nbsp*</span>&nbsp:</label>
										<input type="text" class="form-control" id="website" name="website" required>
									</div>

									<div class="form-group-company">
										<label for="exampleFormControlInput1">Nomor Telp Perusahaan<span class="required">*</span>&nbsp:</label>
										<input type="text" class="form-control" id="telp_perusahaan" name="telp_perusahaan" required>
									</div>
									<br>
									<hr>

									<div class="form-group-company">
										<label for="exampleFormControlSelect1">Provinsi Perusahaan<span class="required">&nbsp*</span>&nbsp:</label>
										<select class="form-control" id="provinsi" onchange="loadKabupaten()" name="provinsi" required>
											<option selected="selected">--Pilih provinsi--</option>
											<?php
											foreach ($provinsi->result() as $row ) {
											?>
											<option value="<?php echo $row->id; ?>" ><?php echo $row->nama; ?></option>
											<?php } ?>
										</select>
									</div>
									<p><div id="kabupatenArea"></div></p>

									<div class="form-group-company">
										<label for="exampleFormControlInput1">Alamat Jalan dan No lokasi Perusahaan<span class="required">*</span>&nbsp:</label>
										<textarea class="common-textarea mt-10 form-control" name="alamat" placeholder="Alamat Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
									</div>

									<div class="form-group-company">
										<label for="exampleFormControlInput1">Kode POS<span class="required">*</span>&nbsp:</label>
										<input type="text" class="form-control" id="kode_pos" name="kode_pos" required>
									</div>

							</div>
							<div class="col-sm-6">
								<h5>
									2. Informasi Officer
								</h5>
								<p>Anda akan bertanggung jawab untuk setiap informasi dan transaksi.</p>
								<hr>
								<div class="form-group-company">
									<label for="exampleFormControlInput1">Nama Officer<span class="required">&nbsp*</span>&nbsp:</label>
									<input type="text" class="form-control" id="Nama_officer" name="Nama_officer" required>
								</div>

								<div class="form-group-company">
									<label for="exampleFormControlInput1">Email Officer<span class="required">&nbsp*</span>&nbsp:</label>
									<input type="email" class="form-control" id="Email_officer" name="Email_officer" required>
									<p style="font-size: 10px;">Email Officer digunakan sebagai akun login</p>
								</div>

								<div class="form-group-company">
									<label for="exampleFormControlInput1">No Telp Officer<span class="required">&nbsp*</span>&nbsp:</label>
									<input type="text" class="form-control" id="Telp_officer" name="Telp_officer" required>
								</div>

								<div class="form-group-company">
									<label for="exampleFormControlInput1">Hp Officer<span class="required">&nbsp*</span>&nbsp:</label>
									<input type="text" class="form-control" id="Hp_officer" name="Hp_officer" required>
								</div>

							</div>
						</div>
					</div>
					<hr>
						<div style="text-align: center; margin-top: 30px; margin-bottom: 30px;">
						<button class="btn btn-primary" type="submit">
							Selanjutnya
							<i class="fa fa-arrow-right"></i>
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

			<script type="text/javascript">
					function loadKabupaten()
					{
							var propinsi = $("#provinsi").val();
							$.ajax({
									type:'GET',
									url:"<?php echo base_url(); ?>Register_company/kabupaten",
									data:"id=" + propinsi,
									success: function(html)
									{
										 $("#kabupatenArea").html(html);
									}
							});
					}
			</script>

				</body>
				</html>

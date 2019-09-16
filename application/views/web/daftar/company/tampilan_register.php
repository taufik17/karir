
<?php $this->load->view('web/konten_header') ?>
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Daftarkan Perusahaanmu
				</h1>
				<p class="tex-white">Dengan menjadi employer di icc persuahaan anda dapat menemukan sdm yang berkualitas.</p>
			</div>
		</div>
	</div>
</section>

<section class="section-add-job">
	<div class="container">
		<h4 align="center">Informasi berikut digunakan untuk membuat Akun Login perusahaan Anda</h4>
		<hr>
					<div class="row">
						<div class="col-lg-4 d-flex flex-column mt-20">
							<img src="<?= base_url(); ?>assets/gambar/company/register.jpg" alt="">
						</div>
						<br>
						<div class="col-lg-8">
							<form method="post" action="<?= base_url(); ?>register_company/reg1">
								<div class="row">
									<div class="col-lg-12 form-group">
										<?php echo $this->session->flashdata('info_reg_company');?>
										<div class="input-group-icon mt-20">
											<div class="icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
											<input type="text" name="nama_perusahaan" placeholder="Nama Perusahaan / Instansi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Perusahaan / Instansi'" required="required" class="single-input">
										</div>

										<div class="input-group-icon mt-20">
											<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
											<input type="text" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required="required" class="single-input">
										</div>

										<div class="input-group-icon mt-20">
											<div class="icon"><i class="fa fa-key" aria-hidden="true"></i></div>
											<input type="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required="required" minlength="8" class="single-input">
										</div>

										<div class="input-group-icon mt-20">
											<div class="icon"><i class="fa fa-key" aria-hidden="true"></i></div>
											<input type="password" name="password2" placeholder="Ulang Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ulangi Password'" required="required" minlength="8" class="single-input">
										</div>
									</div>
								</div>
								<button class="genric-btn primary circle arrow" style="float: right; margin-top: 10px;">Selanjutnya <span class="fa  fa-arrow-right"></span></button>

							</form>
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

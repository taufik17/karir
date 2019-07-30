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
					<h4 align="center">Akun Login</h4>
					<div class="step2">
						<br>
							<div class="col-sm-12">
								<p align="center">Informasi berikut ini di gunakan untuk membuat Akun Login perusahaan Anda </p>
								<hr>
								<form method="POST" action="<?php echo base_url();?>Register_company/sregcompany">

									<div class="form-group-company">
										<label for="exampleFormControlInput1">Email<span class="required">&nbsp*</span>&nbsp:</label>
										<input type="email" class="form-control" id="Email_officer" name="Email_officer" value="<?php echo $email; ?>" required>
									</div>

									<div class="form-group-company">
										<label for="exampleFormControlInput1">Password<span class="required">&nbsp*</span>&nbsp:</label>
										<input type="password" class="form-control" id="Password" name="Password" required>
									</div>

									<div class="form-group-company">
										<label for="exampleFormControlInput1">Retype Password<span class="required">&nbsp*</span>&nbsp:</label>
										<input type="password" class="form-control" id="Password2" name="Password2" required>
									</div>
									<p align="center" style="font-size: 12px;">Silakan catat dan simpan Email dan Password ini untuk Login kembali setiap saat.</p>
								</div>

						</div>
						<hr>
						<div style="text-align: center;">
							<button class="btn btn-primary" type="submit">
								<i class="fa fa-user"></i>
								Register
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

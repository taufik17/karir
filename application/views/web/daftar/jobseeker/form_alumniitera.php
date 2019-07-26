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

<section class="features-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="single-feature">
					<h4>&nbsp&nbsp&nbspForm Registrasi</h4>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo base_url() ?>Register">Register</a></li>
							<li class="breadcrumb-item active" aria-current="page">Alumni ITERA</li>
						</ol>
					</nav>

					<div class="form-group-daftar">
						<?php
						$info = $this->session->flashdata('info');
						if(!empty($info))
						{
							echo $info;
						}
						?>
					</div>

					<form method="POST" action="<?php echo base_url();?>Register/sregalumniitera">
						<div class="form-group-daftar">
							<label for="exampleFormControlInput1">NIM<span class="required">*</span>&nbsp:</label>
							<input type="number" class="form-control" id="NIM_jobseeker" name="NIM_jobseeker" required>
						</div>

						<div class="form-group-daftar">
							<label for="exampleFormControlInput1">Nama Lengkap<span class="required">*</span>&nbsp:</label>
							<input type="text" class="form-control" id="Nama_jobseeker" name="Nama_jobseeker" required>
						</div>

						<div class="form-group-daftar">
							<label for="exampleFormControlInput1">Email<span class="required">*</span>&nbsp:</label>
							<input type="email" class="form-control" id="Email_jobseeker" name="Email_jobseeker" required>
						</div>

						<div class="form-group-daftar">
							<label for="exampleFormControlInput1">No Handphone<span class="required">*</span>&nbsp:</label>
							<input type="text" class="form-control" id="nohp_jobseeker" name="nohp_jobseeker" required>
						</div>

						<div class="form-group-daftar">
							<label for="exampleFormControlInput1">Password<span class="required">*</span>&nbsp:</label>
							<input type="password" class="form-control" id="password_jobseeker" name="password_jobseeker" required>
						</div>

						<div class="form-group-daftar">
							<label for="exampleFormControlInput1">Ulangi Password<span class="required">*</span>&nbsp:</label>
							<input type="password" class="form-control" id="ulangi_password" name="ulangi_password" required>
						</div>

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

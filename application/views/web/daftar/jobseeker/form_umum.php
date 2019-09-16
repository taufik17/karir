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


<section class="section-add-job">
	<div class="container">
		<h4>&nbsp&nbsp&nbspForm Registrasi</h4>
		<br>
		<nav aria-label="breadcrumb">
			<ol class="breadcrumb">
				<li class="breadcrumb-item"><a href="<?php echo base_url() ?>Register">Register</a></li>
				<li class="breadcrumb-item active" aria-current="page">Umum</li>
			</ol>
		</nav>
		<hr>
		<div class="row">
			<div class="col-lg-4 d-flex flex-column mt-20">
				<img src="<?= base_url(); ?>assets/gambar/company/register.jpg" alt="">
			</div>
			<br>
			<div class="col-lg-8">
				<form method="post" action="<?= base_url(); ?>register/savereg_umum">
					<div class="row">
						<div class="col-lg-12 form-group">
							<?php echo $this->session->flashdata('info_reg_umum');?>

							<div class="input-group-icon mt-20">
								<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
								<input type="text" name="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required="required" class="single-input">
							</div>

							<div class="input-group-icon mt-20">
								<div class="icon"><i class="fa fa-briefcase" aria-hidden="true"></i></div>
								<input type="text" name="Nama_jobseeker" placeholder="Nama Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Nama Lengkap'" required="required" class="single-input">
							</div>

							<div class="input-group-icon mt-20">
								<div class="icon"><i class="fa fa-envelope" aria-hidden="true"></i></div>
								<input type="email" name="Email_jobseeker" placeholder="Email" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Email'" required="required" class="single-input">
							</div>

							<div class="input-group-icon mt-20">
								<div class="icon"><i class="fa fa-university" aria-hidden="true"></i></div>
								<input type="text" name="perguruan_tinggi" placeholder="Perguruan Tinggi" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Perguruan Tinggi'" required="required" class="single-input">
							</div>

							<div class="input-group-icon mt-20">
								<div class="icon"><i class="fa fa-phone" aria-hidden="true"></i></div>
								<input type="text" name="nohp_jobseeker" placeholder="No HP" onfocus="this.placeholder = ''" onblur="this.placeholder = 'No HP'" required="required" class="single-input">
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

<!-- <section class="features-area">
	<div class="container">
		<div class="row">

			<div class="col-lg-12 col-md-12">
				<div class="single-feature">
					<h4>&nbsp&nbsp&nbspForm Registrasi</h4>
					<nav aria-label="breadcrumb">
						<ol class="breadcrumb">
							<li class="breadcrumb-item"><a href="<?php echo base_url() ?>Register">Register</a></li>
							<li class="breadcrumb-item active" aria-current="page">Umum</li>
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

					<div class="conatiner-fluid">
					</div>
					<form method="POST" action="<?php echo base_url();?>Register/sregnonalumniitera">

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
</section> -->

<br>
&nbsp
<br>

<?php $this->load->view('web/konten_footer') ?>

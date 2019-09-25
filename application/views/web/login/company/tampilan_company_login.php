<?php $this->load->view('web/konten_header') ?>

<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Company Login
				</h1>
				<p class="tex-white">Mencari pekerja untuk Indonesia.</p>
			</div>
		</div>
	</div>
</section>

<section class="features-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="single-feature">
					<div class="footer_daftar">
						<form action="<?= base_url() ?>login/login_company" method="post">
							<div class="form-group-login">
								<input id="username" name="emailcompany" type="email" placeholder="Email company" class="form-control" required>
							</div>
							<div class="form-group-login">
								<input id="password" name="passwordcompany" type="password" placeholder="Password" class="form-control" required>
							</div>
							<p class="text-center">
								<button type="submit" class="btn btn-primary py-1 px-3">&nbsp<span>Masuk</span></button>
							</p>
							<hr>
							<p class="text-center text-muted">
								<a href="<?= base_url() ?>register_company">
									<strong style="color:green;">Daftar</strong></a> |<a href="<?php echo base_url() ?>lupapas">
										<strong style="color:red;">Lupa Sandi</strong></a> </p>
									</form>
								</div>

							</div>
						</div>
					</div>
				</div>
			</section>

			<br>
			&nbsp
			<br>


			<?php $this->load->view('web/konten_footer') ?>

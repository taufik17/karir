<?php $this->load->view('web/konten_header') ?>

<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Daftar Sebagai
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

						<div class="container">
							<br>
							&nbsp
							<br>
							<div class="row">
								<div class="col-lg-6 col-md-2">
									<a href="<?= base_url('register_company') ?>">
										<div class="single-service" align="center">
											<i class="fa fa-building fa-4x"></i>
											<br>
											&nbsp
											<br>
											<h3 align="center">Company</h3>
										</div>
									</a>
								</div>

								<div class="col-lg-6 col-md-2">
									<a href="<?= base_url('register') ?>">
										<div class="single-service" align="center">
											<i class="fa fa-users fa-4x"></i>
											<br>
											&nbsp
											<br>
											<h3 align="center">Jobseeker</h3>
										</div>
									</a>
								</div>

							</div>
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

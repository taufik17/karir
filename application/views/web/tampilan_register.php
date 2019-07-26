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
					<ul class="nav nav-pills nav-justified" id="myTab" role="tablist">

						<li class="nav-item">
							<a class="nav-link pilbg" id="alumniitera-tab" data-toggle="tab" href="#alumniitera" role="tab" aria-controls="alumniitera" aria-selected="false">Alumni ITERA</a>
						</li>
						<li class="nav-item">
							<a class="nav-link active pilbg" id="alumniselainitera-tab" data-toggle="tab" href="#alumniselainitera" role="tab" aria-controls="alumniselainitera" aria-selected="false">Alumni Selain ITERA</a>
						</li>
						<li class="nav-item">
							<a class="nav-link pilbg" id="mhs-tab" data-toggle="tab" href="#mhs" role="tab" aria-controls="mhs" aria-selected="false">Mahasiswa</a>
						</li>
					</ul>

					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade" id="alumniitera" role="tabpanel" aria-labelledby="alumniitera-tab">
							<p class="intro">Kenali program seru kami untuk para member jobseeker ICC</p>
							<br>
							<?php $this->load->view('web/daftar/jobseeker/konten_daftar_alumni') ?>
						</div>
						<div class="tab-pane fade show active" id="alumniselainitera" role="tabpanel" aria-labelledby="alumniselainitera-tab">
							<p class="intro">Kenali program seru kami untuk para member jobseeker ICC</p>
							<br>
							<?php $this->load->view('web/daftar/jobseeker/konten_daftar_alumni_selainitera') ?>
						</div>
						<div class="tab-pane fade" id="mhs" role="tabpanel" aria-labelledby="mhs-tab">
							<p class="intro">Kenali program seru kami untuk para member mahasiswa ICC</p>
							<br>
							<?php $this->load->view('web/daftar/jobseeker/konten_daftar_mhs') ?>
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

				</body>
				</html>

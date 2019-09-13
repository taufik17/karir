<?php $this->load->view('web/konten_header') ?>
<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Daftarkan Dirimu
				</h1>
				<p class="tex-white">Dan mulailah menyusun rencana karir terbaikmu</p>
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
							<a class="nav-link active pilbg" id="umum-tab" data-toggle="tab" href="#umum" role="tab" aria-controls="umum" aria-selected="false">Umum / Alumni</a>
						</li>
						<li class="nav-item">
							<a class="nav-link pilbg" id="mhs-tab" data-toggle="tab" href="#mhs" role="tab" aria-controls="mhs" aria-selected="false">Mahasiswa</a>
						</li>
					</ul>

					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="umum" role="tabpanel" aria-labelledby="umum-tab">
							<p class="intro">Kenali program seru kami untuk para member jobseeker ICC</p>
							<br>
							<?php $this->load->view('web/daftar/jobseeker/konten_daftar_umum') ?>
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

<?php $this->load->view('web/konten_header') ?>

<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-12">
				<h1 class="text-white">
					Start Your Career
				</h1>
				<form action="search.html" class="serach-form-area">
					<div class="row justify-content-center form-wrap">
						<div class="col-lg-4 form-cols">
							<input type="text" class="form-control" name="search" placeholder="ex: job, company, etc.">
						</div>
						<div class="col-lg-3 form-cols">
							<div class="default-select" id="default-selects">
								<select>
									<option selected="selected">select area</option>
									<?php
									foreach ($provinsi->result() as $row ) {
										?>
										<option value="<?php echo $row->id; ?>" ><?php echo $row->nama; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-lg-3 form-cols">
							<div class="default-select" id="default-selects2">
								<select>
									<option selected="selected">All Category</option>
									<?php
									foreach ($jenis_industri->result() as $row ) {
										?>
										<option value="<?php echo $row->id_industri; ?>" ><?php echo $row->jenis_industri; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-lg-2 form-cols">
							<button type="button" class="btn btn-info">
								<span class="lnr lnr-magnifier"></span> Search
							</button>
						</div>
					</div>
				</form>
				<p class="text-white"> <span>Search by tags:</span> Tecnology, Business, Consulting, IT Company, Design, Development</p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start features Area -->
<section class="features-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="single-feature">
					<h4 align="center">Lowongan</h4>
					<ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Terbaru</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Terpopuler</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="container">
								<div class="demo1" data-simplebar>
									<div id="content">
										<div id="load_data"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							isi terpopuler
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-feature">
					<h4 align="center">Career News</h4>
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing.
					</p>
				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="single-feature">
					<h4 align="center">Kalender Event</h4>
					<div class="info-box">
            <span class="info-box-icon bg-aqua">
            	09
            </span>

            <div class="info-box-content" text-align="center">
              <h3 align="center">Aug 2019</h3>
            </div>
            <!-- /.info-box-content -->
          </div>
				</div>
			</div>
		</div>
	</div>
</section>


<!-- Start post Area -->
<section class="post-area section-gap">
	<div class="container">
		<div class="row justify-content-center d-flex">
			<div class="col-lg-8 post-list">
				<ul class="cat-list">
					<li><a href="#">Full Time</a></li>
					<li><a href="#">Intern</a></li>
					<li><a href="#">part Time</a></li>
				</ul>


				<div id="accordion">

					<div class="card">
						<div class="card-header" id="heading-1">
							<div class="single-post row">
								<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
									<a class="comp-logo col-md-2 pl-0 pr-3" href="/member/company/view/322">
										<img class="box-shadow p-1" src="https://ecc.co.id/public/employer_logo/33515/small_1549506885L O G O QUICK2.png" alt="CV Karya Hidup Sentosa (Quick)468">
									</a>
									<div>
										<h5 class="m-0"><a href="/member/company/view/322" class="txt-dark-blue"><strong>CV Karya Hidup Sentosa (Quick)</strong></a></h5>
										<span class="d-block txt-dark-blue">Yogyakarta, Indonesia</span>
										<p class="mb-1 mt-1">CV KARYA HIDUP SENTOSA adalah pabrik alat / mesin pertanian yang didirikan pada tahun 1953, di Yogyakarta oleh Bapak dan Ibu Kirjo Hadi Suseno. Pada tahun 1972 CV KHS mendapatkan p ...</p>
										<span class="txt-gray">Tayang sejak: Hari ini</span>
									</div>
								</div>
								<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
									<div class="w-100">
										<h1>5</h1>
										<span>Lowongan</span>
											<h5 class="mb-0">
												<a data-toggle="collapse" class="genric-btn danger circle arrow tiny" href="#collapse-1" aria-expanded="true" aria-controls="collapse-1">
												</a>
											</h5>
									</div>
								</div>
							</div>
						</div>
						<div id="collapse-1" class="collapse show" data-parent="#accordion" aria-labelledby="heading-1">
							<div class="card-body">
								text 1
							</div>
						</div>
					</div>
					<br>

					<div class="card">
						<div class="card-header" id="heading-2">
							<div class="single-post row">
								<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
									<a class="comp-logo col-md-2 pl-0 pr-3" href="/member/company/view/322">
										<img class="box-shadow p-1" src="https://ecc.co.id/public/employer_logo/33515/small_1549506885L O G O QUICK2.png" alt="CV Karya Hidup Sentosa (Quick)468">
									</a>
									<div>
										<h5 class="m-0"><a href="/member/company/view/322" class="txt-dark-blue"><strong>CV Karya Hidup Sentosa (Quick)</strong></a></h5>
										<span class="d-block txt-dark-blue">Yogyakarta, Indonesia</span>
										<p class="mb-1 mt-1">CV KARYA HIDUP SENTOSA adalah pabrik alat / mesin pertanian yang didirikan pada tahun 1953, di Yogyakarta oleh Bapak dan Ibu Kirjo Hadi Suseno. Pada tahun 1972 CV KHS mendapatkan p ...</p>
										<span class="txt-gray">Tayang sejak: Hari ini</span>
									</div>
								</div>
								<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
									<div class="w-100">
										<h1>5</h1>
										<span>Lowongan</span>
										<h5 class="mb-0">
											<a class="collapsed genric-btn danger circle arrow tiny" data-toggle="collapse" href="#collapse-2" aria-expanded="false" aria-controls="collapse-2">
											</a>
										</h5>
									</div>
								</div>
							</div>
						</div>
						<div id="collapse-2" class="collapse" data-parent="#accordion" aria-labelledby="heading-2">
							<div class="card-body">
								Text 2
							</div>
						</div>
					</div>
					<br>

					<div class="card">
						<div class="card-header" id="heading-3">
							<div class="single-post row">
								<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
									<a class="comp-logo col-md-2 pl-0 pr-3" href="/member/company/view/322">
										<img class="box-shadow p-1" src="https://ecc.co.id/public/employer_logo/33515/small_1549506885L O G O QUICK2.png" alt="CV Karya Hidup Sentosa (Quick)468">
									</a>
									<div>
										<h5 class="m-0"><a href="/member/company/view/322" class="txt-dark-blue"><strong>CV Karya Hidup Sentosa (Quick)</strong></a></h5>
										<span class="d-block txt-dark-blue">Yogyakarta, Indonesia</span>
										<p class="mb-1 mt-1">CV KARYA HIDUP SENTOSA adalah pabrik alat / mesin pertanian yang didirikan pada tahun 1953, di Yogyakarta oleh Bapak dan Ibu Kirjo Hadi Suseno. Pada tahun 1972 CV KHS mendapatkan p ...</p>
										<span class="txt-gray">Tayang sejak: Hari ini</span>
									</div>
								</div>
								<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
									<div class="w-100">
										<h1>5</h1>
										<span>Lowongan</span>
										<h5 class="mb-0">
											<a class="collapsed genric-btn danger circle arrow tiny" role="button" data-toggle="collapse" href="#collapse-3" aria-expanded="false" aria-controls="collapse-3">
											</a>
										</h5>
									</div>
								</div>
							</div>
						</div>
						<div id="collapse-3" class="collapse" data-parent="#accordion" aria-labelledby="heading-3">
							<div class="card-body">
								Text 3
							</div>
						</div>
					</div>
				</div>


				<!-- disini pagination -->
				<h5>pagination</h5>
				<!-- end pagination -->

			</div>
			<div class="col-lg-4 sidebar">

				<div class="single-slidebar">
					<h4>Jobs by Category</h4>
					<ul id="load_data_category" class="cat-list">
					</ul>
					<a href="#" class="genric-btn default arrow">Selengkapnya<span class="lnr lnr-arrow-right"></span></a>
				</div>

				<div class="single-slidebar">
					<h4>Carrer Advice Blog</h4>
					<div class="blog-list">
						<div class="single-blog " style="background:#000 url(assets/img/blog1.jpg);">
							<a href="single.html"><h4>Home Audio Recording <br>
								For Everyone</h4></a>
								<div class="meta justify-content-between d-flex">
									<p>
										02 Hours ago
									</p>
									<p>
										<span class="lnr lnr-heart"></span>
										06
										<span class="lnr lnr-bubble"></span>
										02
									</p>
								</div>
							</div>
							<div class="single-blog " style="background:#000 url(assets/img/blog2.jpg);">
								<a href="single.html"><h4>Home Audio Recording <br>
									For Everyone</h4></a>
									<div class="meta justify-content-between d-flex">
										<p>
											02 Hours ago
										</p>
										<p>
											<span class="lnr lnr-heart"></span>
											06
											<span class="lnr lnr-bubble"></span>
											02
										</p>
									</div>
								</div>
								<div class="single-blog " style="background:#000 url(assets/img/blog1.jpg);">
									<a href="single.html"><h4>Home Audio Recording <br>
										For Everyone</h4></a>
										<div class="meta justify-content-between d-flex">
											<p>
												02 Hours ago
											</p>
											<p>
												<span class="lnr lnr-heart"></span>
												06
												<span class="lnr lnr-bubble"></span>
												02
											</p>
										</div>
									</div>
								</div>
							</div>

							<div class="single-slidebar">
								<h4>Jobs by Location</h4>
								<ul class="cat-list">
									<li><a class="justify-content-between d-flex" href="category.html"><p>New York</p><span>37</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Park Montana</p><span>57</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Atlanta</p><span>33</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Arizona</p><span>36</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Florida</p><span>47</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Rocky Beach</p><span>27</span></a></li>
									<li><a class="justify-content-between d-flex" href="category.html"><p>Chicago</p><span>17</span></a></li>
								</ul>
							</div>

						</div>
					</div>
				</div>
			</section>
			<!-- End post Area -->

			<section class="callto-action-area section-gap" id="join">
				<div class="container">
					<div class="row d-flex justify-content-center">
						<div class="menu-content col-lg-9">
							<div class="title text-center">
								<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
								<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
								<a class="primary-btn" href="<?= base_url() ?>register" target="_blank">I am a Jobseeker</a>
								<a class="primary-btn" href="<?= base_url() ?>register_company" target="_blank">Company</a>
							</div>
						</div>
					</div>
				</div>
			</section>

			<?php $this->load->view('web/konten_footer') ?>

		</body>
		</html>

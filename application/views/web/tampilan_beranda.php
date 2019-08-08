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
					<p>
						Lorem ipsum dolor sit amet, consectetur adipisicing.
					</p>
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
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<img src="<?php echo base_url() ?>assets/img/post.png" alt="">
						<ul class="tags">
							<li>
								<a href="#">Art</a>
							</li>
							<li>
								<a href="#">Media</a>
							</li>
							<li>
								<a href="#">Design</a>
							</li>
						</ul>
					</div>
					<div class="details">
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="single.html"><h4>Creative Art Designer</h4></a>
								<h6>Premium Labels Limited</h6>
							</div>
							<ul class="btns">
								<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
						</p>
						<h5>Job Nature: Full time</h5>
						<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
						<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
					</div>
				</div>
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<img src="<?php echo base_url() ?>assets/img/post.png" alt="">
						<ul class="tags">
							<li>
								<a href="#">Art</a>
							</li>
							<li>
								<a href="#">Media</a>
							</li>
							<li>
								<a href="#">Design</a>
							</li>
						</ul>
					</div>
					<div class="details">
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="single.html"><h4>Creative Art Designer</h4></a>
								<h6>Premium Labels Limited</h6>
							</div>
							<ul class="btns">
								<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
						</p>
						<h5>Job Nature: Full time</h5>
						<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
						<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
					</div>
				</div>
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<img src="<?php echo base_url() ?>assets/img/post.png" alt="">
						<ul class="tags">
							<li>
								<a href="#">Art</a>
							</li>
							<li>
								<a href="#">Media</a>
							</li>
							<li>
								<a href="#">Design</a>
							</li>
						</ul>
					</div>
					<div class="details">
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="single.html"><h4>Creative Art Designer</h4></a>
								<h6>Premium Labels Limited</h6>
							</div>
							<ul class="btns">
								<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
						</p>
						<h5>Job Nature: Full time</h5>
						<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
						<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
					</div>
				</div>
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<img src="<?php echo base_url() ?>assets/img/post.png" alt="">
						<ul class="tags">
							<li>
								<a href="#">Art</a>
							</li>
							<li>
								<a href="#">Media</a>
							</li>
							<li>
								<a href="#">Design</a>
							</li>
						</ul>
					</div>
					<div class="details">
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="single.html"><h4>Creative Art Designer</h4></a>
								<h6>Premium Labels Limited</h6>
							</div>
							<ul class="btns">
								<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
						</p>
						<h5>Job Nature: Full time</h5>
						<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
						<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
					</div>
				</div>
				<div class="single-post d-flex flex-row">
					<div class="thumb">
						<img src="<?php echo base_url() ?>assets/img/post.png" alt="">
						<ul class="tags">
							<li>
								<a href="#">Art</a>
							</li>
							<li>
								<a href="#">Media</a>
							</li>
							<li>
								<a href="#">Design</a>
							</li>
						</ul>
					</div>
					<div class="details">
						<div class="title d-flex flex-row justify-content-between">
							<div class="titles">
								<a href="single.html"><h4>Creative Art Designer</h4></a>
								<h6>Premium Labels Limited</h6>
							</div>
							<ul class="btns">
								<li><a href="#"><span class="lnr lnr-heart"></span></a></li>
								<li><a href="#">Apply</a></li>
							</ul>
						</div>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
						</p>
						<h5>Job Nature: Full time</h5>
						<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
						<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
					</div>
				</div>

				<a class="text-uppercase loadmore-btn mx-auto d-block" href="category.html">Load More job Posts</a>

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

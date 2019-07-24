<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/gambar/favicon.png">
	<meta charset="UTF-8">
	<title>ITERA | Career Center</title>
	<link href="<?php echo base_url(); ?>assets/css/customfont.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">

	<script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/vendor/bootstrap.min.js"></script>

</head>

<body>
	<div class="loader"></div>
	<header id="header" id="home">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<ul class="nav-menu">
						<li class="menu-active"><a href="<?php echo base_url() ?>">Home</a></li>
						<li><a href="#">CAREER INFORMATION</a></li>
						<li><a href="#">COMPANY</a></li>
						<li><a href="#">JOBSEEKER & STUDENT</a></li>
						<li><a href="#">EVENT</a></li>
						<li><a href="#">FAQ</a></li>
						<li><a class="ticker-btn" href="#">Signup</a></li>
						<li>
							<a href="" class="ticker-btn" data-toggle="modal" data-target="#login-modal">Login</a>
						</li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>

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
										<option value="1">Select area</option>
										<option value="2">Dhaka</option>
										<option value="3">Rajshahi</option>
										<option value="4">Barishal</option>
										<option value="5">Noakhali</option>
									</select>
								</div>
							</div>
							<div class="col-lg-3 form-cols">
								<div class="default-select" id="default-selects2">
									<select>
										<option value="1">All Category</option>
										<option value="2">Medical</option>
										<option value="3">Technology</option>
										<option value="4">Goverment</option>
										<option value="5">Development</option>
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
						<h4>Lowongan</h4>

						<ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
							<li class="nav-item">
								<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Terbaru</a>
							</li>
							<li class="nav-item">
								<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Terpopuler</a>
							</li>
						</ul>
						<div class="tab-content" id="myTabContent">
							<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">profil Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
							<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">contac Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</div>
						</div>



					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-feature">
						<h4>Career News</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing.
						</p>
					</div>
				</div>
				<div class="col-lg-3 col-md-6">
					<div class="single-feature">
						<h4>Kalender Event</h4>
						<p>
							Lorem ipsum dolor sit amet, consectetur adipisicing.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End features Area -->

	<!-- Start popular-post Area -->
	<section class="popular-post-area pt-100">
		<div class="container">
			<div class="row align-items-center">
				<div class="active-popular-post-carusel">
					<div class="single-popular-post d-flex flex-row">
						<div class="thumb">
							<img class="img-fluid" src="<?php echo base_url() ?>assets/img/p1.png" alt="">
							<a class="btns text-uppercase" href="#">view job post</a>
						</div>
						<div class="details">
							<a href="#"><h4>Creative Designer</h4></a>
							<h6>Los Angeles</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
							</p>
						</div>
					</div>
					<div class="single-popular-post d-flex flex-row">
						<div class="thumb">
							<img src="<?php echo base_url() ?>assets/img/p2.png" alt="">
							<a class="btns text-uppercase" href="#">view job post</a>
						</div>
						<div class="details">
							<a href="#"><h4>Creative Designer</h4></a>
							<h6>Los Angeles</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
							</p>
						</div>
					</div>
					<div class="single-popular-post d-flex flex-row">
						<div class="thumb">
							<img src="<?php echo base_url() ?>assets/img/p1.png" alt="">
							<a class="btns text-uppercase" href="#">view job post</a>
						</div>
						<div class="details">
							<a href="#"><h4>Creative Designer</h4></a>
							<h6>Los Angeles</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
							</p>
						</div>
					</div>
					<div class="single-popular-post d-flex flex-row">
						<div class="thumb">
							<img src="<?php echo base_url() ?>assets/img/p2.png" alt="">
							<a class="btns text-uppercase" href="#">view job post</a>
						</div>
						<div class="details">
							<a href="#"><h4>Creative Designer</h4></a>
							<h6>Los Angeles</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
							</p>
						</div>
					</div>
					<div class="single-popular-post d-flex flex-row">
						<div class="thumb">
							<img src="<?php echo base_url() ?>assets/img/p1.png" alt="">
							<a class="btns text-uppercase" href="#">view job post</a>
						</div>
						<div class="details">
							<a href="#"><h4>Creative Designer</h4></a>
							<h6>Los Angeles</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
							</p>
						</div>
					</div>
					<div class="single-popular-post d-flex flex-row">
						<div class="thumb">
							<img src="<?php echo base_url() ?>assets/img/p2.png" alt="">
							<a class="btns text-uppercase" href="#">view job post</a>
						</div>
						<div class="details">
							<a href="#"><h4>Creative Designer</h4></a>
							<h6>Los Angeles</h6>
							<p>
								Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam quis.
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End popular-post Area -->

	<!-- Start post Area -->
	<section class="post-area section-gap">
		<div class="container">
			<div class="row justify-content-center d-flex">
				<div class="col-lg-8 post-list">
					<ul class="cat-list">
						<li><a href="#">Recent</a></li>
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

					<div class="single-slidebar">
						<h4>Top rated job posts</h4>
						<div class="active-relatedjob-carusel">
							<div class="single-rated">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/img/r1.jpg" alt="">
								<a href="single.html"><h4>Creative Art Designer</h4></a>
								<h6>Premium Labels Limited</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
								</p>
								<h5>Job Nature: Full time</h5>
								<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
								<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
								<a href="#" class="btns text-uppercase">Apply job</a>
							</div>
							<div class="single-rated">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/img/r1.jpg" alt="">
								<a href="single.html"><h4>Creative Art Designer</h4></a>
								<h6>Premium Labels Limited</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
								</p>
								<h5>Job Nature: Full time</h5>
								<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
								<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
								<a href="#" class="btns text-uppercase">Apply job</a>
							</div>
							<div class="single-rated">
								<img class="img-fluid" src="<?php echo base_url() ?>assets/img/r1.jpg" alt="">
								<a href="single.html"><h4>Creative Art Designer</h4></a>
								<h6>Premium Labels Limited</h6>
								<p>
									Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod temporinc ididunt ut dolore magna aliqua.
								</p>
								<h5>Job Nature: Full time</h5>
								<p class="address"><span class="lnr lnr-map"></span> 56/8, Panthapath Dhanmondi Dhaka</p>
								<p class="address"><span class="lnr lnr-database"></span> 15k - 25k</p>
								<a href="#" class="btns text-uppercase">Apply job</a>
							</div>
						</div>
					</div>

					<div class="single-slidebar">
						<h4>Jobs by Category</h4>
						<ul class="cat-list">
							<li><a class="justify-content-between d-flex" href="category.html"><p>Technology</p><span>37</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Media & News</p><span>57</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Goverment</p><span>33</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Medical</p><span>36</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Restaurants</p><span>47</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Developer</p><span>27</span></a></li>
							<li><a class="justify-content-between d-flex" href="category.html"><p>Accounting</p><span>17</span></a></li>
						</ul>
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

							</div>
						</div>
					</div>
				</section>
				<!-- End post Area -->


				<!-- Start callto-action Area -->
				<section class="callto-action-area section-gap" id="join">
					<div class="container">
						<div class="row d-flex justify-content-center">
							<div class="menu-content col-lg-9">
								<div class="title text-center">
									<h1 class="mb-10 text-white">Join us today without any hesitation</h1>
									<p class="text-white">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore  et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation.</p>
									<a class="primary-btn" href="#">I am a Jobseeker</a>
									<a class="primary-btn" href="#">Company</a>
								</div>
							</div>
						</div>
					</div>
				</section>
				<!-- End calto-action Area -->

				<!-- start footer Area -->
				<footer class="footer-area section-gap">
					<div class="container">
						<div class="row">
							<div class="col-lg-3  col-md-12">
								<div class="single-footer-widget">
									<h6>Contact US</h6>
									<ul class="footer-nav">
										<li>
											<i class="fa fa-map-marker"></i> Institut Teknologi Sumatera
										</li>
									</ul>
								</div>

							</div>
							<div class="col-lg-6  col-md-12">
								<div class="single-footer-widget newsletter">
									<h6>Related Links</h6>
									<a href="https://itera.ac.id/" target="_blank">Institut Teknologi Sumatera</a>
								</div>
							</div>
							<div class="col-lg-3  col-md-12">
								<div class="single-footer-widget mail-chimp">
									<h6 class="mb-20">Social Media</h6>
									<ul class="footer-nav">
										<a href="#"><i class="fa fa-facebook"> ITERA Career Center</i></a>
										<br>
										<br>
										<a href="#"><i class="fa fa-twitter"></i> ITERA Career Center</a>
									</ul>
								</div>
							</div>
						</div>

						<div class="single-footer-widget">
							<br>
							<br>
							<p class="text-white">
								Copyright &copy; <script>document.write(new Date().getFullYear());</script> by <a href="https://tik.itera.ac.id/id/" target="_blank">UPT TIK.</a>
								All rights reserved.
							</p>
						</div>
					</div>
				</footer>

				<!-- modal -->
				<div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="daftar-modalLabel" aria-hidden="true" class="modal fade">
					<div role="document" class="modal-dialog">
						<div class="modal-content">
							<div class="modal-header modaldaftar">
								<h5 id="daftar-modalLabel" class="modal-title" style="color:white;">Login ICC</h5>
								<button type="button" data-dismiss="modal" aria-label="Close" class="close">
									<span aria-hidden="true">×</span>
								</button>
								<br>
							</div>

							<div class="modal-body">
								<ul class="nav nav-pills nav-justified" id="tablogin" role="tablist">
									<li class="nav-item">
										<a class="nav-link active" id="jobseeker-tab" data-toggle="tab" href="#jobseeker" role="tab" aria-controls="jobseeker" aria-selected="false">Jobseeker</a>
									</li>
									<li class="nav-item">
										<a class="nav-link" id="company-tab" data-toggle="tab" href="#company" role="tab" aria-controls="company" aria-selected="false">Company</a>
									</li>
								</ul>
								<?php echo $this->session->flashdata('info');?>
								<div class="tab-content" id="tabloginContent">
									<div class="tab-pane fade show active" id="jobseeker" role="tabpanel" aria-labelledby="jobseeker-tab">
								<form id="logForm">
											<div class="form-group">
												<input id="username" name="emailjobseeker" type="email" placeholder="Email jobseeker" class="form-control" required>
											</div>
											<div class="form-group">
												<input id="password" name="passwordjobseeker" type="password" placeholder="Password" class="form-control" required>
											</div>
									<p class="text-center">
										<button type="submit" class="btn btn-primary py-1 px-3">&nbsp<span id="logText"></span></button>
									</p>
									<hr>
									<p class="text-center text-muted">
										<a href="http://localhost/pariwisata/user/daftar">
											<strong style="color:green;">Daftar</strong></a> |<a href="<?php echo base_url() ?>lupapas">
												<strong style="color:red;">Lupa Sandi</strong></a> </p>

												<div id="responseDiv" class="alert text-center" style="margin-left:20px; margin-right:20px;  display:none;">
													<button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
													<span id="message"></span>
												</div>

											</form>
											</div>
											<div class="tab-pane fade" id="company" role="tabpanel" aria-labelledby="company-tab">
										<form id="logForm2">
													<div class="form-group">
														<input id="username" name="emailcompany" type="email" placeholder="Email company" class="form-control" required>
													</div>
													<div class="form-group">
														<input id="password" name="passwordcompany" type="password" placeholder="Password" class="form-control" required>
													</div>
											<p class="text-center">
												<button type="submit" class="btn btn-primary py-1 px-3">&nbsp<span id="logText2"></span></button>
											</p>
											<hr>
											<p class="text-center text-muted">
												<a href="http://localhost/pariwisata/user/daftar">
													<strong style="color:green;">Daftar</strong></a> |<a href="<?php echo base_url() ?>lupapas">
														<strong style="color:red;">Lupa Sandi</strong></a> </p>

														<div id="responseDiv2" class="alert text-center" style="margin-left:20px; margin-right:20px;  display:none;">
															<button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
															<span id="message2"></span>
														</div>

													</form>
													</div>
											</div>
							</div>
									</div>
								</div>

						</div>
						<!-- end modal -->
						<!-- End footer Area -->

						<script type="text/javascript">
						$(document).ready(function(){
							$('#logText').html('<i class="fa fa-sign-in"></i>&nbspMasuk');
							$('#logForm').submit(function(e){
								e.preventDefault();
								$('#logText').html('<img src="http://localhost/karir/assets/gambar/login.gif" width="30" height="30">Proses Login...');
								var url = '<?php echo base_url(); ?>';
								var user = $('#logForm').serialize();
								var login = function(){
									$.ajax({
										type: 'POST',
										url: url + 'login/loginjobseeker',
										dataType: 'json',
										data: user,
										success:function(response){
											$('#message').html(response.message);
											$('#logText').html('<i class="fa fa-sign-in"></i>&nbspMasuk');
											if(response.error){
												$('#responseDiv').removeClass('alert-success').addClass('alert-danger').show();
											}
											else{
												$('#responseDiv').removeClass('alert-danger').addClass('alert-success').show();
												$('#logForm')[0].reset();
												setTimeout(function(){
													location.href = "Login/inijobseeker";
												}, 1000);
											}
										}
									});
								};
								setTimeout(login, 1000);
							});

							$(document).on('click', '#clearMsg', function(){
								$('#responseDiv').hide();
							});
						});
						</script>

						<script type="text/javascript">
						$(document).ready(function(){
							$('#logText2').html('<i class="fa fa-sign-in"></i>&nbspMasuk');
							$('#logForm2').submit(function(e){
								e.preventDefault();
								$('#logText2').html('<img src="http://localhost/karir/assets/gambar/login.gif" width="30" height="30">Proses Login...');
								var url = '<?php echo base_url(); ?>';
								var user = $('#logForm2').serialize();
								var login = function(){
									$.ajax({
										type: 'POST',
										url: url + 'login/logincompany',
										dataType: 'json',
										data: user,
										success:function(response){
											$('#message2').html(response.message);
											$('#logText2').html('<i class="fa fa-sign-in"></i>&nbspMasuk');
											if(response.error){
												$('#responseDiv2').removeClass('alert-success').addClass('alert-danger').show();
											}
											else{
												$('#responseDiv2').removeClass('alert-danger').addClass('alert-success').show();
												$('#logForm2')[0].reset();
												setTimeout(function(){
													location.href = "login/inicompany";
												}, 1000);
											}
										}
									});
								};
								setTimeout(login, 1000);
							});

							$(document).on('click', '#clearMsg', function(){
								$('#responseDiv').hide();
							});
						});
						</script>

						<script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
						<script src="<?php echo base_url() ?>assets/js/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
						<script src="<?php echo base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
						<script type="text/javascript" src="<?php echo base_url() ?>assets/js/customjava.js"></script>
						<script src="<?php echo base_url() ?>assets/js/easing.min.js"></script>
						<script src="<?php echo base_url() ?>assets/js/hoverIntent.js"></script>
						<script src="<?php echo base_url() ?>assets/js/superfish.min.js"></script>
						<script src="<?php echo base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
						<script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
						<script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
						<script src="<?php echo base_url() ?>assets/js/jquery.sticky.js"></script>
						<script src="<?php echo base_url() ?>assets/js/jquery.nice-select.min.js"></script>
						<script src="<?php echo base_url() ?>assets/js/parallax.min.js"></script>
						<script src="<?php echo base_url() ?>assets/js/mail-script.js"></script>
						<script src="<?php echo base_url() ?>assets/js/main.js"></script>
						<script type="text/javascript">
						$(window).load(function() {
							$(".loader").fadeOut("slow");
						});
						</script>

					</body>
					</html>

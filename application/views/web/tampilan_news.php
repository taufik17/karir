<?php
$kode=$this->uri->segment(3);
$title = $this->db->query("SELECT berita_judul FROM tbl_berita WHERE berita_id = $kode");
foreach ($title->result() as $val)
?>
<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/gambar/favicon.png">
	<meta charset="UTF-8">
	<title><?php echo $val->berita_judul; ?></title>
	<link href="<?php echo base_url(); ?>assets/css/customfont.css" rel="stylesheet">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/linearicons.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/font-awesome.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/magnific-popup.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/nice-select.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/animate.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/owl.carousel.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/css/main.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/scroll/simplebar.min.css" />
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
	<link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/skins/_all-skins.min.css">
	<script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
</head>

<body>
	<div class="loader"></div>
	<header id="header" class="bgheader">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<?php $this->load->view('web/menu'); ?>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>


	<!-- Start post Area -->
	<section class="post-area section-gap">
		<div class="container">
			<div class="row justify-content-center d-flex">
				<div class="col-lg-8 post-list blog-post-list">
					<?php
					foreach ($data_news->result() as $row) {
						?>
					<div class="single-post">
						<img class="img-fluid" src="<?= base_url() ?>assets/gambar/news/<?= $row->berita_image; ?>" alt="<?= $row->berita_judul; ?>" width="300" height="300">
							<h1>
								<?= $row->berita_judul; ?>
							</h1>
						<div class="content-wrap">
							<?= $row->berita_isi; ?>
						</div>

						<!-- Start nav Area -->
						<section class="nav-area pt-50 pb-100">
							<div class="container">
								<div class="row justify-content-between">
									<div class="col-sm-6 nav-left justify-content-start d-flex">
										<div class="thumb">
											<img src="img/blog/prev.jpg" alt="">
										</div>
										<div class="post-details">
											<p>Prev Post</p>
											<h4 class="text-uppercase"><a href="#">A Discount Toner</a></h4>
										</div>
									</div>
									<div class="col-sm-6 nav-right justify-content-end d-flex">
										<div class="post-details">
											<p>Prev Post</p>
											<h4 class="text-uppercase"><a href="#">A Discount Toner</a></h4>
										</div>
										<div class="thumb">
											<img src="img/blog/next.jpg" alt="">
										</div>
									</div>
								</div>
							</div>
						</section>

					</div>

					<?php	} ?>

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

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/gambar/favicon.png">
	<meta charset="UTF-8">
	<title><?php echo $title ?></title>
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

	<style type="text/css">
	.mb-0 > a {
		display: block;
		position: relative;
	}
	.mb-0 > a:after {
		content: "\f078"; /* fa-chevron-down */
		font-family: 'FontAwesome';
		position: relative;
		right: 0;
	}
	.mb-0 > a[aria-expanded="true"]:after {
		content: "\f077"; /* fa-chevron-up */
	}

	.fixcari {
		position: fixed;
		width: 20%;
	}

	@media screen and (max-width: 700px) {
		.fixcari {
			width: 100%;
			height: auto;
			position: relative;
		}
		.sidebar a {float: left;}
		div.content {margin-left: 0;}
	}

	@media screen and (max-width: 400px) {
		.fixcari a {
			text-align: center;
			float: none;
		}
	}

	</style>
</head>

<body class="bg-redup">
	<!-- <div class="loader"></div> -->
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


	<section class="service-area section-company" id="service">
		<div class="container">
			<div class="position-relative box-shadow">
				<div class="row box-member m-0" style="background: linear-gradient(to top, rgba(100, 100, 100, 0.7),
				rgba(0, 0, 0, 0)), url(<?= base_url() ?>assets/gambar/company/sampul/sampul_default.png); background-size: cover;" >
				<div class="col-md-8 d-flex text-white align-self-end">
					<div class="align-items-center d-flex">
						<div class="btn-group position-relative">
							<span id="profileid" style="display:none;">1</span>
							<img class="prof-img" src="<?= base_url() ?>assets/gambar/company/profil/default.png" alt="Nama perusahaan" width="85" style="padding-bottom:8px;">
						</div>
					</div>
					<div class="pl-4 profile">
						<h4 class="text-white ml-2 mb-0"><strong>Nama Company</strong></h4>
						<p style="margin-left: 0.6em;">Provinsi</p>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg navbar-light bg-light rounded-bottom">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenuContent" aria-controls="navbarMenuContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse " id="navbarMenuContent">
					<ul class="navbar-nav mr-auto d-flex w-100">
						<li class="nav-item active">
							<a class="nav-link" href="<?= base_url() ?>member">Profil Perusahaan</a>
						</li>
						<li <?= $this->uri->segment(2) == 'cv' ? 'class="nav-item active"' : 'class="nav-item"'?>>
							<a class="nav-link" href="<?= base_url() ?>member/cv">Lowongan</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</section>
<section class="contents container-fluid mt-3" style="transform: none;">
	<div class="container" style="transform: none;">
		<div id="content" class="row" style="transform: none;">
			<div class="col-lg-5 col-md-12" style="transform: none;">
				<div class="sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
					<div class="box-shadow bg-white rounded mb-4">
						<div class="row p-3">
							<div class="col-12">
								<!-- <h4 class="m-0 font-weight-bold">PT. SWEVEL UNIVERSAL MEDIA</h4> -->
								<h4 class="m-0 font-weight-bold">PT. AVO Innovation Technology</h4>
							</div>
						</div>
						<div class="row p-3">
							<div class="col-md-11">
								<h5 class="m-0 font-weight-bold text-muted">Jenis Industri</h5>
								<!-- <p>Information Technology</p> -->
								<p>
									ritel
								</p>
							</div>
						</div>
						<div class="row p-3">
							<div class="col-md-11">
								<h5 class="m-0 font-weight-bold text-muted">Website</h5>
								<!-- <p><a href="https://ecc.co.id" target="_blank">https://ecc.co.id</a></p> -->
								<p><a href="https://www.avoskinbeauty.com" target="_blank">https://www.avoskinbeauty.com</a></p>
							</div>
						</div>
						<div class="row p-3">
							<div class="col-md-11">
								<h5 class="m-0 font-weight-bold text-muted">Alamat</h5>
								<!-- <p>Jl. HOS Cokroaminoto No.73  - Kota Yogyakarta Daerah Istimewa Yogyakarta 0000 Indonesia</p> -->
								<p>Kabupaten Sleman, Daerah Istimewa Yogyakarta</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-12 main-content">
				<div class="news-feed0">
					<div id="posting-0" class="post-content box-shadow bg-white rounded mb-4">
						<div class="comments-box create-post">
							<div class="post-comment d-flex p-3">
								<div class="w-100 comment-area">
									<h3 class="m-0 font-weight-bold text-muted">Tentang Perusahaan</h3>
									<div class="posting-btn d-block mt-2">
										<div class="row p-3">
											<p>
												PT. AVO Innovation Technology has been growth consistently in order to provide natural beauty  product with high corporate solidarity values. Based on three bottom line values such as profit, people and planet, we are focusing on better transformation and development |

												Vision :
												•Being a leader in the beauty industry with a women empowerment mission to build confident and courageous characters |

												Mision :
												• Distribute quality, safe and convenient products
												• Create periodic product innovation with maximum research and development
												• Increase the competence of human resource and organization with high integrity
												• Provide education and implement our high quality service for customer satisfaction |

												Corporate Values :
												1.Passion : Our business is more than just money growth, it's about passion, ambition, and inspiration
												2. Dream : what we dream, we do
												3. Integrity : be great, and real
												4. Togetherness : team work makes the dream works
												5. Winning Mentality : We are here to win, to be number one, and we'll #MAKEITHAPPENS
												6. Striving Excellence : Never do good enough, do great!
												7. Sense Of Belonging : hear, learn, the outcomes, focus on building values, and being different from others
												8. We Are The Brand : we innovate, we educate, and we inspire                                            </p>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>

				<div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
				</div>
				<div class="tab-pane fade" id="article" role="tabpanel" aria-labelledby="article-tab">Content</div>
			</div>
		</div>
	</section>
<?php $this->load->view("web/konten_footer"); ?>
</html>

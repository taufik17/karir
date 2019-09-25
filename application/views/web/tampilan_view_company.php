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
<?php
foreach ($data->result() as $row)
?>

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
				<div class="row box-member m-0" style="background: linear-gradient(to top, rgba(100, 100, 100, 1),
				rgba(0, 0, 0, 0)), url(<?= base_url() ?>assets/gambar/company/sampul/<?= $row->sampul; ?>); background-size: cover;" >
				<div class="col-md-8 d-flex text-white align-self-end">
					<div class="align-items-center d-flex">
						<div class="btn-group position-relative">
							<span id="profileid" style="display:none;">1</span>
							<img class="prof-img" src="<?= base_url() ?>assets/gambar/company/profil/<?= $row->Logo_perusahaan; ?>" alt="<?= $row->Nama_perusahaan; ?>" width="85" style="padding-bottom:8px;">
						</div>
					</div>
					<div class="pl-4 profile">
						<h4 class="text-white ml-2 mb-0"><strong><?= $row->Nama_perusahaan; ?></strong></h4>
						<?php
						$perusahaan = $this->db->query("SELECT nama FROM provinsi WHERE id = $row->id_provinsi");
						$kabkota = $this->db->query("SELECT nama FROM kabupaten WHERE id = $row->id_kabupaten_kota");?>
						<?php
						foreach ($perusahaan->result() as $key);
						foreach ($kabkota->result() as $key2);
						?>
						<p style="margin-left: 0.6em;"> <i class="fa fa-map-marker"></i> <?= $key2->nama; ?>, <?= $key->nama; ?>
					</p>
					</div>
				</div>
			</div>
			<nav class="navbar navbar-expand-lg navbar-light bg-light rounded-bottom">
				<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenuContent" aria-controls="navbarMenuContent" aria-expanded="false" aria-label="Toggle navigation">
					<span class="navbar-toggler-icon"></span>
				</button>
				<div class="collapse navbar-collapse " id="navbarMenuContent">
					<ul class="navbar-nav mr-auto d-flex w-100">
						<li <?= $this->uri->segment(2) == 'view' ? 'class="nav-item active"' : 'class="nav-item"'?>>
							<a class="nav-link" href="<?= base_url() ?>company/view/<?= $row->Id_perusahaan; ?>">Profil Perusahaan</a>
						</li>
						<li <?= $this->uri->segment(2) == 'lowongan' || $this->uri->segment(2) == 'lowongan_tutup' || $this->uri->segment(2) == 'detailjob_buka' || $this->uri->segment(2) == 'detailjob_tutup' ? 'class="nav-item active"' : 'class="nav-item"'?>>
							<a class="nav-link" href="<?= base_url() ?>company/lowongan/<?= $row->Id_perusahaan; ?>">Lowongan</a>
						</li>
					</ul>
				</div>
			</nav>
		</div>
	</div>
</section>

	<?php $this->load->view($konten) ?>
<?php $this->load->view("web/konten_footer"); ?>
</html>

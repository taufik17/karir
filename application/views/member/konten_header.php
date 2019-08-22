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
</head>

<body class="bg-redup">
	<div class="loader"></div>
	<header id="header" class="bgheader">
		<div class="container">
			<div class="row align-items-center justify-content-between d-flex">
				<div id="logo">
					<a href="<?php echo base_url() ?>"><img src="<?php echo base_url() ?>assets/img/logo.png" alt="" title="" /></a>
				</div>
				<nav id="nav-menu-container">
					<?php $this->load->view('member/menu'); ?>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>

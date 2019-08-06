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


	<script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
	<script src="<?php echo base_url() ?>assets/js/vendor/bootstrap.min.js"></script>

	<!-- untuk terbaru dan terpopuler -->
	<style>

	#boxscroll{
		width:100%;
		height:350px;
		overflow:auto; overflow-x:none;
	}

	#container1{
    height: 100%;
    width: 100%;
    border: 1px solid green;
    overflow: hidden;
}

#container2{
    width: 100%;
    height: 99%;
    border: 1px solid blue;
    overflow: auto;
    padding-right: 15px;
}

	@-webkit-keyframes placeHolderShimmer {
		0% {
			background-position: -468px 0;
		}
		100% {
			background-position: 468px 0;
		}
	}

	@keyframes placeHolderShimmer {
		0% {
			background-position: -468px 0;
		}
		100% {
			background-position: 468px 0;
		}
	}

	.content-placeholder {
		display: inline-block;
		-webkit-animation-duration: 1s;
		animation-duration: 1s;
		-webkit-animation-fill-mode: forwards;
		animation-fill-mode: forwards;
		-webkit-animation-iteration-count: infinite;
		animation-iteration-count: infinite;
		-webkit-animation-name: placeHolderShimmer;
		animation-name: placeHolderShimmer;
		-webkit-animation-timing-function: linear;
		animation-timing-function: linear;
		background: #f6f7f8;
		background: -webkit-gradient(linear, left top, right top, color-stop(8%, #eeeeee), color-stop(18%, #dddddd), color-stop(33%, #eeeeee));
		background: -webkit-linear-gradient(left, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
		background: linear-gradient(to right, #eeeeee 8%, #dddddd 18%, #eeeeee 33%);
		-webkit-background-size: 800px 104px;
		background-size: 800px 104px;
		height: inherit;
		position: relative;
	}

	.post_data
	{
		padding:24px;
		border:1px solid #f9f9f9;
		border-radius: 5px;
		margin-bottom: 24px;
		box-shadow: 10px 10px 5px #eeeeee;
	}
	</style>
	<!-- end terbaru dan terpopuler -->

</head>

<body>
	<div class="loader"></div>
	<header id="header">
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

						<li class="menu-has-children"><a class="ticker-btn" style="color:white">Signup&nbsp&nbsp</a>
				            <ul style="display: none;">
								<li><a href="<?php echo base_url() ?>register">JOBSEEKER</a></li>
								<li><a href="<?php echo base_url() ?>register_company">COMPANY</a></li>
				            </ul>
				          </li>
						<li>
							<a href="" class="ticker-btn" data-toggle="modal" data-target="#login-modal">Login</a>
						</li>
					</ul>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>

<!DOCTYPE html>
<html lang="zxx" class="no-js">
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/gambar/favicon.png">
	<meta charset="UTF-8">
	<title><?php echo $title ?></title>
	<link href="<?php echo base_url(); ?>assets/css/customfont.css" rel="stylesheet">
	<link href="<?php echo base_url() ?>assets/mdb/css/mdb.min.css" rel="stylesheet">
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

	<script type="text/javascript">
	$(document).ready(function(){
				$('#modal_warning').modal();
			});
</script>

	<!-- untuk terbaru dan terpopuler -->
	<style>

	.nice-select {
    border-radius: 0px;
}

.nice-select .list {
    border-radius: 0px;
    height: 200px;
    overflow-y: auto;
}

/* Centered text */
.info-box-icon .centered {
  position: absolute;
  top: 70%;
  left: 55%;
  transform: translate(-50%, -50%);
}

.button-center{
	text-align: center;
	vertical-align: middle;
}

	.demo1 {
		width:100%;
		height:350px;
	  max-width: 100%;
	}

	.news {
		width:100%;
		height:394px;
	  max-width: 100%;
	  font-size: 12px;
	}

	.event-box {
		width:100%;
		max-height:250px;
	  max-width: 100%;
	  font-size: 12px;
	}

	.lihat > a {
		display: block;
		position: relative;
		content: "\f06e";  /* fa-eye */
		font-family: 'FontAwesome';
	}

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


	.demo2 {
		width:20%;
		height:350px;
	  max-width: 100%;
	  font-size: 12px;
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
		padding-left:24px;
		padding-right: 24px;
		padding-top: 0px;
		padding-bottom: 0px;
		border:1px solid #f9f9f9;
		border-radius: 5px;
		margin-bottom: 24px;
		box-shadow: 10px 10px 5px #eeeeee;
	}

	/* Back to Top Pure CSS With Delay by igniel.com */
		html {scroll-behavior:smooth;}
		.ignielToTop {width:50px; height:50px; position:fixed; bottom:50px; right: 50px; z-index:99; cursor:pointer; border-radius:100px; transition:all .5s ease; opacity:0; visibility:hidden; animation:ignielDelay .75s 3s forwards; -moz-animation:ignielDelay .75s 3s forwards; -webkit-animation:ignielDelay .75s 3s forwards; -o-animation:ignielDelay .75s 3s forwards; background:#008c5f url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;}
		.ignielToTop:hover {background:#1d2129 url("data:image/svg+xml,%3Csvg viewBox='0 0 24 24' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M7.41,15.41L12,10.83L16.59,15.41L18,14L12,8L6,14L7.41,15.41Z' fill='%23fff'/%3E%3C/svg%3E") no-repeat center center;}
		.ignielToTop:active, .ignielToTop:focus {bottom:100%;}
		@keyframes ignielDelay {
		to {opacity:1; visibility:visible;}
		}
		@-webkit-keyframes ignielDelay {
		to {opacity:1; visibility:visible;}
		}
		@-moz-keyframes ignielDelay {
		to {opacity:1; visibility:visible;}
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
					<?php $this->load->view('web/menu'); ?>
				</nav><!-- #nav-menu-container -->
			</div>
		</div>
	</header>
	<a href="#" class="ignielToTop"></a>
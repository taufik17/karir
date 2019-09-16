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
	  font-size: 12px;
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
		padding-right: 15px;
		padding-top: 0px;
		padding-bottom: 0px;
		border:1px solid #f9f9f9;
		border-radius: 5px;
		margin-bottom: 24px;
		box-shadow: 10px 10px 5px #eeeeee;
	}
	</style>
	<!-- end terbaru dan terpopuler -->

</head>

<body>
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

<!-- Start features Area -->
<section class="section-register-company">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">

					<h4 align="center">Silahkan isi data ini dengan lengkap untuk mendaftar sebagai member Employer (Perusahaan) </h4>
					<div class="container-fluid">
						<br>
						<br>
						<div class="row">
							<div class="col-sm-6">
								<h5>
									1. Informasi Perusahaan
								</h5>
								<p>silahkan isi data-data dibawah ini sesuai dengan kondisi perusahaan yang di wakili untuk memudahkan kami berkoordinasi dengan Anda</p>
								<hr>
								<form method="POST" action="<?php echo base_url();?>Register_company/sregcompany">
									<div class="form-group-company">
										<label for="exampleFormControlInput1">Nama Perusahaan<span class="required">&nbsp*</span>&nbsp:</label>
										<input type="text" class="form-control" id="Nama_perusahaan" name="Nama_perusahaan" value="<?= $nama_perusahaan; ?>" readonly required>
									</div>

									<input type="hidden" name="username" value="<?= $username; ?>">

									<div class="form-group-company">
										<label for="exampleFormControlSelect1">Jenis Industri<span class="required">&nbsp*</span>&nbsp:</label>
										<select class="form-control" id="exampleFormControlSelect1" name="Jenis_industri" required>
											<option selected="selected">--Pilih indusri--</option>
											<?php
											foreach ($jenis_industri->result() as $row ) {
											?>
											<option value="<?php echo $row->id_industri; ?>" ><?php echo $row->jenis_industri; ?></option>
											<?php } ?>
										</select>
									</div>
									<br>
									<hr>

									<div class="form-group-company">
										<label for="exampleFormControlInput1">Email<span class="required">&nbsp*</span>&nbsp:</label>
										<input type="email" class="form-control" id="Email_perusahaan" name="Email_perusahaan" required>
									</div>

									<div class="form-group-company">
										<label for="exampleFormControlInput1">Website<span class="required">&nbsp*</span>&nbsp:</label>
										<input type="text" class="form-control" id="website" name="website" required>
									</div>

									<div class="form-group-company">
										<label for="exampleFormControlInput1">Nomor Telp Perusahaan<span class="required">*</span>&nbsp:</label>
										<input type="text" class="form-control" id="telp_perusahaan" name="telp_perusahaan" required>
									</div>
									<br>
									<hr>

									<div class="form-group-company">
										<label for="exampleFormControlSelect1">Provinsi Perusahaan<span class="required">&nbsp*</span>&nbsp:</label>
										<select class="form-control" id="provinsi" onchange="loadKabupaten()" name="provinsi" required>
											<option selected="selected">--Pilih provinsi--</option>
											<?php
											foreach ($provinsi->result() as $row ) {
											?>
											<option value="<?php echo $row->id; ?>" ><?php echo $row->nama; ?></option>
											<?php } ?>
										</select>
									</div>
									<p><div id="kabupatenArea"></div></p>

									<div class="form-group-company">
										<label for="exampleFormControlInput1">Alamat Jalan dan No lokasi Perusahaan<span class="required">*</span>&nbsp:</label>
										<textarea class="common-textarea mt-10 form-control" name="alamat" placeholder="Alamat Lengkap" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Messege'" required=""></textarea>
									</div>

									<div class="form-group-company">
										<label for="exampleFormControlInput1">Kode POS<span class="required">*</span>&nbsp:</label>
										<input type="text" class="form-control" id="kode_pos" name="kode_pos" required>
									</div>

							</div>
							<div class="col-sm-6">
								<h5>
									2. Informasi Officer
								</h5>
								<p>Anda akan bertanggung jawab untuk setiap informasi dan transaksi.</p>
								<hr>
								<div class="form-group-company">
									<label for="exampleFormControlInput1">Nama Officer<span class="required">&nbsp*</span>&nbsp:</label>
									<input type="text" class="form-control" id="Nama_officer" name="Nama_officer" required>
								</div>

								<div class="form-group-company">
									<label for="exampleFormControlInput1">Email Officer<span class="required">&nbsp*</span>&nbsp:</label>
									<input type="email" class="form-control" id="Email_officer" name="Email_officer" required>
									<p style="font-size: 10px;">Email Officer digunakan sebagai akun login</p>
								</div>

								<div class="form-group-company">
									<label for="exampleFormControlInput1">No Telp Officer<span class="required">&nbsp*</span>&nbsp:</label>
									<input type="text" class="form-control" id="Telp_officer" name="Telp_officer" required>
								</div>

								<div class="form-group-company">
									<label for="exampleFormControlInput1">Hp Officer<span class="required">&nbsp*</span>&nbsp:</label>
									<input type="text" class="form-control" id="Hp_officer" name="Hp_officer" required>
								</div>

							</div>
						</div>
					</div>
					<hr>
						<div style="text-align: center; margin-top: 30px; margin-bottom: 30px;">
						<button class="btn btn-primary" type="submit">
							Simpan
							<i class="fa fa-save"></i>
						</button>
					</div>
				</form>

			</div>
		</div>
	</div>
</section>

<br>
&nbsp
<br>

			<?php $this->load->view('web/konten_footer') ?>

			<script type="text/javascript">
					function loadKabupaten()
					{
							var propinsi = $("#provinsi").val();
							$.ajax({
									type:'GET',
									url:"<?php echo base_url(); ?>Register_company/kabupaten",
									data:"id=" + propinsi,
									success: function(html)
									{
										 $("#kabupatenArea").html(html);
									}
							});
					}
			</script>

				</body>
				</html>

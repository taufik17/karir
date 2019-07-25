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

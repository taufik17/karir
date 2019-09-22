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
				<?php echo $this->session->flashdata('info');?>
				<form id="logForm">

					<div class="container-login">
						<div class="input-group-icon mt-10">
							<div class="icon"><i class="fa fa-user" aria-hidden="true"></i></div>
							<input type="text" name="username" id="username" placeholder="Username" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Username'" required="" class="single-input">
						</div>

						<div class="input-group-icon mt-20">
							<div class="icon"><i class="fa fa-key" aria-hidden="true"></i></div>
							<input type="password" id="password" name="password" placeholder="Password" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Password'" required="" minlength="8" class="single-input">
						</div>
					</div>

					<p class="text-center">
						<button type="submit" class="btn btn-primary py-1 px-3">&nbsp<span id="logText"></span></button>
					</p>
					<hr style="margin:30px;">
					<p class="text-center text-muted">
						<a href="<?= base_url('daftar'); ?>">
							<strong style="color:green;">Daftar</strong></a> |<a href="<?php echo base_url() ?>lupapas">
								<strong style="color:red;">Lupa Sandi</strong></a> </p>
								<div id="responseDiv" class="alert text-center" style="margin-left:20px; margin-right:20px;  display:none;">
									<button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
									<span id="message"></span>
								</div>
							</form>
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
										url: url + 'login/login_user',
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
													location.href = "<?= base_url('beranda'); ?>";
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

						<script src="<?php echo base_url() ?>assets/scroll/simplebar.js"></script>
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
						<script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
						<!-- bootstrap datepicker -->
						<script src="<?php echo base_url().'assets/admin/kalender/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'; ?>"></script>
						<script src="<?php echo base_url() ?>assets/dropify/dropify.min.js"></script>

						<script type="text/javascript">
						$(document).ready(function(){
							$('.dropify').dropify({
								messages: {
									default: 'Drag atau drop untuk memilih file',
									replace: 'Ganti',
									remove:  'Hapus',
									error:   'error'
								}
							});
						});
						</script>

						<script type="text/javascript">
						$(window).load(function() {
							$(".loader").fadeOut("slow");
						});
						</script>

						<script>
						$('#datepicker').datepicker({
							format: "yyyy-mm-dd",
							autoclose: true
						})
						</script>

						<script>
						$("#yearpicker").datepicker({
							format: "yyyy",
							viewMode: "years",
							minViewMode: "years"
						});
						</script>

						<!-- <script>
						jQuery(function(){
						jQuery('#show').click();
					});
				</script> -->


				<script>
				$(document).ready(function(){

					var limit = 5;
					var start = 0;
					var action = 'inactive';

					function lazzy_loader(limit)
					{
						var output = '';
						for(var count=0; count<limit; count++)
						{
							output += '<div class="post_data">';
							output += '<p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p>';
							output += '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
							output += '</div>';
						}
						$('#load_data_message').html(output);
					}

					lazzy_loader(limit);

					function load_data(limit, start)
					{
						$.ajax({
							url:"<?php echo base_url(); ?>beranda/fetch",
							method:"POST",
							data:{limit:limit, start:start},
							cache: false,
							success:function(data)
							{
								if(data == '')
								{
									$('#load_data_message').html('<h3>No More Result Found</h3>');
									action = 'active';
								}
								else
								{
									$('#load_data').append(data);
									$('#load_data_message').html("");
									action = 'inactive';
								}
							}
						})
					}

					if(action == 'inactive')
					{
						action = 'active';
						load_data(limit, start);
					}

					$(window).scroll(function(){
						if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
						{
							lazzy_loader(limit);
							action = 'active';
							start = start + limit;
							setTimeout(function(){
								load_data(limit, start);
							}, 1000);
						}
					});

				});
				</script>

				<script>
				$(document).ready(function(){

					var limit_popular = 5;
					var start_popular = 0;
					var action = 'inactive';

					function lazzy_loader(limit_popular)
					{
						var output = '';
						for(var count=0; count<limit_popular; count++)
						{
							output += '<div class="post_data">';
							output += '<p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p>';
							output += '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
							output += '</div>';
						}
						$('#load_data_message').html(output);
					}

					lazzy_loader(limit_popular);

					function load_data_popular(limit_popular, start_popular)
					{
						$.ajax({
							url:"<?php echo base_url(); ?>beranda/fetch_popular",
							method:"POST",
							data:{limit_popular:limit_popular, start_popular:start_popular},
							cache: false,
							success:function(data)
							{
								if(data == '')
								{
									$('#load_data_message').html('<h3>No More Result Found</h3>');
									action = 'active';
								}
								else
								{
									$('#load_data_popular').append(data);
									$('#load_data_message').html("");
									action = 'inactive';
								}
							}
						})
					}

					if(action == 'inactive')
					{
						action = 'active';
						load_data_popular(limit_popular, start_popular);
					}

					$(window).scroll(function(){
						if($(window).scrollTop() + $(window).height() > $("#load_data").height() && action == 'inactive')
						{
							lazzy_loader(limit_popular);
							action = 'active';
							start_popular = start_popular + limit_popular;
							setTimeout(function(){
								load_data_popular(limit_popular, start_popular);
							}, 1000);
						}
					});

				});
				</script>


				<!-- ini untuk news -->
				<script>
				$(document).ready(function(){

					var limit_news = 5;
					var start_news = 0;
					var action = 'inactive';

					function lazzy_loader(limit_news)
					{
						var output = '';
						for(var count=0; count<limit_news; count++)
						{
							output += '<div class="post_data">';
							output += '<p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p>';
							output += '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
							output += '</div>';
						}
						$('#load_data_message_news').html(output);
					}

					lazzy_loader(limit_news);

					function load_data_news(limit_news, start_news)
					{
						$.ajax({
							url:"<?php echo base_url(); ?>beranda/fetch_news",
							method:"POST",
							data:{limit_news:limit_news, start_news:start_news},
							cache: false,
							success:function(data)
							{
								if(data == '')
								{
									$('#load_data_message_news').html('<h3>No More Result Found</h3>');
									action = 'active';
								}
								else
								{
									$('#load_data_news').append(data);
									$('#load_data_message_news').html("");
									action = 'inactive';
								}
							}
						})
					}

					if(action == 'inactive')
					{
						action = 'active';
						load_data_news(limit_news, start_news);
					}

					$(window).scroll(function(){
						if($(window).scrollTop() + $(window).height() > $("#load_data_news").height() && action == 'inactive')
						{
							lazzy_loader(limit_news);
							action = 'active';
							start_news = start_news + limit_news;
							setTimeout(function(){
								load_data_news(limit_news, start_news);
							}, 1000);
						}
					});

				});
				</script>
				<!-- end news -->

				<!-- scroll category -->
				<script>
				$(document).ready(function(){

					var limit_category = 7;
					var start_category = 0;
					var action = 'inactive';

					function lazzy_loader(limit_category)
					{
						var output = '';
						for(var count=0; count<limit_category; count++)
						{
							output += '<div class="post_data">';
							output += '<p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p>';
							output += '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
							output += '</div>';
						}
						$('#load_data_message_category').html(output);
					}

					lazzy_loader(limit_category);

					function load_data_category(limit_category, start_category)
					{
						$.ajax({
							url:"<?php echo base_url(); ?>beranda/fetchcategory",
							method:"POST",
							data:{limit_category:limit_category, start_category:start_category},
							cache: false,
							success:function(data)
							{
								if(data == '')
								{
									$('#load_data_message_category').html('<h3>No More Result Found</h3>');
									action = 'active';
								}
								else
								{
									$('#load_data_category').append(data);
									$('#load_data_message_category').html("");
									action = 'inactive';
								}
							}
						})
					}

					if(action == 'inactive')
					{
						action = 'active';
						load_data_category(limit_category, start_category);
					}

					$(window).scroll(function(){
						if($(window).scrollTop() + $(window).height() > $("#load_data_category").height() && action == 'inactive')
						{
							lazzy_loader(limit);
							action = 'active';
							start_category = start_category + limit_category;
							setTimeout(function(){
								load_data(limit_category, start_category);
							}, 1000);
						}
					});

				});
				</script>
				<!-- end scroll category -->


				<!-- scroll location -->
				<script>
				$(document).ready(function(){

					var limit_location = 7;
					var start_location = 0;
					var action = 'inactive';

					function lazzy_loader(limit_location)
					{
						var output = '';
						for(var count=0; count<limit_location; count++)
						{
							output += '<div class="post_data">';
							output += '<p><span class="content-placeholder" style="width:100%; height: 30px;">&nbsp;</span></p>';
							output += '<p><span class="content-placeholder" style="width:100%; height: 100px;">&nbsp;</span></p>';
							output += '</div>';
						}
						$('#load_data_message_location').html(output);
					}

					lazzy_loader(limit_location);

					function load_data_location(limit_location, start_location)
					{
						$.ajax({
							url:"<?php echo base_url(); ?>beranda/fetchlocation",
							method:"POST",
							data:{limit_location:limit_location, start_location:start_location},
							cache: false,
							success:function(data)
							{
								if(data == '')
								{
									$('#load_data_message_location').html('<h3>No More Result Found</h3>');
									action = 'active';
								}
								else
								{
									$('#load_data_location').append(data);
									$('#load_data_message_location').html("");
									action = 'inactive';
								}
							}
						})
					}

					if(action == 'inactive')
					{
						action = 'active';
						load_data_location(limit_location, start_location);
					}

					$(window).scroll(function(){
						if($(window).scrollTop() + $(window).height() > $("#load_data_location").height() && action == 'inactive')
						{
							lazzy_loader(limit);
							action = 'active';
							start_location = start_location + limit_location;
							setTimeout(function(){
								load_data(limit_location, start_location);
							}, 1000);
						}
					});

				});
				</script>
				<!-- end scroll location -->

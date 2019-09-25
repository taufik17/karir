<?php $this->load->view('web/konten_header') ?>

<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row d-flex align-items-center justify-content-center">
			<div class="about-content col-lg-12">
				<h1 class="text-white">
					Member Login
				</h1>
				<p class="tex-white">Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
			</div>
		</div>
	</div>
</section>

<section class="features-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-12 col-md-12">
				<div class="single-feature">

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
			</section>

			<br>
			&nbsp
			<br>


			<?php $this->load->view('web/konten_footer') ?>

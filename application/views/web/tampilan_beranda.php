<?php $this->load->view('web/konten_header') ?>

<div id="modal_warning" class="modal fade" role="dialog">
	<div role="document" class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header modaldaftar">
				<h5 id="daftar-modalLabel" class="modal-title" style="color:white;">Event Terdekat</h5>
				<button type="button" data-dismiss="modal" aria-label="Close" class="close">
					<span aria-hidden="true">×</span>
				</button>
				<br>
			</div>

			<div class="modal-body">
				<div id="myCarousel" class="carousel slide" data-ride="carousel">
					<!-- Indicators -->
					<ol class="carousel-indicators">
						<li data-target="#myCarousel" data-slide-to="0"  class="active"></li>
					</ol>

					<!-- Wrapper for slides -->
					<div class="carousel-inner">
						<div class="item active">
							<a href="<?= base_url() ?>event/careerday" target="_blank">
								<img src="<?= base_url() ?>assets/gambar/iklan/careerday.png" style="width: 100%" class="img-responsive">
							</a>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</div>

<section class="banner-area relative" id="home">
	<div class="overlay overlay-bg"></div>
	<div class="container">
		<div class="row fullscreen d-flex align-items-center justify-content-center">
			<div class="banner-content col-lg-12">
				<h1 class="text-white">
					Start Your Career
				</h1>
				<form action="<?= base_url(); ?>beranda/cari" method="post" class="serach-form-area">
					<div class="row justify-content-center form-wrap">
						<div class="col-lg-4 form-cols">
							<input type="text" class="form-control" name="search" placeholder="ex: job, company, etc.">
						</div>
						<div class="col-lg-3 form-cols">
							<div class="default-select" id="default-selects">
								<select name="prov">
									<option value="*" selected="selected">All Area</option>
									<?php
									foreach ($provinsi->result() as $row ) {
										?>
										<option value="<?php echo $row->id; ?>" ><?php echo $row->nama; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-lg-3 form-cols">
							<div class="default-select" id="default-selects2">
								<select name="kategori">
									<option value="*" selected="selected">All Category</option>
									<?php
									foreach ($jenis_industri->result() as $row ) {
										?>
										<option value="<?php echo $row->id_industri; ?>" ><?php echo $row->jenis_industri; ?></option>
									<?php } ?>
								</select>
							</div>
						</div>
						<div class="col-lg-1 form-cols">
							<button type="submit" class="btn btn-info">
								<span class="lnr lnr-magnifier"></span></button>
						</div>
					</div>
				</form>
				<p class="text-white"> <span>Cari Perusahaan:</span> Cari berdasarkan nama perusahaan yang ingin kampu apply.  </p>
			</div>
		</div>
	</div>
</section>
<!-- End banner Area -->

<!-- Start features Area -->
<section class="features-area">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-md-6">
				<div class="single-feature">
					<h4 align="center">Lowongan</h4>
					<ul class="nav nav-pills nav-justified" id="myTab" role="tablist">
						<li class="nav-item">
							<a class="nav-link active" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Terbaru</a>
						</li>
						<li class="nav-item">
							<a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Terpopuler</a>
						</li>
					</ul>
					<div class="tab-content" id="myTabContent">
						<div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
							<div class="container">
								<div class="demo1" data-simplebar>
									<div id="content">
										<div id="load_data"></div>
									</div>
								</div>
							</div>
						</div>
						<div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">
							<div class="container">
								<div class="demo1" data-simplebar>
									<div id="content">
										<div id="load_data_popular"></div>
									</div>
								</div>
							</div>
						</div>
					</div>

				</div>
			</div>
			<div class="col-lg-3 col-md-6">
				<div class="single-feature">
					<h4 align="center">Career News</h4>
					<br>
						<div class="news" data-simplebar>
							<div id="content">
								<div id="load_data_news"></div>
							</div>
						</div>

				</div>
			</div>

			<div class="col-lg-3 col-md-6">
				<div class="single-feature">
					<h4 align="center">Kalender Event</h4>
					<div class="info-box">
						<span class="info-box-icon">
							<img src="<?= base_url() ?>assets/gambar/calendar-bg.png" alt="">
							<div class="centered">
								<?php
								date_default_timezone_set('Asia/Jakarta');
								echo date('d');
								?>
							</div>
						</span>

						<div class="info-box-content" text-align="center">
							<h3>&nbsp
								<?php
								echo date('M Y');
								?>
							</h3>
						</div>
						<!-- /.info-box-content -->
						<br>

						<div class="event-box" data-simplebar>
							<div id="content">
								<?php foreach ($event->result() as $judul ) {
									?>
									<ul class="list-group">
										<li class="list-group-item">
											<a href="<?= base_url();?>event/viewevent/<?= $judul->id; ?>"><?= $judul->title; ?></a>
										</li>
									</ul>
								<?php } ?>
							</div>
						</div>


					</div>
					<div class="button-center">
						<a href="<?= base_url() ?>event" class="genric-btn default">Selengkapnya <span class="fa  fa-arrow-right"></span></a>
					</div>
				</div>
			</div>


		</div>
	</div>
</section>


<!-- Start post Area -->
<section class="post-area section-gap">

	<div class="container">
		<div class="row justify-content-center d-flex">
			<div class="col-lg-8 post-list">
				<ul class="cat-list">
					<li><a href="#">Full Time</a></li>
					<li><a href="#">Intern</a></li>
					<li><a href="#">part Time</a></li>
				</ul>

				<div id="accordion">

					<?php
					$a = 0;
					foreach ($data_list->result() as $row ) {
						if ($a == 0) {
							$kelas = "genric-btn danger circle arrow tiny";
							$ekspand = "true";
							$col = "collapse show";
						}
						else {
							$kelas = "collapsed genric-btn danger circle arrow tiny";
							$ekspand = "false";
							$col = "collapse";
						}
						$a++;
						?>

						<?php
						$query = $this->db->query("SELECT * FROM joblist
																								WHERE perusahaan = $row->Id_perusahaan
        																				AND status = '<span class=\"label label-success\">Telah tayang</span>'
        																				AND deadline >= current_date();");
						$query_tutup = $this->db->query("SELECT * FROM joblist
																								WHERE perusahaan = $row->Id_perusahaan
																		        		AND status = '<span class=\"label label-success\">Telah tayang</span>'
																		        		AND deadline <= current_date();");
						$query2 = $this->db->query("SELECT nama FROM provinsi
																				WHERE id = ( SELECT id_provinsi
																										 FROM company
																										 WHERE Id_perusahaan = $row->Id_perusahaan )");
							?>

						<div class="card">
							<div class="card-header" id="heading-<?= $row->Id_perusahaan ?>">
								<div class="single-post row">
									<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
										<a class="comp-logo col-md-2 pl-0 pr-3" href="<?= base_url(); ?>company/view">
											<img class="box-shadow p-1" src="<?= base_url() ?>assets/gambar/company/profil/<?= $row->Logo_perusahaan; ?>" width="95px" alt="<?= $row->Nama_perusahaan; ?>">
										</a>
										<div>
											<h4 class="m-0"><a href="<?= base_url(); ?>company/view" class="txt-dark-blue"><strong><?= $row->Nama_perusahaan; ?></strong></a></h4>
											<span class="d-block txt-dark-blue">
												<?php foreach ($query2->result() as $prov) ?>
												<?= $prov->nama ?>, Indonesia
											</span>
											<p class="mb-1 mt-1"><?= $row->deskripsi_perusahaan; ?></p>
										</div>
									</div>
									<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
										<div class="w-100">
											<?php
											$count = 0;
											foreach ($query->result() as $jobbuka)
											$count++
											?>
										<h1><?= $count ?></h1>
											<span>Lowongan</span>
											<h5 class="mb-0">
												<a data-toggle="collapse" class="<?= $kelas; ?>" href="#collapse-<?= $row->Id_perusahaan ?>" aria-expanded="<?= $ekspand; ?>" aria-controls="collapse-<?= $row->Id_perusahaan ?>">
												</a>
											</h5>
										</div>
									</div>
								</div>
							</div>
							<div id="collapse-<?= $row->Id_perusahaan ?>" class="<?= $col; ?>" data-parent="#accordion" aria-labelledby="heading-<?= $row->Id_perusahaan ?>">
								<div class="card-body">
									<ul class="nav nav-tabs nav-justified" role="tablist">
										<li class="nav-item">
											<a class="nav-link active rounded-0" data-toggle="tab" href="#<?= $row->Id_perusahaan; ?>1">Lowongan Buka</a>
										</li>
										<li class="nav-item">
											<a class="nav-link rounded-0" data-toggle="tab" href="#<?= $row->Id_perusahaan; ?>2">Lowongan Tutup</a>
										</li>
									</ul>

									<!-- Tab panes -->
									<div class="tab-content">
										<div id="<?= $row->Id_perusahaan; ?>1" class="container tab-pane active">
											<div class="box-body">
												<table class="table table-striped">
													<tbody>
															<?php
															if ($query->num_rows() > 0) {
																$no = 1;
																foreach ($query->result() as $jobbuka) {
																	?>
																	<?php
																	$deadline  = date_create($jobbuka->deadline);
																	$akhir = date_create(); // waktu sekarang
																	$diff  = date_diff( $deadline, $akhir );
																	?>
																	<tr>
																		<td><?= $no++ ?></td>
																		<td> <a href="<?= base_url(); ?>add_karir/viewjob/<?= $jobbuka->id_joblist ?>"><?= $jobbuka->Nama_joblist; ?></a></td>
																		<td>
																			<span style="color: green;">
																				<i class="fa fa-clock-o">&nbsp <?= $diff->days; ?> Hari Lagi</i>
																			</span>
																		</td>
																	</tr>
																<?php } ?>
															</tbody>
														</table>
													<?php }
													else {
														?>
														<table class="table table-striped">
															<tbody>
																<h5 align="center">Kosong</h5>
															</tbody>
														</table>
													<?php } ?>
												</div>

											</div>
											<div id="<?= $row->Id_perusahaan; ?>2" class="container tab-pane fade"><br>
												<div class="box-body">
													<table class="table table-striped">
														<tbody>
																<?php
																if ($query->num_rows() > 0) {
																	$no = 1;
																	foreach ($query_tutup->result() as $jobtutup) {
																		?>
																		<tr>
																			<td><?= $no++ ?></td>
																			<td> <a href="<?= base_url(); ?>add_karir/viewjob/<?= $jobbuka->id_joblist ?>"><?= $jobtutup->Nama_joblist; ?></a></td>
																		</tr>
																	<?php } ?>
																</tbody>
															</table>
														<?php }
														else {
															?>
															<table class="table table-striped">
																<tbody>
																	<h5 align="center">Kosong</h5>
																</tbody>
															</table>
														<?php } ?>
													</div>

											</div>
										</div>
									</div>
								</div>
							</div>
							<br>

						<?php } ?>

					</div>


					<!-- disini pagination -->
					<h5>pagination</h5>
					<!-- end pagination -->

				</div>
				<div class="col-lg-4 sidebar">

					<div class="single-slidebar">
						<h4>Jobs by Category</h4>
						<ul id="load_data_category" class="cat-list">
						</ul>
						<a href="#" class="genric-btn default arrow">Selengkapnya<span class="fa  fa-arrow-right"></span></a>
					</div>

					<!-- <div class="single-slidebar">
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
								</div> -->

								<div class="single-slidebar">
									<h4>Jobs by Location</h4>
									<ul id="load_data_location" class="cat-list">
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

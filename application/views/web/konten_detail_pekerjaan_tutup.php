<?php
foreach ($data->result() as $row)
?>
<section class="contents container-fluid mt-3" style="transform: none;">
	<div class="container" style="transform: none;">
		<div id="content" class="row" style="transform: none;">
			<div class="col-md-3" style="transform: none;">
				<div class="sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

					<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; left: 119.5px; top: 0px;">
						<div class="box-shadow bg-white rounded mb-4">
							<h5 class="px-2 pb-2 pt-3 mx-2 mb-0 text-secondary">
								<small><strong>Lowongan</strong></small>
							</h5>
							<ul class="list-sidebar list-group list-group-flush vacancy-menu">
								<li class="list-group-item">
									<a href="<?= base_url() ?>company/lowongan/<?= $row->Id_perusahaan; ?>" class="d-block">
										<i class="fa fa-envelope-open-o mr-2"></i>
										Lowongan Buka
									</a>
								</li>
								<li class="list-group-item active">
									<a href="<?= base_url() ?>company/lowongan_tutup/<?= $row->Id_perusahaan; ?>" class="d-block">
										<i class="fa fa-window-close mr-2"></i>
										Lowongan Tutup
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-9 main-content">
				<div class="news-feed0">
					<div id="posting-0" class="post-content box-shadow bg-white rounded mb-4">
						<div class="comments-box create-post">
							<div class="post-comment d-flex p-3">
								<div class="modal-body pl-4 pr-4">
									<div class="row">
										<div class="col-md-8">
											<h4 class="txt-dark-blue"><strong>Shift Operation Engineer</strong></h4>
											<div class="rounded row border border-secondary m-0 mt-3 mb-3 p-2">
												<div class="col-md-6 p-0">
													<table class="table table-sm m-0">
														<tbody><tr>
															<td class="border-0 col-5">Tayang</td>
															<td class="border-0">:</td>
															<td class="border-0">24 September 2019</td>
														</tr>
														<tr>
															<td class="border-0 col-5">Berlaku</td>
															<td class="border-0">:</td>
															<td class="border-0">14 hari lagi</td>
														</tr>
													</tbody></table>
												</div>
												<div class="col-md-6 p-0">
													<table class="table table-sm m-0">
														<tbody>
														<tr>
															<td class="border-0 col-5">Tipe Pekerjaan</td>
															<td class="border-0">:</td>
															<td class="border-0">Full Time</td>
														</tr>
													</tbody></table>
												</div>
											</div>
											<div>
												<h4 class="text-mutted">Syarat Umum :</h4>
												<div class="requirement-general">
													-
												</div>
											</div>
											<div class="mt-3">
												<h4 class="text-mutted">Syarat Khusus :</h4>
												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">Jenjang Pendidikan</label>
													<div class="col-md-7 form-control-plaintext">Sarjana/S1</div>
												</div>
												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">Jurusan</label>
													<div class="col-md-7 form-control-plaintext">
														<div class="major-list">
															<span>Teknik Kimia</span>
														</div>
													</div>
												</div>




												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">IPK Minimal</label>
													<div class="col-md-7 form-control-plaintext">3</div>
												</div>


												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label"></label>
													<div class="col-md-7 form-control-plaintext">24 Tahun</div>
												</div>

												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">Syarat Khusus Lain</label>
													<div class="col-md-7 form-control-plaintext">
														<div class="requirement-special">
															<strong>Requirements:</strong><br>
															<ul>
																<li>
																	Male - Maximum Age 24 years old
																</li>
																<li>
																	University Graduate with majoring Chemical Engineer
																</li>
																<li>
																	Have a minimum GPA 3.00 (4.00 scale)
																</li>
																<li>
																	Ability to operate personal computer and fluent in English
																</li>
																<li>
																	Highly motivated to start a career in the Production Department
																</li>
																<li>
																	Hard worker, honest and discipline
																</li>
																<li>
																	Willing to be interviewed and work in Cilegon – Banten
																</li>
															</ul>
														</div>
													</div>
												</div>
											</div>
											<div class="mt-3">
												<h4 class="text-mutted">Informasi Umum :</h4>


												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">Penempatan</label>
													<div class="col-md-7 form-control-plaintext">
														<div class="location">
															<span>Provinsi Banten</span>
														</div>
													</div>
												</div>

												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">Deskripsi Pekerjaan</label>
													<div class="col-md-7 form-control-plaintext">
														-
													</div>
												</div>




												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">Keterangan lainnya</label>
													<div class="col-md-7 form-control-plaintext">
														-
													</div>
												</div>

											</div>
										</div>

										<div class="col-md-4 widget">
											<div class="card text-center">
												<div class="card-header">
													<h2 class="card-title">150</h2>
													<p class="card-text" style="margin-bottom:0px;">Pelamar</p>
													<em class="card-text">3 hari lagi</em>
												</div>
												<a href="#" class="card-footer btn btn-primary"><i class="fa fa-check-square-o mr-2"></i>Lamar</a>

											</div>

										</div>
										<br>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>


			</div>

		</div>
	</div>
</section>
?>

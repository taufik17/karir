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

						$query_buka = $this->db->query("SELECT perusahaan FROM joblist
																				WHERE status = '<span class=\"label label-success\">Telah tayang</span>'
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

						<?php
						$hitung_buka = 0;
						foreach ($query->result() as $jobbuka)
						$hitung_buka++
						?>

							<?php
							if ($hitung_buka >= 1) { ?>
								<div class="card">
									<div class="card-header" id="heading-<?= $row->Id_perusahaan ?>">
										<div class="single-post row">
											<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
												<a class="comp-logo col-md-2 pl-0 pr-3" href="<?= base_url(); ?>company/view/<?= $row->Id_perusahaan ?>">
													<img class="box-shadow p-1" src="<?= base_url() ?>assets/gambar/company/profil/<?= $row->Logo_perusahaan; ?>" width="95px" alt="<?= $row->Nama_perusahaan; ?>">
												</a>
												<div>
													<h4 class="m-0"><a href="<?= base_url(); ?>company/view/<?= $row->Id_perusahaan ?>" class="txt-dark-blue"><strong><?= $row->Nama_perusahaan; ?></strong></a></h4>
													<span class="d-block txt-dark-blue">
														<?php foreach ($query2->result() as $prov) ?>
														<p><?= $prov->nama ?>, Indonesia </p>
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
																				<td> <a href="<?= base_url(); ?>company/detailjob_buka/<?= $row->Id_perusahaan ?>/<?= $jobbuka->id_joblist ?>"><?= $jobbuka->Nama_joblist; ?></a></td>
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
																		if ($query_tutup->num_rows() > 0) {
																			$no = 1;
																			foreach ($query_tutup->result() as $jobtutup) {
																				?>
																				<tr>
																					<td><?= $no++ ?></td>
																					<td> <a href="<?= base_url(); ?>company/detailjob_tutup/<?= $row->Id_perusahaan ?>/<?= $jobtutup->id_joblist ?>"><?= $jobtutup->Nama_joblist; ?></a></td>
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
							<?php } else { ?>

							<?php } ?>


							<br>

						<?php } ?>
					</div>


					<!-- disini pagination -->

					<?= $this->pagination->create_links(); ?>
					<!-- end pagination -->

				</div>
				<div class="col-lg-4 sidebar">

					<div class="single-slidebar">
						<h4>Pekerjaan Berdasarkan Kategori</h4>
						<ul id="load_data_category" class="cat-list">
						</ul>
						<a href="#" class="genric-btn default arrow">Selengkapnya<span class="fa  fa-arrow-right"></span></a>
					</div>
								<div class="single-slidebar">
									<h4>Pekerjaan Berdasarkan Lokasi</h4>
									<ul id="load_data_location" class="cat-list">
									</ul>
								</div>

							</div>
						</div>
					</div>
				</section>

<?php $this->load->view('member/konten_header') ?>
<section class="section-add-job">
	<div class="container">
		<div class="row">
			<div class="col-md-3 sidebar" style="padding-top: 45px;" >
					<div class="box-shadow bg-white rounded fixcari">
						<h5 class="p-2 text-center">
							Cari Lowongan Buka
						</h5>
						
						<form id="form_search_sidebar" class="p-2" action="/vacancy/site/index" method="POST">
							<input type="text" class="form-control" name="search" placeholder="ex: job, company, etc." style="border-radius:5px">
							<div class="col-md-12" style="padding-left:0px; padding-top:10px; border-radius:5px;">
								<div class="default-select" id="default-selects">
									<select name="prov" style="width:150px;">
										<option value="*" selected="selected">All Area</option>
										<?php
										foreach ($provinsi->result() as $row ) {
											?>
											<option value="<?php echo $row->id; ?>" ><?php echo $row->nama; ?></option>
										<?php } ?>
									</select>
								</div>
							</div>

							<div class="col-md-12" style="padding-left:0px; padding-top:10px; ">
								<div class="default-select" id="default-selects2" style="border:1px;">
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

							<button type="submit" class="btn btn-primary center rounded" style="padding:10px"><i class="fa fa-search mr-2"></i>Cari</button>
						</form>
					</div>
			</div>

			<div class="vacancy-list col-md-9" id="printThisViewIndex">
				<div class="summary row align-items-center mt-4">
					<div class="col-sm-8 col-md-8 text-right">
						<!-- <span class="text-muted mr-3">Menampilkan 1 - 10 dari 1514 Online Company</span> -->
						&nbsp
					</div>

					<div class="col-sm-4 col-md-4 text-right">
					</div>
				</div>

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
											<div class="col-lg-10 col-md-9 profile d-flex">
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


					<!-- <ul class="pagination justify-content-center p-3"><li class="prev disabled"><span>«</span></li>
						<li class="active"><a href="/vacancy/site/index?page=1&amp;per-page=6" data-page="0">1</a></li>
						<li><a href="/vacancy/site/index?page=2&amp;per-page=6" data-page="1">2</a></li>
						<li><a href="/vacancy/site/index?page=3&amp;per-page=6" data-page="2">3</a></li>
						<li><a href="/vacancy/site/index?page=4&amp;per-page=6" data-page="3">4</a></li>
						<li><a href="/vacancy/site/index?page=5&amp;per-page=6" data-page="4">5</a></li>
						<li><a href="/vacancy/site/index?page=6&amp;per-page=6" data-page="5">6</a></li>
						<li><a href="/vacancy/site/index?page=7&amp;per-page=6" data-page="6">7</a></li>
						<li><a href="/vacancy/site/index?page=8&amp;per-page=6" data-page="7">8</a></li>
						<li><a href="/vacancy/site/index?page=9&amp;per-page=6" data-page="8">9</a></li>
						<li><a href="/vacancy/site/index?page=10&amp;per-page=6" data-page="9">10</a></li>
						<li class="next"><a href="/vacancy/site/index?page=2&amp;per-page=6" data-page="1">»</a></li></ul> -->
					</div>
				</div>
			</div>
		</section>

		<?php $this->load->view('member/konten_footer') ?>

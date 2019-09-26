<?php $this->load->view('member/konten_header') ?>
<section class="section-add-job">
	<div class="container">
		<div class="row">

			<div class="col-md-3 sidebar" style="padding-top: 45px;" >
					<div class="vac-search box-shadow bg-white rounded fixcari">
						<h5 class="p-2 text-black text-center">
							<strong>Cari Lowongan Buka</strong>
						</h5>

						<form id="form_search_sidebar" class="p-2" action="/vacancy/site/index" method="GET">
							<button type="submit" class="btn green text-white center rounded btn-sm h-100">Cari</button>
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
						$query = $this->db->query("SELECT pekerjaan, COUNT(*) as jumlah, Nama_joblist, deadline, status, perusahaan,id_joblist
						FROM lamaran
						NATURAL JOIN joblist
						WHERE pekerjaan = id_joblist
						AND status = '<span class=\"label label-success\">Telah tayang</span>'
						AND perusahaan = $row->Id_perusahaan
						GROUP BY pekerjaan;");
						$query2 = $this->db->query("SELECT nama FROM provinsi
							WHERE id = ( SELECT id_provinsi FROM company WHERE Id_perusahaan = $row->Id_perusahaan )");
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
												<a class="nav-link active" data-toggle="tab" href="#<?= $row->Id_perusahaan; ?>1">Lowongan Buka</a>
											</li>
											<li class="nav-item">
												<a class="nav-link" data-toggle="tab" href="#<?= $row->Id_perusahaan; ?>2">Lowongan Tutup</a>
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
																			<i class="fa fa-users">&nbsp<?= $jobbuka->jumlah ?> pelamar</i>
																		</td>
																		<td>
																			<i class="fa fa-clock-o">&nbsp <?= $diff->days; ?> Hari Lagi</i>
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
												<table class="table table-striped">
													<tbody>
														<h5 align="center">Kosong</h5>
													</tbody>
												</table>

											</div>
										</div>
									</div>
								</div>
							</div>
							<br>

						<?php } ?>

					</div>



					<ul class="pagination justify-content-center p-3"><li class="prev disabled"><span>«</span></li>
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
						<li class="next"><a href="/vacancy/site/index?page=2&amp;per-page=6" data-page="1">»</a></li></ul>
					</div>
				</div>
			</div>
		</section>

		<?php $this->load->view('member/konten_footer') ?>

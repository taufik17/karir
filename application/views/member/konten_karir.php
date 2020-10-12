<section class="contents container-fluid mt-3" style="transform: none;">
	<div class="container" style="transform: none;">
		<div id="content" class="row" style="transform: none;">
			<div class="col-lg-3 col-md-12" style="transform: none;">
				<div class="sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

					<div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; left: 119.5px; top: 0px;"><div class="box-shadow bg-white rounded mb-3">
						<div class="row p-3">
							<div class="col-md-11">
								<h5 class="m-0 font-weight-bold text-muted">Pendidikan Terakhir</h5>
								<a class="txt-blue" href="#">-</a>
							</div>
						</div>
						<div class="row p-3">
							<div class="col-md-11">
								<h5 class="m-0 font-weight-bold text-muted">Pekerjaan Terakhir</h5>
								<a class="txt-blue" href="#">-</a>
							</div>
						</div>
						<div class="row p-3">
							<div class="col-md-11">
								<h5 class="m-0 font-weight-bold text-muted">Alamat</h5>
								<p>-</p>
							</div>
						</div>
					</div>
					<div class="resize-sensor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 455px; height: 329px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div></div>
				</div>
				<div class="col-lg-9 col-md-12 main-content">
					<div class="progress-table-wrap">
							<div class="progress-table">
								<div class="table-head">
									<div class="serial">No</div>
									<div class="country">Instansi / Perusahaan</div>
									<div class="visit">Nama Pekerjaan</div>
									<div class="percentage">Status</div>
								</div>
								<?php
								if ($jumlah_dilamar > 0 ) { ?>
									<?php
									$no = 0;
									foreach ($data_pekerjaan->result() as $row) {
										$no++
										?>
									<div class="table-row">
										<div class="serial"><?= $no; ?></div>
										<div class="country"><?= $row->Nama_perusahaan; ?></div>
										<div class="visit"><?= $row->Nama_joblist; ?></div>
										<div class="percentage">
											<?php
											if ($row->status == 2) { ?>
												<div class="spinner">
												  <div class="rect1"></div>
												  <div class="rect2"></div>
												  <div class="rect3"></div>
												  <div class="rect4"></div>
												  <div class="rect5"></div>
												</div>
											<?php }
											else { ?>
												<a href="#" class="genric-btn info-border circle small">Pengumuman</a>
											<?php } ?>
										</div>
									</div>
									<?php } ?>
								<?php }
								else {
									?>
									<div class="d-flex justify-content-center">Belum ada pekerjaan yang dilamar.</div>
								<?php } ?>
							</div>
						</div>
				</div>

			</div>
		</div>
	</section>

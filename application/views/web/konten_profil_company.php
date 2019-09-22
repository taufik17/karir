<?php
foreach ($data->result() as $row)
?>
<section class="contents container-fluid mt-3" style="transform: none;">
	<div class="container" style="transform: none;">
		<div id="content" class="row" style="transform: none;">
			<div class="col-lg-5 col-md-12" style="transform: none;">
				<div class="sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
					<div class="box-shadow bg-white rounded mb-4">
						<div class="row p-3">
							<div class="col-12">
								<!-- <h4 class="m-0 font-weight-bold">PT. SWEVEL UNIVERSAL MEDIA</h4> -->
								<h4 class="m-0 font-weight-bold"><?= $row->Nama_perusahaan; ?></h4>
							</div>
						</div>
						<div class="row p-3">
							<div class="col-md-11">
								<h5 class="m-0 font-weight-bold text-muted">Jenis Industri</h5>
								<?php
								$jenis = $this->db->query("SELECT jenis_industri FROM industri WHERE id_industri = $row->id_industri");?>
								<?php
								foreach ($jenis->result() as $jns);
								?>
								<p>
									<?= $jns->jenis_industri; ?>
								</p>
							</div>
						</div>
						<div class="row p-3">
							<div class="col-md-11">
								<h5 class="m-0 font-weight-bold text-muted">Website</h5>
								<p><a href="<?= $row->Website; ?>" target="_blank"><?= $row->Website; ?></a></p>
							</div>
						</div>
						<div class="row p-3">
							<div class="col-md-11">
								<h5 class="m-0 font-weight-bold text-muted">Alamat</h5>
								<p><?= $row->Alamat; ?></p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-7 col-md-12 main-content">
				<div class="news-feed0">
					<div id="posting-0" class="post-content box-shadow bg-white rounded mb-4">
						<div class="comments-box create-post">
							<div class="post-comment d-flex p-3">
								<div class="w-100 comment-area">
									<h3 class="m-0 font-weight-bold text-muted">Tentang Perusahaan</h3>
									<div class="posting-btn d-block mt-2">
										<div class="row p-3">
											<?= $row->deskripsi_perusahaan; ?>
											</div>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>


				</div>

				<div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
				</div>
				<div class="tab-pane fade" id="article" role="tabpanel" aria-labelledby="article-tab">Content</div>
			</div>
		</div>
	</section>

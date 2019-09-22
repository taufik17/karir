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
								<li class="list-group-item active">
									<a href="<?= base_url() ?>company/lowongan/<?= $row->Id_perusahaan; ?>" class="d-block">
										<i class="fa fa-envelope-open-o mr-2"></i>
										Lowongan Buka
									</a>
								</li>
								<li class="list-group-item">
									<a href="/company/vacancy/index/44736?type=close" class="d-block">
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
				<?php
				foreach ($joblist->result() as $key) {
					?>
				<div class="list-view">
					<div class="sep rounded box-shadow bg-white mb-4">
						<div class="row m-0">
							<div class="col-lg-10 col-md-9 profile p-3 border-right">
								<h4 class="mb-1">
									<a href="/company/vacancy/view/44736?vid=23964&amp;modal=show&amp;type=open&amp;title=lowongan-it-project-manager-it-and-software" class="txt-orange font-weight-bold" name="lowongan-it-project-manager-it-and-software">
										<?= $key->Nama_joblist; ?>
									</a>
								</h4>
								<table class="table table-sm m-0">
									<tbody>
										<tr class="row m-0">
											<td class="border-0 col-3">Jenjang Pendidikan</td>
											<td class="border-0 col-1">:</td>
												<td class="border-0 col-8">
													<?php
													if ($key->min_lulus == '0') {
														echo "Apa Saja";
													}
													elseif ($key->min_lulus == '1') {
														echo "Minimal SMA / SMK / Sederajat";
													}
													elseif ($key->min_lulus == '2') {
														echo "Diploma";
													}
													elseif ($key->min_lulus == '3') {
														echo "Sarjana S1";
													}
													elseif ($key->min_lulus == '4') {
														echo "Pasca Sarjana S2";
													} ?>
												</td>

										</tr>
										<tr class="row m-0">
											<td class="border-0 col-3">Jurusan</td>
											<td class="border-0 col-1">:</td>
											<?php
											$pendidikan = $this->db->query("SELECT id_detail_req, id_requirement, id_joblist, nama_jurusan
																											FROM tb_detail_req_jrsn
																											NATURAL JOIN requirement_jurusan
																											WHERE id_joblist = $key->id_joblist");
											?>
											<td class="border-0 col-8">
												<?php
												foreach ($pendidikan->result() as $key2 ) { ?>
													<h6>
														<span class="badge badge-secondary"><?= $key2->nama_jurusan; ?> <br></span>
													</h6>
											<?php } ?>
										</td>
										</tr>
										<tr class="row m-0">
											<td class="border-0 col-3">Tipe Pekerjaan</td>
											<td class="border-0 col-1">:</td>
											<td class="border-0 col-8">
												<?php
												if ($key->Tipe_pekerjaan == '1') {
													echo "Full Time";
												}
												elseif ($key->Tipe_pekerjaan == '2') {
													echo "Part Time";
												}
												elseif ($key->Tipe_pekerjaan == '3') {
													echo "Intern";
												} ?>
											</td>
										</tr>
									</tbody>
								</table>
								<span class="d-block font-weight-bold">Deskripsi Pekerjaan</span>
								<table class="table table-sm m-0">
									<tbody>
										<tr class="row m-0">
											<td class="border-0 col-3"></td>
											<td class="border-0 col-1"></td>
											<td class="border-0 col-md-8">
												<?= $key->deskripsi_pekerjaan; ?>
											</td>
											</tr>
										</tbody>
									</table>
							</div>
							<div class="col-lg-2 col-md-3 text-center px-1 py-3">
								<div class="d-flex align-items-end flex-column h-100">
									<div class="mb-auto w-100 text-center">
										<?php
										$jumlah_pelamar = $this->db->query("SELECT id_lamaran FROM lamaran WHERE pekerjaan = $key->id_joblist ")->num_rows(); ?>
										<h1 class="font-weight-bold m-0"> <?= $jumlah_pelamar; ?> </h1>
										<span class="d-block font-weight-bold">Pelamar</span>
									</div>
									<div class="w-100 text-center">
										<a href="/company/vacancy/view/44736?vid=23964&amp;modal=show&amp;type=open&amp;title=lowongan-it-project-manager-it-and-software" class="w-75 btn text-white green btn-success btn-sm mt-2 detailbtn" name="accounting-intern">
											Detail
										</a>

									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

				<?php } ?>
			</div>
		</div>
	</div>
</section>
?>

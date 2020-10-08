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

			<?php
			foreach ($joblist->result() as $key ) { ?>

			<div class="col-md-9 main-content">
				<div class="news-feed0">
					<div id="posting-0" class="post-content box-shadow bg-white rounded mb-4">
						<div class="comments-box create-post">
							<div class="post-comment d-flex p-3">
								<div class="modal-body pl-4 pr-4">
									<div class="row">
										<div class="col-md-8">
											<h4 class="txt-dark-blue"><strong><?= $key->Nama_joblist; ?></strong></h4>
											<div class="rounded row border border-secondary m-0 mt-3 mb-3 p-2">
												<div class="col-md-6 p-0">
													<table class="table table-sm m-0">
														<tbody><tr>
															<td class="border-0 col-4">Tayang</td>
															<td class="border-0">:</td>
															<td class="border-0">24 September 2019</td>
														</tr>
														<tr>
															<?php
															foreach ($joblist->result() as $jobbuka) { ?>
																<?php
																$deadline  = date_create($jobbuka->deadline);
																$akhir = date_create(); // waktu sekarang
																$diff  = date_diff( $deadline, $akhir );
																?>
															<td class="border-0 col-2">Berlaku</td>
															<td class="border-0">:</td>
															<td class="border-0">
																<span style="color: green;">
																	<?= $diff->days; ?> Hari Lagi
																</span>
															</td>

														</tr>
													</tbody></table>
												</div>
												<div class="col-md-6 p-0">
													<table class="table table-sm m-0">
														<tbody>
														<tr>
															<td class="border-0 col-5">Tipe Pekerjaan</td>
															<td class="border-0">:</td>
															<td class="border-0">
																<?php
																if ($key->Tipe_pekerjaan == '1') {
																	echo "Full Time";
																} elseif($key->Tipe_pekerjaan == '2') {
																	echo "Part Time";
																} elseif ($key->Tipe_pekerjaan == '3') {
																	echo "Internship";
																} ?>
															</td>
														</tr>
														<tr>
															<td class="border-0 col-5">Dibutuhkan</td>
															<td class="border-0">:</td>
															<td class="border-0">
																<?= $key->dibutuhkan; ?> &nbsp Orang.
															</td>
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
													<div class="col-md-7 form-control-plaintext">:
														<?php
														if ($key->min_lulus == '0') {
															echo "Apa Saja";
														} elseif($key->min_lulus == '1') {
															echo "Minimal SMA / SMK Sederajat";
														} elseif ($key->min_lulus == '2') {
															echo "Minimal Diploma";
														} elseif ($key->min_lulus == '3') {
															echo "Minimal Sarjana / S1";
														} elseif ($key->min_lulus == '4') {
															echo "Magister / S2";
														} ?>
													</div>
												</div>
												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">Jurusan</label>
													<div class="col-md-7 form-control-plaintext">
														<div class="major-list">
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

														</div>
													</div>
												</div>

												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">IPK Minimal</label>
													<div class="col-md-7 form-control-plaintext"><?= $key->IPK; ?></div>
												</div>


												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">Minimal Umur</label>
													<div class="col-md-7 form-control-plaintext"><?= $key->min_umur ?></div>
												</div>

												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">Maksimal Umur</label>
													<div class="col-md-7 form-control-plaintext"><?= $key->max_umur ?></div>
												</div>

												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">Syarat Khusus Lain</label>
													<div class="col-md-7 form-control-plaintext">
														<div class="requirement-special">
															<strong>Requirements:</strong><br>
															<?= $key->syarat_khusus; ?>
														</div>
													</div>
												</div>
											</div>
											<div class="mt-3">
												<h4 class="text-mutted">Informasi Umum :</h4>


												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">Penempatan</label>
													<div class="col-md-7 form-control-plaintext">
														<div class="location">:
															<span><?= $key->penempatan; ?></span>
														</div>
													</div>
												</div>

												<div class="row pl-3">
													<label class="col-6 col-md-4 col-form-label">Deskripsi Pekerjaan</label>
													<div class="col-md-7 form-control-plaintext">:
														<?= $key->deskripsi_pekerjaan; ?>
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
													<?php
													$jumlah_pelamar = $this->db->query("SELECT id_lamaran FROM lamaran WHERE pekerjaan = $key->id_joblist ")->num_rows(); ?>
													<h2 class="card-title" style="margin-bottom:0px;"><?= $jumlah_pelamar; ?></h2>
													<p class="card-text" style="margin-bottom:0px;">Pelamar</p>
													<em class="card-text"><?= $diff->days; ?> Hari Lagi</em>
													<?php } ?>
												</div>
												<?php
												$id_akun = $this->session->userdata('id_akun');
												$id_akun_cpy = $this->session->userdata('id_akun_cpy');
												$role = $this->session->userdata('role_user');
												if (empty($id_akun)) {
													if (!(empty($id_akun_cpy))) {
														// do nothing
													}
													else { ?>
														<a href="" class="card-footer btn btn-primary" data-toggle="modal" data-target="#login-modal-lamar"><i class="fa fa-check-square-o mr-2"></i>Lamar</a>
												<?php	}
												}
												else {
													if ($role == "2") {
														$pekerjaan = $this->uri->segment(4);
														$cek_lamaran = $this->db->query("SELECT id_lamaran FROM lamaran WHERE id_jobseeker = (SELECT id_jobseeker FROM jobseeker WHERE id_akun = $id_akun) AND pekerjaan = $pekerjaan")->num_rows();
														if ($cek_lamaran > 0) { ?>
															<a href="<?= base_url() ?>member/karir" class="card-footer btn btn-success"><i class="fa fa-check mr-2"></i>Telah Lamar</a>
														<?php }
														else { ?>
															<!-- Button trigger modal-->
															<button type="button" class="card-footer btn btn-primary" data-toggle="modal" data-target="#modalPush"><i class="fa fa-check-square-o mr-2"></i>Lamar</button>

															<!--Modal: modalPush-->
															<div class="modal fade" id="modalPush" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
															  aria-hidden="true">
															  <div class="modal-dialog modal-notify modal-default" role="document">
															    <!--Content-->
															    <div class="modal-content text-center">
															      <!--Header-->
																		<div class="modal-header d-flex justify-content-center" style="box-shadow: 0 2px 5px 0 rgba(0,0,0,0.16),0 2px 10px 0 rgba(0,0,0,0.12); background:#00c0ef">
															        <h5 style="color:white">Konfirmasi</h5>
															      </div>
															      <!--Body-->
															      <div class="modal-body">
															        <i class="fa fa-bell fa-4x animated rotateIn mb-4" style="padding-top:15px; color:orange;"></i>
															        <p>Apakah kamu yakin ingin melamar pekerjaan ini?</p>
															      </div>

															      <!--Footer-->
															      <div class="modal-footer flex-center">
																			<?php
																			$id_pekerjaan = $this->uri->segment(4);
																			$url =  "//{$_SERVER['HTTP_HOST']}{$_SERVER['REQUEST_URI']}";
																			$escaped_url = htmlspecialchars( $url, ENT_QUOTES, 'UTF-8' );
																			 ?>
																			<form class="" action="<?= base_url() ?>member/apply" method="post">
																				<input type="text" name="id_pekerjaan" value="<?= $id_pekerjaan; ?>" hidden>
																				<input type="text" name="url" value="<?= $escaped_url; ?>" hidden>
																				<button type="submit" class="btn btn-info">
																					<a href="<?= base_url() ?>member/apply"></a>Iya
																				</button>
																			</form>

															        <a type="button" class="btn btn-outline-info waves-effect" data-dismiss="modal">Batal</a>
															      </div>
															    </div>
															    <!--/.Content-->
															  </div>
															</div>
															<!--Modal: modalPush-->
														<?php }
													}
													else { ?>
														<a href="<?= base_url() ?>member/apply" class="card-footer btn btn-primary"><i class="fa fa-check-square-o mr-2"></i>Check</a>
													<?php }
												 } ?>

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
			<?php } ?>
		</div>
	</div>
</section>


<?php
$info = $this->session->flashdata('info');
if(!empty($info))
{
 echo $info;
}
?>

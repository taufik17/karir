<?php $this->load->view('member/konten_header') ?>
<section class="section-gap">
	<div class="container" style="transform: none;">
		<div class="row" style="transform: none;">
			<div class="col-md-3 sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">
				<!-- Filter vacancy -->

				<!-- Sidebar Banner -->

				<div class="theiaStickySidebar" style="padding-top: 1px; padding-bottom: 1px; position: static; transform: none; top: 0px; left: 30px;"><div class="vac-search box-shadow bg-white rounded mt-4 mb-4">
					<h5 class="p-2 rounded-top text-white orange text-center"><strong>Cari Lowongan Buka</strong></h5>

					<form id="form_search_sidebar" class="p-2" action="/vacancy/site/index" method="GET">

						<input type="hidden" id="input_search_active" name="search" value="1">

						<div class="form-group">
							<input type="text" class="form-control" id="" placeholder="Cari Lowongan/Perusahaan" value="" name="global_search">
						</div>

						<div class="form-group">

							<select id="w0" class="form-control select2-hidden-accessible" name="arr_function[]" multiple="" size="4" data-s2-options="s2options_c4acac00" data-krajee-select2="select2_79de91c4" style="display:none" tabindex="-1" aria-hidden="true">

							</select><span class="select2 select2-container select2-container--krajee select2-container--below" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Cari Jenis Posisi..." style="width: 237px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>					</div>

							<div class="form-group">

								<select class="custom-select select2 select2-hidden-accessible" name="degree" tabindex="-1" aria-hidden="true">
									<option value="">-- Semua Jenjang Pendidikan --</option>
									<option value="1">DIPLOMA (10)</option>
									<option value="2">SARJANA/S1 (207)</option>
									<option value="3">MASTER/S2 (2)</option>
									<option value="5">MINIMAL D3 (115)</option>
									<option value="6">MINIMAL S1 (90)</option>
									<option value="8">MINIMAL SMA/SMK/SEDERAJAT (6)</option>
									<option value="0">SMA/SMK/SEDERAJAT (0)</option>
									<option value="4">DOKTOR/S3 (0)</option>
									<option value="7">MINIMAL S2 (0)</option>
								</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 239px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-degree-tf-container"><span class="select2-selection__rendered" id="select2-degree-tf-container" title="-- Semua Jenjang Pendidikan --">-- Semua Jenjang Pendidikan --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>					</div>

								<div class="form-group">

									<select class="custom-select select2 select2-hidden-accessible" name="type_contract" tabindex="-1" aria-hidden="true">
										<option value="">-- Semua Jenis lowongan --</option>
										<option value="1">FULLTIME (426)</option>
										<option value="2">PARTTIME (2)</option>
										<option value="5">MAGANG (2)</option>
										<option value="3">BEASISWA (0)</option>
										<option value="4">SUKARELA (0)</option>
									</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 239px;"><span class="selection"><span class="select2-selection select2-selection--single" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="0" aria-labelledby="select2-type_contract-1z-container"><span class="select2-selection__rendered" id="select2-type_contract-1z-container" title="-- Semua Jenis lowongan --">-- Semua Jenis lowongan --</span><span class="select2-selection__arrow" role="presentation"><b role="presentation"></b></span></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>					</div>

									<div class="form-group">
										<select id="w1" class="form-control select2-hidden-accessible" name="arr_major[]" multiple="" size="4" data-s2-options="s2options_c4acac00" data-krajee-select2="select2_a3ee971a" style="display:none" tabindex="-1" aria-hidden="true">

										</select><span class="select2 select2-container select2-container--krajee" dir="ltr" style="width: 100%;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="Cari Jurusan..." style="width: 237px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>					</div>
										<div class="form-group">

											<select class="custom-select select2 select2-hidden-accessible" name="arr_placement[]" multiple="" size="4" placeholder="-- Semua Penempatan --" tabindex="-1" aria-hidden="true">
												<option value="2:999">SUMATERA UTARA (8)</option>
												<option value="5:999">RIAU (7)</option>
												<option value="7:999">SUMATERA SELATAN (1)</option>
												<option value="8:999">LAMPUNG (2)</option>
												<option value="9:999">KEPULAUAN BANGKA BELITUNG (5)</option>
												<option value="11:159">BANTEN - KOTA TANGERANG (4)</option>
												<option value="12:999">JAWA BARAT (28)</option>
												<option value="13:999">DKI JAKARTA (44)</option>
												<option value="14:225">JAWA TENGAH - KOTA SEMARANG (34)</option>
												<option value="15:251">JAWA TIMUR - KABUPATEN SIDOARJO (49)</option>
												<option value="16:999">DAERAH ISTIMEWA YOGYAKARTA (21)</option>
												<option value="21:326">KALIMANTAN SELATAN - KABUPATEN BANJAR (1)</option>
												<option value="22:999">KALIMANTAN TENGAH (9)</option>
												<option value="23:999">KALIMANTAN TIMUR (9)</option>
												<option value="25:999">SULAWESI SELATAN (2)</option>
												<option value="30:999">MALUKU (1)</option>
												<option value="1:999">ACEH (0)</option>
												<option value="3:999">BENGKULU (0)</option>
												<option value="4:999">JAMBI (0)</option>
												<option value="6:999">SUMATERA BARAT (0)</option>
												<option value="10:999">KEPULAUAN RIAU (0)</option>
												<option value="17:999">BALI (0)</option>
												<option value="18:999">NUSA TENGGARA BARAT (0)</option>
												<option value="19:999">NUSA TENGGARA TIMUR (0)</option>
												<option value="20:999">KALIMANTAN BARAT (0)</option>
												<option value="24:999">GORONTALO (0)</option>
												<option value="26:999">SULAWESI TENGGARA (0)</option>
												<option value="27:999">SULAWESI TENGAH (0)</option>
												<option value="28:999">SULAWESI UTARA (0)</option>
												<option value="29:999">SULAWESI BARAT (0)</option>
												<option value="31:999">MALUKU UTARA (0)</option>
												<option value="32:999">PAPUA (0)</option>
												<option value="33:999">PAPUA BARAT (0)</option>
												<option value="34:999">KALIMANTAN UTARA (0)</option>
											</select><span class="select2 select2-container select2-container--default" dir="ltr" style="width: 239px;"><span class="selection"><span class="select2-selection select2-selection--multiple" role="combobox" aria-haspopup="true" aria-expanded="false" tabindex="-1"><ul class="select2-selection__rendered"><li class="select2-search select2-search--inline"><input class="select2-search__field" type="search" tabindex="0" autocomplete="off" autocorrect="off" autocapitalize="none" spellcheck="false" role="textbox" aria-autocomplete="list" placeholder="-- Semua Penempatan --" style="width: 237px;"></li></ul></span></span><span class="dropdown-wrapper" aria-hidden="true"></span></span>					</div>

											<button type="submit" class="btn green text-white center rounded btn-sm h-100" disabled="disabled">Cari</button>

										</form>				</div><div class="mb-4">
											<!-- Sidebar Banner -->



										</div></div></div>

										<div class="vacancy-list col-md-9" id="printThisViewIndex">
											<div class="summary row align-items-center mt-4">
												<div class="col-sm-8 col-md-8 text-right">
													<span class="text-muted mr-3">Menampilkan 1 - 10 dari 1514 Online Vacancies</span>
												</div>

												<div class="col-sm-4 col-md-4 text-right">
												</div>
											</div>

											<div id="accordion" class="list-view">
												<div class="sep row box-shadow mt-3 ml-3 mr-3">
													<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
														<a class="comp-logo col-md-2 pl-0 pr-3" href="/company/site/view/702">
															<img class="box-shadow p-1" src="https://ecc.co.id/public/employer_logo/78791/small_1394006690abyor.png" alt="PT Abyor International962">
														</a>
														<div>
															<h5 class="m-0"><a href="/company/site/view/702" class="txt-dark-blue"><strong>PT Abyor International</strong></a></h5>
															<span class="d-block txt-dark-blue">Tangerang, Indonesia</span>
															<p class="mb-1 mt-1">PT Abyor International (ABYOR) is an official SAP Partner for Services, Channel, Software Solutions, and SAP Implementation and SAP Operation &amp; Support
																Founded by SAP veterans ...</p>
																<span class="txt-gray">Tayang sejak: 2 Hari yang lalu</span>
															</div>
														</div>
														<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
															<div class="w-100">
																<span class="summary">5<span>Lowongan</span></span>
																<a title="Lihat posisi lowongan" class="w-75 btn text-white orange btn-default mt-2 collapsed" data-toggle="collapse" href="#list-position-1" role="button" aria-expanded="false" aria-controls="list-position-1"><span class="view" style="display: inline;"></span><span class="closed" style="display: none;"></span></a>
															</div>
														</div>
													</div>
													<div class="list-position mr-4 ml-4 collapse" id="list-position-1" data-parent="#accordion" style="">
														<div>
															<nav>
																<div class="nav nav-tabs" id="nav-tab" role="tablist">
																	<a class="nav-item nav-link" id="nav-open-tab-1" data-toggle="tab" href="#nav-open-1" role="tab" aria-controls="nav-open-1" aria-selected="false">Lowongan Buka</a>
																	<a class="nav-item nav-link active show" id="nav-close-tab-1" data-toggle="tab" href="#nav-close-1" role="tab" aria-controls="nav-close-1" aria-selected="true">Lowongan Tutup</a>
																</div>
															</nav>
															<div class="tab-content vac-list" id="nav-tabContent">

																<!-- list open position vacancy -->
																<div class="tab-pane fade" id="nav-open-1" role="tabpanel" aria-labelledby="nav-open-tab-1">
																	<div class="list d-flex">
																		<span class="txt-orange col-1 text-right p-2">1.</span>
																		<a href="/vacancy/site/view?vid=23693&amp;title=lowongan-pt-abyor-international-sap-technical-consultant-abap-programming&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23693" name="lowongan-pt-abyor-international-sap-technical-consultant-abap-programming" title="Lihat lebih detil untuk melamar posisi ini">SAP Technical Consultant (ABAP Programming)</a>
																		<span class="applicants col-lg-2 col-md-3 p-2">15 Pelamar</span>
																		<span class="validdate col-lg-2 col-md-3 p-2">27 hari lagi</span>
																	</div>
																	<div class="list d-flex">
																		<span class="txt-orange col-1 text-right p-2">2.</span>
																		<a href="/vacancy/site/view?vid=23694&amp;title=lowongan-pt-abyor-international-sap-functional-consultant-financial-controlling-fico&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23694" name="lowongan-pt-abyor-international-sap-functional-consultant-financial-controlling-fico" title="Lihat lebih detil untuk melamar posisi ini">SAP Functional Consultant Financial &amp; Controlling (FICO)</a>
																		<span class="applicants col-lg-2 col-md-3 p-2">78 Pelamar</span>
																		<span class="validdate col-lg-2 col-md-3 p-2">27 hari lagi</span>
																	</div>
																	<div class="list d-flex">
																		<span class="txt-orange col-1 text-right p-2">3.</span>
																		<a href="/vacancy/site/view?vid=23695&amp;title=lowongan-pt-abyor-international-sap-business-intelligence-bi-business-object-bo&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23695" name="lowongan-pt-abyor-international-sap-business-intelligence-bi-business-object-bo" title="Lihat lebih detil untuk melamar posisi ini">SAP Business intelligence (BI) Business Object (BO)</a>
																		<span class="applicants col-lg-2 col-md-3 p-2">20 Pelamar</span>
																		<span class="validdate col-lg-2 col-md-3 p-2">27 hari lagi</span>
																	</div>
																	<div class="list d-flex">
																		<span class="txt-orange col-1 text-right p-2">4.</span>
																		<a href="/vacancy/site/view?vid=23696&amp;title=lowongan-pt-abyor-international-sap-business-planning-and-consolidation-bpc&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23696" name="lowongan-pt-abyor-international-sap-business-planning-and-consolidation-bpc" title="Lihat lebih detil untuk melamar posisi ini">SAP Business Planning and Consolidation (BPC)</a>
																		<span class="applicants col-lg-2 col-md-3 p-2">34 Pelamar</span>
																		<span class="validdate col-lg-2 col-md-3 p-2">27 hari lagi</span>
																	</div>
																	<div class="list d-flex">
																		<span class="txt-orange col-1 text-right p-2">5.</span>
																		<a href="/vacancy/site/view?vid=23697&amp;title=lowongan-pt-abyor-international-sap-functional-consultant-material-management-mm&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23697" name="lowongan-pt-abyor-international-sap-functional-consultant-material-management-mm" title="Lihat lebih detil untuk melamar posisi ini">SAP Functional Consultant Material Management (MM)</a>
																		<span class="applicants col-lg-2 col-md-3 p-2">72 Pelamar</span>
																		<span class="validdate col-lg-2 col-md-3 p-2">27 hari lagi</span>
																	</div>
																</div>

																<!-- list closed position vacancy -->
																<div class="tab-pane fade active show" id="nav-close-1" role="tabpanel" aria-labelledby="nav-close-tab-1">
																	<div class="list d-flex">
																		<span class="txt-orange col-1 text-right p-2">1.</span>
																		<a href="/vacancy/site/view?vid=13322&amp;title=lowongan-pt-abyor-international-sap-technical-consultant-abap&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">SAP Technical Consultant (ABAP)</a>
																		<span class="applicants col-lg-2 col-md-3 p-2">202 Pelamar</span>
																		<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																	</div>
																	<div class="list d-flex">
																		<span class="txt-orange col-1 text-right p-2">2.</span>
																		<a href="/vacancy/site/view?vid=13323&amp;title=lowongan-pt-abyor-international-sap-functional-consultant-functional&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">SAP Functional Consultant (Functional)</a>
																		<span class="applicants col-lg-2 col-md-3 p-2">639 Pelamar</span>
																		<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																	</div>
																	<div class="list d-flex">
																		<span class="txt-orange col-1 text-right p-2">3.</span>
																		<a href="/vacancy/site/view?vid=8464&amp;title=lowongan-pt-abyor-international-sap-fico-consultant-financial-accounting-and-controlling&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">SAP FICO Consultant (Financial Accounting and Controlling)</a>
																		<span class="applicants col-lg-2 col-md-3 p-2">109 Pelamar</span>
																		<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																	</div>
																	<div class="list d-flex">
																		<span class="txt-orange col-1 text-right p-2">4.</span>
																		<a href="/vacancy/site/view?vid=8465&amp;title=lowongan-pt-abyor-international-sap-functional-consultant&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">SAP Functional Consultant</a>
																		<span class="applicants col-lg-2 col-md-3 p-2">214 Pelamar</span>
																		<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																	</div>
																	<div class="list d-flex">
																		<span class="txt-orange col-1 text-right p-2">5.</span>
																		<a href="/vacancy/site/view?vid=8466&amp;title=lowongan-pt-abyor-international-sap-technical-consultant-abapbasisbibo&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">SAP Technical Consultant (ABAP/BASIS/BIBO)</a>
																		<span class="applicants col-lg-2 col-md-3 p-2">133 Pelamar</span>
																		<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																	</div>
																</div>
															</div>
														</div>
													</div>
													<div class="sep row box-shadow mt-3 ml-3 mr-3">
														<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
															<a class="comp-logo col-md-2 pl-0 pr-3" href="/company/site/view/908">
																<img class="box-shadow p-1" src="https://ecc.co.id/public/employer_logo/138170/small_1394009882Deepublish.png" alt="Penerbit Deepublish1457">
															</a>
															<div>
																<h5 class="m-0"><a href="/company/site/view/908" class="txt-dark-blue"><strong>Penerbit Deepublish</strong></a></h5>
																<span class="d-block txt-dark-blue">Sleman, Indonesia</span>
																<p class="mb-1 mt-1">Dengan visi "Mencerdaskan dan memuliakan umat manusia dengan
																	"penyediaan" serta "pemanfaatan" ilmu pengetahuan dan teknologi" penerbit Deepublish Pada tanggal 17 desember 2010 Pe ...</p>
																	<span class="txt-gray">Tayang sejak: 3 Hari yang lalu</span>
																</div>
															</div>
															<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
																<div class="w-100">
																	<span class="summary">9<span>Lowongan</span></span>
																	<a title="Lihat posisi lowongan" class="w-75 btn text-white orange btn-default mt-2 collapsed" data-toggle="collapse" href="#list-position-2" role="button" aria-expanded="false" aria-controls="list-position-2"><span class="view" style="display: inline;"></span><span class="closed" style="display: none;"></span></a>
																</div>
															</div>
														</div>
														<div class="list-position collapse mr-4 ml-4" id="list-position-2" data-parent="#accordion">
															<div>
																<nav>
																	<div class="nav nav-tabs" id="nav-tab" role="tablist">
																		<a class="nav-item nav-link active" id="nav-open-tab-2" data-toggle="tab" href="#nav-open-2" role="tab" aria-controls="nav-open-2" aria-selected="true">Lowongan Buka</a>
																		<a class="nav-item nav-link" id="nav-close-tab-2" data-toggle="tab" href="#nav-close-2" role="tab" aria-controls="nav-close-2" aria-selected="false">Lowongan Tutup</a>
																	</div>
																</nav>
																<div class="tab-content vac-list" id="nav-tabContent">

																	<!-- list open position vacancy -->
																	<div class="tab-pane fade show active" id="nav-open-2" role="tabpanel" aria-labelledby="nav-open-tab-2">
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">1.</span>
																			<a href="/vacancy/site/view?vid=23348&amp;title=lowongan-penerbit-deepublish-administrasi-keuangan&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23348" name="lowongan-penerbit-deepublish-administrasi-keuangan" title="Lihat lebih detil untuk melamar posisi ini">Administrasi Keuangan </a>
																			<span class="applicants col-lg-2 col-md-3 p-2">91 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">11 hari lagi</span>
																		</div>
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">2.</span>
																			<a href="/vacancy/site/view?vid=23349&amp;title=lowongan-penerbit-deepublish-internship-human-capital&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23349" name="lowongan-penerbit-deepublish-internship-human-capital" title="Lihat lebih detil untuk melamar posisi ini">Internship Human Capital</a>
																			<span class="applicants col-lg-2 col-md-3 p-2">103 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">11 hari lagi</span>
																		</div>
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">3.</span>
																			<a href="/vacancy/site/view?vid=23350&amp;title=lowongan-penerbit-deepublish-marketing-executive&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23350" name="lowongan-penerbit-deepublish-marketing-executive" title="Lihat lebih detil untuk melamar posisi ini">Marketing Executive</a>
																			<span class="applicants col-lg-2 col-md-3 p-2">64 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">11 hari lagi</span>
																		</div>
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">4.</span>
																			<a href="/vacancy/site/view?vid=23351&amp;title=lowongan-penerbit-deepublish-social-media-specialist&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23351" name="lowongan-penerbit-deepublish-social-media-specialist" title="Lihat lebih detil untuk melamar posisi ini">Social Media Specialist </a>
																			<span class="applicants col-lg-2 col-md-3 p-2">118 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">11 hari lagi</span>
																		</div>
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">5.</span>
																			<a href="/vacancy/site/view?vid=23352&amp;title=lowongan-penerbit-deepublish-content-creative-creator&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23352" name="lowongan-penerbit-deepublish-content-creative-creator" title="Lihat lebih detil untuk melamar posisi ini">Content Creative Creator</a>
																			<span class="applicants col-lg-2 col-md-3 p-2">18 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">11 hari lagi</span>
																		</div>
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">6.</span>
																			<a href="/vacancy/site/view?vid=23353&amp;title=lowongan-penerbit-deepublish-staff-produksi&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23353" name="lowongan-penerbit-deepublish-staff-produksi" title="Lihat lebih detil untuk melamar posisi ini">Staff Produksi</a>
																			<span class="applicants col-lg-2 col-md-3 p-2">96 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">11 hari lagi</span>
																		</div>
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">7.</span>
																			<a href="/vacancy/site/view?vid=23690&amp;title=lowongan-penerbit-deepublish-design-grafis-parttime&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23690" name="lowongan-penerbit-deepublish-design-grafis-parttime" title="Lihat lebih detil untuk melamar posisi ini">Design Grafis (Parttime)</a>
																			<span class="applicants col-lg-2 col-md-3 p-2">2 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">28 hari lagi</span>
																		</div>
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">8.</span>
																			<a href="/vacancy/site/view?vid=23691&amp;title=lowongan-penerbit-deepublish-seo-specialist&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23691" name="lowongan-penerbit-deepublish-seo-specialist" title="Lihat lebih detil untuk melamar posisi ini">SEO Specialist</a>
																			<span class="applicants col-lg-2 col-md-3 p-2">11 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">28 hari lagi</span>
																		</div>
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">9.</span>
																			<a href="/vacancy/site/view?vid=23692&amp;title=lowongan-penerbit-deepublish-account-receivable-officer-aro&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23692" name="lowongan-penerbit-deepublish-account-receivable-officer-aro" title="Lihat lebih detil untuk melamar posisi ini">Account Receivable Officer (ARO) </a>
																			<span class="applicants col-lg-2 col-md-3 p-2">58 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">28 hari lagi</span>
																		</div>
																	</div>

																	<!-- list closed position vacancy -->
																	<div class="tab-pane fade" id="nav-close-2" role="tabpanel" aria-labelledby="nav-close-tab-2">
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">1.</span>
																			<a href="/vacancy/site/view?vid=13316&amp;title=lowongan-penerbit-deepublish-sales-field&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Sales Field</a>
																			<span class="applicants col-lg-2 col-md-3 p-2">171 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																		</div>
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">2.</span>
																			<a href="/vacancy/site/view?vid=15645&amp;title=lowongan-penerbit-deepublish-progammer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Progammer</a>
																			<span class="applicants col-lg-2 col-md-3 p-2">58 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																		</div>
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">3.</span>
																			<a href="/vacancy/site/view?vid=15646&amp;title=lowongan-penerbit-deepublish-operator-mesin-fotocopy&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Operator Mesin Fotocopy</a>
																			<span class="applicants col-lg-2 col-md-3 p-2">95 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																		</div>
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">4.</span>
																			<a href="/vacancy/site/view?vid=9247&amp;title=lowongan-penerbit-deepublish-marketing-online&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Marketing Online</a>
																			<span class="applicants col-lg-2 col-md-3 p-2">32 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																		</div>
																		<div class="list d-flex">
																			<span class="txt-orange col-1 text-right p-2">5.</span>
																			<a href="/vacancy/site/view?vid=15647&amp;title=lowongan-penerbit-deepublish-freelance-content-writer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Freelance Content Writer</a>
																			<span class="applicants col-lg-2 col-md-3 p-2">248 Pelamar</span>
																			<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																		</div>
																	</div>
																</div>
															</div>
														</div>
														<div class="sep row box-shadow mt-3 ml-3 mr-3">
															<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
																<a class="comp-logo col-md-2 pl-0 pr-3" href="/company/site/view/179">
																	<img class="box-shadow p-1" src="https://ecc.co.id/public/employer_logo/12187/small_1390291672Triputra-Group.png" alt="TRIPUTRA GROUP273">
																</a>
																<div>
																	<h5 class="m-0"><a href="/company/site/view/179" class="txt-dark-blue"><strong>TRIPUTRA GROUP</strong></a></h5>
																	<span class="d-block txt-dark-blue">-, Indonesia</span>
																	<p class="mb-1 mt-1">Triputra Group is a fast-growing company with more than 60,000
																		employees. The Group focuses in four major industries – Agribusiness,
																		Coal &amp; Mining, Manufacturing,&nbsp; L ...</p>
																		<span class="txt-gray">Tayang sejak: 3 Hari yang lalu</span>
																	</div>
																</div>
																<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
																	<div class="w-100">
																		<span class="summary">4<span>Lowongan</span></span>
																		<a title="Lihat posisi lowongan" class="w-75 btn text-white orange btn-default mt-2 collapsed" data-toggle="collapse" href="#list-position-3" role="button" aria-expanded="false" aria-controls="list-position-3"><span class="view" style="display: inline;"></span><span class="closed" style="display: none;"></span></a>
																	</div>
																</div>
															</div>
															<div class="list-position collapse mr-4 ml-4" id="list-position-3" data-parent="#accordion">
																<div>
																	<nav>
																		<div class="nav nav-tabs" id="nav-tab" role="tablist">
																			<a class="nav-item nav-link active" id="nav-open-tab-3" data-toggle="tab" href="#nav-open-3" role="tab" aria-controls="nav-open-3" aria-selected="true">Lowongan Buka</a>
																			<a class="nav-item nav-link" id="nav-close-tab-3" data-toggle="tab" href="#nav-close-3" role="tab" aria-controls="nav-close-3" aria-selected="false">Lowongan Tutup</a>
																		</div>
																	</nav>
																	<div class="tab-content vac-list" id="nav-tabContent">

																		<!-- list open position vacancy -->
																		<div class="tab-pane fade show active" id="nav-open-3" role="tabpanel" aria-labelledby="nav-open-tab-3">
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">1.</span>
																				<a href="/vacancy/site/view?vid=23686&amp;title=lowongan-triputra-group-management-trainee-operation&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23686" name="lowongan-triputra-group-management-trainee-operation" title="Lihat lebih detil untuk melamar posisi ini">MANAGEMENT TRAINEE – OPERATION</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">320 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">27 hari lagi</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">2.</span>
																				<a href="/vacancy/site/view?vid=23687&amp;title=lowongan-triputra-group-management-trainee-human-capital&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23687" name="lowongan-triputra-group-management-trainee-human-capital" title="Lihat lebih detil untuk melamar posisi ini">MANAGEMENT TRAINEE – HUMAN CAPITAL</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">195 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">27 hari lagi</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">3.</span>
																				<a href="/vacancy/site/view?vid=23688&amp;title=lowongan-triputra-group-anteraja-acceleration-program&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23688" name="lowongan-triputra-group-anteraja-acceleration-program" title="Lihat lebih detil untuk melamar posisi ini">Anteraja Acceleration Program</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">83 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">27 hari lagi</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">4.</span>
																				<a href="/vacancy/site/view?vid=23689&amp;title=lowongan-triputra-group-management-trainee-pt-kedai-sayur-indonesia&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23689" name="lowongan-triputra-group-management-trainee-pt-kedai-sayur-indonesia" title="Lihat lebih detil untuk melamar posisi ini">MANAGEMENT TRAINEE (PT KEDAI SAYUR INDONESIA)</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">512 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">27 hari lagi</span>
																			</div>
																		</div>

																		<!-- list closed position vacancy -->
																		<div class="tab-pane fade" id="nav-close-3" role="tabpanel" aria-labelledby="nav-close-tab-3">
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">1.</span>
																				<a href="/vacancy/site/view?vid=780&amp;title=lowongan-triputra-group-vacancies-career-days-ugm-viii-triputra-group&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Vacancies @ Career Days UGM VIII Triputra Group</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">0 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">2.</span>
																				<a href="/vacancy/site/view?vid=1167&amp;title=lowongan-triputra-group-vacancies-career-days-ugm-ix-triputra-group&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Vacancies @ Career Days UGM IX Triputra Group</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">0 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">3.</span>
																				<a href="/vacancy/site/view?vid=7610&amp;title=lowongan-triputra-group-vacancy-4th-graduation-fair-management-trainee&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Vacancy @ 4th Graduation Fair - Management Trainee</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">1121 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">4.</span>
																				<a href="/vacancy/site/view?vid=7611&amp;title=lowongan-triputra-group-vacancy-4th-graduation-fair-hr-staff-amp-admin&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Vacancy @ 4th Graduation Fair - HR Staff &amp; Admin</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">265 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">5.</span>
																				<a href="/vacancy/site/view?vid=4568&amp;title=lowongan-triputra-group-internal-audit&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Internal Audit</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">2 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="sep row box-shadow mt-3 ml-3 mr-3">
																<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
																	<a class="comp-logo col-md-2 pl-0 pr-3" href="/company/site/view/738">
																		<img class="box-shadow p-1" src="https://ecc.co.id/public/employer_logo/85508/small_1399608539sari_husada.jpg" alt="PT Sari Husada Generasi Mahardika1041">
																	</a>
																	<div>
																		<h5 class="m-0"><a href="/company/site/view/738" class="txt-dark-blue"><strong>PT Sari Husada Generasi Mahardika</strong></a></h5>
																		<span class="d-block txt-dark-blue">Yogyakarta, Indonesia</span>
																		<p class="mb-1 mt-1">Sari Husada established in Yogyakarta under the name of NV Saridele on 1954 as initiative from UNICEF and Indonesian government to overcome malnutrition problem at that time. Sari  ...</p>
																		<span class="txt-gray">Tayang sejak: 3 Hari yang lalu</span>
																	</div>
																</div>
																<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
																	<div class="w-100">
																		<span class="summary">4<span>Lowongan</span></span>
																		<a title="Lihat posisi lowongan" class="w-75 btn text-white orange btn-default mt-2 collapsed" data-toggle="collapse" href="#list-position-4" role="button" aria-expanded="false" aria-controls="list-position-4"><span class="view" style="display: inline;"></span><span class="closed" style="display: none;"></span></a>
																	</div>
																</div>
															</div>
															<div class="list-position collapse mr-4 ml-4" id="list-position-4" data-parent="#accordion">
																<div>
																	<nav>
																		<div class="nav nav-tabs" id="nav-tab" role="tablist">
																			<a class="nav-item nav-link active" id="nav-open-tab-4" data-toggle="tab" href="#nav-open-4" role="tab" aria-controls="nav-open-4" aria-selected="true">Lowongan Buka</a>
																			<a class="nav-item nav-link" id="nav-close-tab-4" data-toggle="tab" href="#nav-close-4" role="tab" aria-controls="nav-close-4" aria-selected="false">Lowongan Tutup</a>
																		</div>
																	</nav>
																	<div class="tab-content vac-list" id="nav-tabContent">

																		<!-- list open position vacancy -->
																		<div class="tab-pane fade show active" id="nav-open-4" role="tabpanel" aria-labelledby="nav-open-tab-4">
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">1.</span>
																				<a href="/vacancy/site/view?vid=23683&amp;title=lowongan-pt-sari-husada-generasi-mahardika-operator-produksi&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23683" name="lowongan-pt-sari-husada-generasi-mahardika-operator-produksi" title="Lihat lebih detil untuk melamar posisi ini">OPERATOR PRODUKSI</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">71 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">16 hari lagi</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">2.</span>
																				<a href="/vacancy/site/view?vid=23684&amp;title=lowongan-pt-sari-husada-generasi-mahardika-project-support&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23684" name="lowongan-pt-sari-husada-generasi-mahardika-project-support" title="Lihat lebih detil untuk melamar posisi ini">PROJECT SUPPORT</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">109 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">16 hari lagi</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">3.</span>
																				<a href="/vacancy/site/view?vid=23685&amp;title=lowongan-pt-sari-husada-generasi-mahardika-production-operator&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23685" name="lowongan-pt-sari-husada-generasi-mahardika-production-operator" title="Lihat lebih detil untuk melamar posisi ini">Production Operator</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">147 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">16 hari lagi</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">4.</span>
																				<a href="/vacancy/site/view?vid=23487&amp;title=lowongan-pt-sari-husada-generasi-mahardika-production-supervisor&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23487" name="lowongan-pt-sari-husada-generasi-mahardika-production-supervisor" title="Lihat lebih detil untuk melamar posisi ini">PRODUCTION SUPERVISOR</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">869 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">16 hari lagi</span>
																			</div>
																		</div>

																		<!-- list closed position vacancy -->
																		<div class="tab-pane fade" id="nav-close-4" role="tabpanel" aria-labelledby="nav-close-tab-4">
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">1.</span>
																				<a href="/vacancy/site/view?vid=4877&amp;title=lowongan-pt-sari-husada-generasi-mahardika-production-supervisor&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Production Supervisor</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">6 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">2.</span>
																				<a href="/vacancy/site/view?vid=4878&amp;title=lowongan-pt-sari-husada-generasi-mahardika-utility-engineer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Utility Engineer</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">1 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">3.</span>
																				<a href="/vacancy/site/view?vid=13838&amp;title=lowongan-pt-sari-husada-generasi-mahardika-continues-improvement-supervisor&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Continues Improvement Supervisor</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">1161 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">4.</span>
																				<a href="/vacancy/site/view?vid=4879&amp;title=lowongan-pt-sari-husada-generasi-mahardika-maintenance-supervisor&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Maintenance Supervisor</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">1 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">5.</span>
																				<a href="/vacancy/site/view?vid=13839&amp;title=lowongan-pt-sari-husada-generasi-mahardika-waste-water-treatment-wwtp-operator&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Waste Water Treatment (WWTP) Operator</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">190 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="sep row box-shadow mt-3 ml-3 mr-3">
																<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
																	<a class="comp-logo col-md-2 pl-0 pr-3" href="/company/site/view/448">
																		<img class="box-shadow p-1" src="https://ecc.co.id/public/employer_logo/42166/small_1415327670honda.png" alt="PT Honda Prospect Motor 623">
																	</a>
																	<div>
																		<h5 class="m-0"><a href="/company/site/view/448" class="txt-dark-blue"><strong>PT Honda Prospect Motor </strong></a></h5>
																		<span class="d-block txt-dark-blue">-, Indonesia</span>
																		<p class="mb-1 mt-1">PT. Honda Prospect Motor, Sole Agent, Assembler of Honda Automobiles &amp; Component. ...</p>
																		<span class="txt-gray">Tayang sejak: 3 Hari yang lalu</span>
																	</div>
																	<div class="event col-md-3 pr-0 pl-3 d-flex align-items-center h-100">
																		<a href="https://ecc.co.id/event/cdugm26" target="_blank">
																			<img src="https://ecc.co.id/public/event/careerdays/vacancy_bg/cdugm26.png" alt="event_logo.png">
																		</a>
																	</div>
																</div>
																<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
																	<div class="w-100">
																		<span class="summary">6<span>Lowongan</span></span>
																		<a title="Lihat posisi lowongan" class="w-75 btn text-white orange btn-default mt-2 collapsed" data-toggle="collapse" href="#list-position-5" role="button" aria-expanded="false" aria-controls="list-position-5"><span class="view" style="display: inline;"></span><span class="closed" style="display: none;"></span></a>
																	</div>
																</div>
															</div>
															<div class="list-position collapse mr-4 ml-4" id="list-position-5" data-parent="#accordion">
																<div>
																	<nav>
																		<div class="nav nav-tabs" id="nav-tab" role="tablist">
																			<a class="nav-item nav-link active" id="nav-open-tab-5" data-toggle="tab" href="#nav-open-5" role="tab" aria-controls="nav-open-5" aria-selected="true">Lowongan Buka</a>
																			<a class="nav-item nav-link" id="nav-close-tab-5" data-toggle="tab" href="#nav-close-5" role="tab" aria-controls="nav-close-5" aria-selected="false">Lowongan Tutup</a>
																		</div>
																	</nav>
																	<div class="tab-content vac-list" id="nav-tabContent">

																		<!-- list open position vacancy -->
																		<div class="tab-pane fade show active" id="nav-open-5" role="tabpanel" aria-labelledby="nav-open-tab-5">
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">1.</span>
																				<a href="/vacancy/site/view?vid=23330&amp;title=lowongan-pt-honda-prospect-motor-compliance-litigation-staff&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23330" name="lowongan-pt-honda-prospect-motor-compliance-litigation-staff" title="Lihat lebih detil untuk melamar posisi ini">Compliance &amp; Litigation Staff</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">136 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">11 hari lagi</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">2.</span>
																				<a href="/vacancy/site/view?vid=23331&amp;title=lowongan-pt-honda-prospect-motor-quality-production-staff&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23331" name="lowongan-pt-honda-prospect-motor-quality-production-staff" title="Lihat lebih detil untuk melamar posisi ini">Quality Production Staff</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">439 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">11 hari lagi</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">3.</span>
																				<a href="/vacancy/site/view?vid=23332&amp;title=lowongan-pt-honda-prospect-motor-production-engineering-staff&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23332" name="lowongan-pt-honda-prospect-motor-production-engineering-staff" title="Lihat lebih detil untuk melamar posisi ini">Production Engineering Staff</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">516 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">11 hari lagi</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">4.</span>
																				<a href="/vacancy/site/view?vid=23333&amp;title=lowongan-pt-honda-prospect-motor-purchasing-cost-staff&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23333" name="lowongan-pt-honda-prospect-motor-purchasing-cost-staff" title="Lihat lebih detil untuk melamar posisi ini">Purchasing Cost Staff</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">302 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">11 hari lagi</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">5.</span>
																				<a href="/vacancy/site/view?vid=23681&amp;title=lowongan-pt-honda-prospect-motor-26th-career-days-counseling-staff&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23681" name="lowongan-pt-honda-prospect-motor-26th-career-days-counseling-staff" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Counseling Staff</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">51 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">6.</span>
																				<a href="/vacancy/site/view?vid=23682&amp;title=lowongan-pt-honda-prospect-motor-26th-career-days-information-technology-staff&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23682" name="lowongan-pt-honda-prospect-motor-26th-career-days-information-technology-staff" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Information Technology Staff</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">56 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																			</div>
																		</div>

																		<!-- list closed position vacancy -->
																		<div class="tab-pane fade" id="nav-close-5" role="tabpanel" aria-labelledby="nav-close-tab-5">
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">1.</span>
																				<a href="/vacancy/site/view?vid=12568&amp;title=lowongan-pt-honda-prospect-motor-vacancy-7th-graduation-fair-factory-strategic-planning-staff&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Vacancy @7th Graduation Fair - Factory Strategic Planning Staff</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">55 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">2.</span>
																				<a href="/vacancy/site/view?vid=12569&amp;title=lowongan-pt-honda-prospect-motor-vacancy-7th-graduation-fair-quality-control-staff&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Vacancy @7th Graduation Fair - Quality Control Staff</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">106 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">3.</span>
																				<a href="/vacancy/site/view?vid=12570&amp;title=lowongan-pt-honda-prospect-motor-vacancy-7th-graduation-fair-frame-production-staff&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Vacancy @7th Graduation Fair - Frame Production Staff</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">99 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">4.</span>
																				<a href="/vacancy/site/view?vid=12571&amp;title=lowongan-pt-honda-prospect-motor-vacancy-7th-graduation-fair-engine-production-staff&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Vacancy @7th Graduation Fair - Engine Production Staff</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">181 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">5.</span>
																				<a href="/vacancy/site/view?vid=12572&amp;title=lowongan-pt-honda-prospect-motor-vacancy-7th-graduation-fair-purchasing-staff&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Vacancy @7th Graduation Fair - Purchasing Staff</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">194 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																			</div>
																		</div>
																	</div>
																</div>
															</div>
															<div class="sep row box-shadow mt-3 ml-3 mr-3">
																<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
																	<a class="comp-logo col-md-2 pl-0 pr-3" href="/company/site/view/22361">
																		<img class="box-shadow p-1" src="https://ecc.co.id/public/employer_logo/572186/small_1566526742LOGO SMELTING sq.jpg" alt="PT. SMELTING3009">
																	</a>
																	<div>
																		<h5 class="m-0"><a href="/company/site/view/22361" class="txt-dark-blue"><strong>PT. SMELTING</strong></a></h5>
																		<span class="d-block txt-dark-blue">Gresik, Indonesia</span>
																		<p class="mb-1 mt-1">PT Smelting was established in February 1996 as the first copper smelter and refinery in Indonesia with approximately US $500 million for direct construction cost.&nbsp;The plant w ...</p>
																		<span class="txt-gray">Tayang sejak: 3 Hari yang lalu</span>
																	</div>
																</div>
																<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
																	<div class="w-100">
																		<span class="summary">1<span>Lowongan</span></span>
																		<a title="Lihat posisi lowongan" class="w-75 btn text-white orange btn-default mt-2 collapsed" data-toggle="collapse" href="#list-position-6" role="button" aria-expanded="false" aria-controls="list-position-6"><span class="view" style="display: inline;"></span><span class="closed" style="display: none;"></span></a>
																	</div>
																</div>
															</div>
															<div class="list-position collapse mr-4 ml-4" id="list-position-6" data-parent="#accordion">
																<div>
																	<nav>
																		<div class="nav nav-tabs" id="nav-tab" role="tablist">
																			<a class="nav-item nav-link active" id="nav-open-tab-6" data-toggle="tab" href="#nav-open-6" role="tab" aria-controls="nav-open-6" aria-selected="true">Lowongan Buka</a>
																			<a class="nav-item nav-link" id="nav-close-tab-6" data-toggle="tab" href="#nav-close-6" role="tab" aria-controls="nav-close-6" aria-selected="false">Lowongan Tutup</a>
																		</div>
																	</nav>
																	<div class="tab-content vac-list" id="nav-tabContent">

																		<!-- list open position vacancy -->
																		<div class="tab-pane fade show active" id="nav-open-6" role="tabpanel" aria-labelledby="nav-open-tab-6">
																			<div class="list d-flex">
																				<span class="txt-orange col-1 text-right p-2">1.</span>
																				<a href="/vacancy/site/view?vid=23680&amp;title=lowongan-pt-smelting-mechanical-engineer-eng-mech&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23680" name="lowongan-pt-smelting-mechanical-engineer-eng-mech" title="Lihat lebih detil untuk melamar posisi ini">Mechanical Engineer (ENG ~ MECH)</a>
																				<span class="applicants col-lg-2 col-md-3 p-2">392 Pelamar</span>
																				<span class="validdate col-lg-2 col-md-3 p-2">27 hari lagi</span>
																			</div>
																		</div>

																		<!-- list closed position vacancy -->
																		<div class="tab-pane fade" id="nav-close-6" role="tabpanel" aria-labelledby="nav-close-tab-6">
																			<span class="text-center d-block p-3 font-italic">Tidak ada lowongan tutup</span>                                                                                                                                                    </div>
																		</div>
																	</div>
																</div>
																<div class="sep row box-shadow mt-3 ml-3 mr-3">
																	<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
																		<a class="comp-logo col-md-2 pl-0 pr-3" href="/company/site/view/1413">
																			<img class="box-shadow p-1" src="https://ecc.co.id/public/employer_logo/286125/small_1519355063pssTbk.png" alt="PT. Pelita Samudera Shipping, Tbk1992">
																		</a>
																		<div>
																			<h5 class="m-0"><a href="/company/site/view/1413" class="txt-dark-blue"><strong>PT. Pelita Samudera Shipping, Tbk</strong></a></h5>
																			<span class="d-block txt-dark-blue">Jakarta Barat, Indonesia</span>
																			<p class="mb-1 mt-1">


																				Established in 2007, we at PT. Pelita Samudera Shipping, Tbk (PSS) provide integrated logistic and shipping solutions mainly to the coal mining companies in Indonesia.  ...</p>
																				<span class="txt-gray">Tayang sejak: 3 Hari yang lalu</span>
																			</div>
																			<div class="event col-md-3 pr-0 pl-3 d-flex align-items-center h-100">
																				<a href="https://ecc.co.id/event/cdugm26" target="_blank">
																					<img src="https://ecc.co.id/public/event/careerdays/vacancy_bg/cdugm26.png" alt="event_logo.png">
																				</a>
																			</div>
																		</div>
																		<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
																			<div class="w-100">
																				<span class="summary">1<span>Lowongan</span></span>
																				<a title="Lihat posisi lowongan" class="w-75 btn text-white orange btn-default mt-2 collapsed" data-toggle="collapse" href="#list-position-7" role="button" aria-expanded="false" aria-controls="list-position-7"><span class="view" style="display: inline;"></span><span class="closed" style="display: none;"></span></a>
																			</div>
																		</div>
																	</div>
																	<div class="list-position collapse mr-4 ml-4" id="list-position-7" data-parent="#accordion">
																		<div>
																			<nav>
																				<div class="nav nav-tabs" id="nav-tab" role="tablist">
																					<a class="nav-item nav-link active" id="nav-open-tab-7" data-toggle="tab" href="#nav-open-7" role="tab" aria-controls="nav-open-7" aria-selected="true">Lowongan Buka</a>
																					<a class="nav-item nav-link" id="nav-close-tab-7" data-toggle="tab" href="#nav-close-7" role="tab" aria-controls="nav-close-7" aria-selected="false">Lowongan Tutup</a>
																				</div>
																			</nav>
																			<div class="tab-content vac-list" id="nav-tabContent">

																				<!-- list open position vacancy -->
																				<div class="tab-pane fade show active" id="nav-open-7" role="tabpanel" aria-labelledby="nav-open-tab-7">
																					<div class="list d-flex">
																						<span class="txt-orange col-1 text-right p-2">1.</span>
																						<a href="/vacancy/site/view?vid=23679&amp;title=lowongan-pt-pelita-samudera-shipping-tbk-26th-career-days-graduate-development-program-gdp&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23679" name="lowongan-pt-pelita-samudera-shipping-tbk-26th-career-days-graduate-development-program-gdp" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Graduate Development Program (GDP)</a>
																						<span class="applicants col-lg-2 col-md-3 p-2">728 Pelamar</span>
																						<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																					</div>
																				</div>

																				<!-- list closed position vacancy -->
																				<div class="tab-pane fade" id="nav-close-7" role="tabpanel" aria-labelledby="nav-close-tab-7">
																					<div class="list d-flex">
																						<span class="txt-orange col-1 text-right p-2">1.</span>
																						<a href="/vacancy/site/view?vid=20010&amp;title=lowongan-pt-pelita-samudera-shipping-tbk-23rd-career-days-graduate-development-program-gdp-imc-plantations&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">23rd Career Days - Graduate Development Program (GDP) - IMC Plantations</a>
																						<span class="applicants col-lg-2 col-md-3 p-2">445 Pelamar</span>
																						<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																					</div>
																					<div class="list d-flex">
																						<span class="txt-orange col-1 text-right p-2">2.</span>
																						<a href="/vacancy/site/view?vid=20011&amp;title=lowongan-pt-pelita-samudera-shipping-tbk-23rd-career-days-graduate-development-program-gdp-pt-pelita-samudera-shipping-tbk&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">23rd Career Days - Graduate Development Program (GDP) - PT. Pelita Samudera Shipping, Tbk</a>
																						<span class="applicants col-lg-2 col-md-3 p-2">3980 Pelamar</span>
																						<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																					</div>
																				</div>
																			</div>
																		</div>
																	</div>
																	<div class="sep row box-shadow mt-3 ml-3 mr-3">
																		<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
																			<a class="comp-logo col-md-2 pl-0 pr-3" href="/company/site/view/6415">
																				<img class="box-shadow p-1" src="https://ecc.co.id/public/employer_logo/559416/small_1560307207Logo K5s.png" alt="PT Kwadran Lima Indonesia2940">
																			</a>
																			<div>
																				<h5 class="m-0"><a href="/company/site/view/6415" class="txt-dark-blue"><strong>PT Kwadran Lima Indonesia</strong></a></h5>
																				<span class="d-block txt-dark-blue">Tangerang, Indonesia</span>
																				<p class="mb-1 mt-1">PT. Kwadran Lima Indonesia is an IT Consultant Company that focus on
																					Implementing Microsoft Enterprise technology solution. Providing high
																					level expertice in microsoft .net Tec ...</p>
																					<span class="txt-gray">Tayang sejak: 3 Hari yang lalu</span>
																				</div>
																			</div>
																			<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
																				<div class="w-100">
																					<span class="summary">4<span>Lowongan</span></span>
																					<a title="Lihat posisi lowongan" class="w-75 btn text-white orange btn-default mt-2 collapsed" data-toggle="collapse" href="#list-position-8" role="button" aria-expanded="false" aria-controls="list-position-8"><span class="view" style="display: inline;"></span><span class="closed" style="display: none;"></span></a>
																				</div>
																			</div>
																		</div>
																		<div class="list-position collapse mr-4 ml-4" id="list-position-8" data-parent="#accordion">
																			<div>
																				<nav>
																					<div class="nav nav-tabs" id="nav-tab" role="tablist">
																						<a class="nav-item nav-link active" id="nav-open-tab-8" data-toggle="tab" href="#nav-open-8" role="tab" aria-controls="nav-open-8" aria-selected="true">Lowongan Buka</a>
																						<a class="nav-item nav-link" id="nav-close-tab-8" data-toggle="tab" href="#nav-close-8" role="tab" aria-controls="nav-close-8" aria-selected="false">Lowongan Tutup</a>
																					</div>
																				</nav>
																				<div class="tab-content vac-list" id="nav-tabContent">

																					<!-- list open position vacancy -->
																					<div class="tab-pane fade show active" id="nav-open-8" role="tabpanel" aria-labelledby="nav-open-tab-8">
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">1.</span>
																							<a href="/vacancy/site/view?vid=23674&amp;title=lowongan-pt-kwadran-lima-indonesia-quality-assurance-software-testersoftware-tester&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23674" name="lowongan-pt-kwadran-lima-indonesia-quality-assurance-software-testersoftware-tester" title="Lihat lebih detil untuk melamar posisi ini">QUALITY ASSURANCE / SOFTWARE TESTER/SOFTWARE TESTER</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">69 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">25 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">2.</span>
																							<a href="/vacancy/site/view?vid=23675&amp;title=lowongan-pt-kwadran-lima-indonesia-net-developer-programmer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23675" name="lowongan-pt-kwadran-lima-indonesia-net-developer-programmer" title="Lihat lebih detil untuk melamar posisi ini">.NET DEVELOPER /Programmer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">11 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">25 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">3.</span>
																							<a href="/vacancy/site/view?vid=23677&amp;title=lowongan-pt-kwadran-lima-indonesia-mobile-android-developerandroid-ios-programmer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23677" name="lowongan-pt-kwadran-lima-indonesia-mobile-android-developerandroid-ios-programmer" title="Lihat lebih detil untuk melamar posisi ini">MOBILE ANDROID DEVELOPER/Android iOS Programmer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">11 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">25 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">4.</span>
																							<a href="/vacancy/site/view?vid=23678&amp;title=lowongan-pt-kwadran-lima-indonesia-php-developerprogrammer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23678" name="lowongan-pt-kwadran-lima-indonesia-php-developerprogrammer" title="Lihat lebih detil untuk melamar posisi ini">PHP DEVELOPER/Programmer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">15 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">25 hari lagi</span>
																						</div>
																					</div>

																					<!-- list closed position vacancy -->
																					<div class="tab-pane fade" id="nav-close-8" role="tabpanel" aria-labelledby="nav-close-tab-8">
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">1.</span>
																							<a href="/vacancy/site/view?vid=23016&amp;title=lowongan-pt-kwadran-lima-indonesia-net-developer-programmer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">.NET DEVELOPER /Programmer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">9 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">2.</span>
																							<a href="/vacancy/site/view?vid=23017&amp;title=lowongan-pt-kwadran-lima-indonesia-mobile-android-developerandroid-ios-programmer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">MOBILE ANDROID DEVELOPER/Android iOS Programmer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">10 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">3.</span>
																							<a href="/vacancy/site/view?vid=23018&amp;title=lowongan-pt-kwadran-lima-indonesia-php-developerprogrammer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">PHP DEVELOPER/Programmer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">10 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">4.</span>
																							<a href="/vacancy/site/view?vid=23019&amp;title=lowongan-pt-kwadran-lima-indonesia-quality-assurance-software-testersoftware-tester&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">QUALITY ASSURANCE / SOFTWARE TESTER/SOFTWARE TESTER</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">77 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">5.</span>
																							<a href="/vacancy/site/view?vid=23235&amp;title=lowongan-pt-kwadran-lima-indonesia-php-developerprogrammer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">PHP DEVELOPER/Programmer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">24 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="sep row box-shadow mt-3 ml-3 mr-3">
																			<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
																				<a class="comp-logo col-md-2 pl-0 pr-3" href="/company/site/view/720">
																					<img class="box-shadow p-1" src="https://ecc.co.id/public/employer_logo/81261/small_pt._bank_central_asia,_tbk.jpg" alt="PT Bank Central Asia, Tbk991">
																				</a>
																				<div>
																					<h5 class="m-0"><a href="/company/site/view/720" class="txt-dark-blue"><strong>PT Bank Central Asia, Tbk</strong></a></h5>
																					<span class="d-block txt-dark-blue">-, Indonesia</span>
																					<p class="mb-1 mt-1">PT. Bank Central Asia, Tbk. (BCA) merupakan salah satu bank terkemuka di Indonesia. BCA memiliki lebih dari 11 juta rekening nasabah yang dilayani oleh 966 cabang dan 10.487 ATM ya ...</p>
																					<span class="txt-gray">Tayang sejak: 3 Hari yang lalu</span>
																				</div>
																				<div class="event col-md-3 pr-0 pl-3 d-flex align-items-center h-100">
																					<a href="https://ecc.co.id/event/cdugm26" target="_blank">
																						<img src="https://ecc.co.id/public/event/careerdays/vacancy_bg/cdugm26.png" alt="event_logo.png">
																					</a>
																				</div>
																			</div>
																			<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
																				<div class="w-100">
																					<span class="summary">6<span>Lowongan</span></span>
																					<a title="Lihat posisi lowongan" class="w-75 btn text-white orange btn-default mt-2 collapsed" data-toggle="collapse" href="#list-position-9" role="button" aria-expanded="false" aria-controls="list-position-9"><span class="view" style="display: inline;"></span><span class="closed" style="display: none;"></span></a>
																				</div>
																			</div>
																		</div>
																		<div class="list-position collapse mr-4 ml-4" id="list-position-9" data-parent="#accordion">
																			<div>
																				<nav>
																					<div class="nav nav-tabs" id="nav-tab" role="tablist">
																						<a class="nav-item nav-link active" id="nav-open-tab-9" data-toggle="tab" href="#nav-open-9" role="tab" aria-controls="nav-open-9" aria-selected="true">Lowongan Buka</a>
																						<a class="nav-item nav-link" id="nav-close-tab-9" data-toggle="tab" href="#nav-close-9" role="tab" aria-controls="nav-close-9" aria-selected="false">Lowongan Tutup</a>
																					</div>
																				</nav>
																				<div class="tab-content vac-list" id="nav-tabContent">

																					<!-- list open position vacancy -->
																					<div class="tab-pane fade show active" id="nav-open-9" role="tabpanel" aria-labelledby="nav-open-tab-9">
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">1.</span>
																							<a href="/vacancy/site/view?vid=23475&amp;title=lowongan-pt-bank-central-asia-tbk-26th-career-days-program-account-officer-pao&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23475" name="lowongan-pt-bank-central-asia-tbk-26th-career-days-program-account-officer-pao" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Program Account Officer (PAO)</a>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">2.</span>
																							<a href="/vacancy/site/view?vid=23476&amp;title=lowongan-pt-bank-central-asia-tbk-26th-career-days-program-relationship-officer-pro&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23476" name="lowongan-pt-bank-central-asia-tbk-26th-career-days-program-relationship-officer-pro" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Program Relationship Officer (PRO)</a>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">3.</span>
																							<a href="/vacancy/site/view?vid=23477&amp;title=lowongan-pt-bank-central-asia-tbk-26th-career-days-program-junior-business-analyst&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23477" name="lowongan-pt-bank-central-asia-tbk-26th-career-days-program-junior-business-analyst" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Program Junior Business Analyst</a>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">4.</span>
																							<a href="/vacancy/site/view?vid=23478&amp;title=lowongan-pt-bank-central-asia-tbk-26th-career-days-bca-it-trainee-bit&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23478" name="lowongan-pt-bank-central-asia-tbk-26th-career-days-bca-it-trainee-bit" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - BCA IT Trainee (BIT)</a>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">5.</span>
																							<a href="/vacancy/site/view?vid=23479&amp;title=lowongan-pt-bank-central-asia-tbk-26th-career-days-staf-it&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23479" name="lowongan-pt-bank-central-asia-tbk-26th-career-days-staf-it" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Staf IT</a>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">6.</span>
																							<a href="/vacancy/site/view?vid=23480&amp;title=lowongan-pt-bank-central-asia-tbk-26th-career-days-staf-kantor-pusat&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23480" name="lowongan-pt-bank-central-asia-tbk-26th-career-days-staf-kantor-pusat" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Staf Kantor Pusat</a>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																					</div>

																					<!-- list closed position vacancy -->
																					<div class="tab-pane fade" id="nav-close-9" role="tabpanel" aria-labelledby="nav-close-tab-9">
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">1.</span>
																							<a href="/vacancy/site/view?vid=6414&amp;title=lowongan-pt-bank-central-asia-tbk-vacancy-career-days-ugm-xiii-bca-development-program&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Vacancy @ Career Days UGM XIII - BCA Development Program</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">1448 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">2.</span>
																							<a href="/vacancy/site/view?vid=6415&amp;title=lowongan-pt-bank-central-asia-tbk-vacancy-career-days-ugm-xiii-permagangan-bakti-bca&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">Vacancy @ Career Days UGM XIII - Permagangan Bakti BCA</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">340 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">3.</span>
																							<a href="/vacancy/site/view?vid=12060&amp;title=lowongan-pt-bank-central-asia-tbk-16th-career-days-ugm-bca-development-program&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">16th Career Days UGM - BCA Development Program</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">597 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">4.</span>
																							<a href="/vacancy/site/view?vid=12062&amp;title=lowongan-pt-bank-central-asia-tbk-16th-career-days-ugm-mt-it&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">16th Career Days UGM - MT-IT</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">115 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">5.</span>
																							<a href="/vacancy/site/view?vid=12064&amp;title=lowongan-pt-bank-central-asia-tbk-16th-career-days-ugm-staf-kantor-pusat&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">16th Career Days UGM - Staf Kantor Pusat</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">527 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>
																		<div class="sep row box-shadow mt-3 ml-3 mr-3">
																			<div class="col-lg-10 col-md-9 profile d-flex align-items-start p-2">
																				<a class="comp-logo col-md-2 pl-0 pr-3" href="/company/site/view/1449">
																					<img class="box-shadow p-1" src="https://ecc.co.id/public/employer_logo/321960/small_1565236221logohomecredit.png" alt="PT Home Credit Indonesia2033">
																				</a>
																				<div>
																					<h5 class="m-0"><a href="/company/site/view/1449" class="txt-dark-blue"><strong>PT Home Credit Indonesia</strong></a></h5>
																					<span class="d-block txt-dark-blue">Jakarta Selatan, Indonesia</span>
																					<p class="mb-1 mt-1">Home Credit mulai berdiri di Indonesia pada tahun 2012 di area Jakarta. Tidak lama berselang, bisnis kami berkembang di Bandung, Surabaya, Makassar, Yogyakarta dan Semarang. Kami j ...</p>
																					<span class="txt-gray">Tayang sejak: 3 Hari yang lalu</span>
																				</div>
																				<div class="event col-md-3 pr-0 pl-3 d-flex align-items-center h-100">
																					<a href="https://ecc.co.id/event/cdugm26" target="_blank">
																						<img src="https://ecc.co.id/public/event/careerdays/vacancy_bg/cdugm26.png" alt="event_logo.png">
																					</a>
																				</div>
																			</div>
																			<div class="col-lg-2 col-md-3 position text-center d-flex align-items-center p-2">
																				<div class="w-100">
																					<span class="summary">12<span>Lowongan</span></span>
																					<a title="Lihat posisi lowongan" class="w-75 btn text-white orange btn-default mt-2" data-toggle="collapse" href="#list-position-10" role="button" aria-expanded="true" aria-controls="list-position-10"><span class="view" style="display: none;"></span><span class="closed" style="display: inline;"></span></a>
																				</div>
																			</div>
																		</div>
																		<div class="list-position mr-4 ml-4 collapse show" id="list-position-10" data-parent="#accordion" style="">
																			<div>
																				<nav>
																					<div class="nav nav-tabs" id="nav-tab" role="tablist">
																						<a class="nav-item nav-link active" id="nav-open-tab-10" data-toggle="tab" href="#nav-open-10" role="tab" aria-controls="nav-open-10" aria-selected="true">Lowongan Buka</a>
																						<a class="nav-item nav-link" id="nav-close-tab-10" data-toggle="tab" href="#nav-close-10" role="tab" aria-controls="nav-close-10" aria-selected="false">Lowongan Tutup</a>
																					</div>
																				</nav>
																				<div class="tab-content vac-list" id="nav-tabContent">

																					<!-- list open position vacancy -->
																					<div class="tab-pane fade show active" id="nav-open-10" role="tabpanel" aria-labelledby="nav-open-tab-10">
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">1.</span>
																							<a href="/vacancy/site/view?vid=23662&amp;title=lowongan-pt-home-credit-indonesia-26th-career-days-it-prodigi&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23662" name="lowongan-pt-home-credit-indonesia-26th-career-days-it-prodigi" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - IT ProDIGI</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">1 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">2.</span>
																							<a href="/vacancy/site/view?vid=23663&amp;title=lowongan-pt-home-credit-indonesia-26th-career-days-java-developer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23663" name="lowongan-pt-home-credit-indonesia-26th-career-days-java-developer" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Java Developer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">1 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">3.</span>
																							<a href="/vacancy/site/view?vid=23664&amp;title=lowongan-pt-home-credit-indonesia-26th-career-days-android-developer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23664" name="lowongan-pt-home-credit-indonesia-26th-career-days-android-developer" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Android Developer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">7 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">4.</span>
																							<a href="/vacancy/site/view?vid=23665&amp;title=lowongan-pt-home-credit-indonesia-26th-career-days-ios-developer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23665" name="lowongan-pt-home-credit-indonesia-26th-career-days-ios-developer" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - iOS Developer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">2 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">5.</span>
																							<a href="/vacancy/site/view?vid=23666&amp;title=lowongan-pt-home-credit-indonesia-26th-career-days-data-engineer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23666" name="lowongan-pt-home-credit-indonesia-26th-career-days-data-engineer" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Data Engineer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">2 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">6.</span>
																							<a href="/vacancy/site/view?vid=23667&amp;title=lowongan-pt-home-credit-indonesia-26th-career-days-data-scientist&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23667" name="lowongan-pt-home-credit-indonesia-26th-career-days-data-scientist" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Data Scientist</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">7 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">7.</span>
																							<a href="/vacancy/site/view?vid=23668&amp;title=lowongan-pt-home-credit-indonesia-26th-career-days-jr-product-analyst&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23668" name="lowongan-pt-home-credit-indonesia-26th-career-days-jr-product-analyst" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Jr Product Analyst</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">19 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">8.</span>
																							<a href="/vacancy/site/view?vid=23669&amp;title=lowongan-pt-home-credit-indonesia-26th-career-days-desk-collection-trainer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23669" name="lowongan-pt-home-credit-indonesia-26th-career-days-desk-collection-trainer" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Desk Collection Trainer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">59 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">9.</span>
																							<a href="/vacancy/site/view?vid=23670&amp;title=lowongan-pt-home-credit-indonesia-26th-career-days-collection-data-analyst&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23670" name="lowongan-pt-home-credit-indonesia-26th-career-days-collection-data-analyst" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Collection Data Analyst</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">29 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">10.</span>
																							<a href="/vacancy/site/view?vid=23671&amp;title=lowongan-pt-home-credit-indonesia-26th-career-days-dialer-officer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23671" name="lowongan-pt-home-credit-indonesia-26th-career-days-dialer-officer" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Dialer Officer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">12 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">11.</span>
																							<a href="/vacancy/site/view?vid=23672&amp;title=lowongan-pt-home-credit-indonesia-26th-career-days-sales-trainer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23672" name="lowongan-pt-home-credit-indonesia-26th-career-days-sales-trainer" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Sales Trainer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">19 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">12.</span>
																							<a href="/vacancy/site/view?vid=23673&amp;title=lowongan-pt-home-credit-indonesia-26th-career-days-sales-quality-assurance&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn" data-target="#detailvacancy" id="23673" name="lowongan-pt-home-credit-indonesia-26th-career-days-sales-quality-assurance" title="Lihat lebih detil untuk melamar posisi ini">26th Career Days - Sales Quality Assurance</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">35 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">7 hari lagi</span>
																						</div>
																					</div>

																					<!-- list closed position vacancy -->
																					<div class="tab-pane fade" id="nav-close-10" role="tabpanel" aria-labelledby="nav-close-tab-10">
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">1.</span>
																							<a href="/vacancy/site/view?vid=18535&amp;title=lowongan-pt-home-credit-indonesia-22nd-career-days-it-web-developer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">22nd Career Days - IT Web Developer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">7 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">2.</span>
																							<a href="/vacancy/site/view?vid=18536&amp;title=lowongan-pt-home-credit-indonesia-22nd-career-days-it-data-engineer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">22nd Career Days - IT Data Engineer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">8 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">3.</span>
																							<a href="/vacancy/site/view?vid=18537&amp;title=lowongan-pt-home-credit-indonesia-22nd-career-days-it-net-developer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">22nd Career Days - IT .NET Developer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">3 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">4.</span>
																							<a href="/vacancy/site/view?vid=18538&amp;title=lowongan-pt-home-credit-indonesia-22nd-career-days-business-intelligence-developer&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">22nd Career Days - Business Intelligence Developer</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">71 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																						<div class="list d-flex">
																							<span class="txt-orange col-1 text-right p-2">5.</span>
																							<a href="/vacancy/site/view?vid=18539&amp;title=lowongan-pt-home-credit-indonesia-22nd-career-days-business-intelligence-analyst&amp;modal=show" class="txt-orange col-lg-7 col-md-5 p-2 detailbtn">22nd Career Days - Business Intelligence Analyst</a>
																							<span class="applicants col-lg-2 col-md-3 p-2">151 Pelamar</span>
																							<span class="validdate col-lg-2 col-md-3 p-2">Tutup</span>
																						</div>
																					</div>
																				</div>
																			</div>
																		</div>

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

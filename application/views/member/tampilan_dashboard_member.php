<?php foreach ($data->result() as $row )?>
<?php $this->load->view('member/konten_header') ?>

<section class="service-area section-member" id="service">
	<div class="container">
		<div class="position-relative box-shadow">
			<div class="row box-member m-0" style="background: linear-gradient(to top, rgba(100, 100, 100, 0.7),
			rgba(0, 0, 0, 0)), url(<?= base_url() ?>assets/gambar/member/sampul/<?= $row->sampul; ?>); background-size: cover;" >
			<div class="col-md-8 d-flex text-white align-self-end">
				<div class="align-items-center d-flex">
					<div class="btn-group position-relative">
						<span id="profileid" style="display:none;">1</span>
						<a href="#" class="prof-pic" role="button" id="photoMenu" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
							<img class="rounded-circle prof-img" src="<?= base_url() ?>assets/gambar/member/profil/<?= $row->foto; ?>" alt="<?= $row->Nama_jobseeker; ?>" width="85">
						</a>
						<div class="dropdown-menu p-0" aria-labelledby="photoMenu">
							<input type="file" name="upload-photo" id="upload-photo" class="input-file-post" onchange="readURLpostpropic(this);" href="/member/site/uploadprofpic" accept="image/*">
							<label for="upload-photo" class="d-block text-center p-2 border-bottom small">Unggah Foto</label>
							<button id="removeImage" class="dropdown-item dropdown-item text-center p-2 border-bottom small" type="button">Hapus</button>
							<button class="dropdown-item dropdown-item text-center p-2 border-bottom small" type="button">Batal</button>
						</div>
					</div>
				</div>
				<div class="pl-4 profile">
					<h4 class="text-white ml-2 mb-0"><strong><?= $row->Nama_jobseeker ?></strong></h4>
		</div>
	</div>
	<div class="col-md-4">
		<div class="d-flex align-items-end flex-column h-100">
			<input type="file" name="upload-img-cover" id="upload-img-cover" class="d-none" onchange="readURLpostcoverimg(this);" href="/member/site/uploadcoverimg" accept="image/*">
			<label for="upload-img-cover" class="mb-auto btn update-cover-btn btn-default">Ubah Sampul</label>
			<!-- <button class="btn blue text-white btn-default">Promosikan Diri</button> -->
		</div>
	</div>
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light rounded-bottom">
	<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenuContent" aria-controls="navbarMenuContent" aria-expanded="false" aria-label="Toggle navigation">
		<span class="navbar-toggler-icon"></span>
	</button>
	<div class="collapse navbar-collapse " id="navbarMenuContent">
		<ul class="navbar-nav mr-auto d-flex w-100 justify-content-between">
			<li class="nav-item active">
				<a class="nav-link" href="/member/profile/taufiksan">Profil</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="/member/site/resume">Karier Saya</a>
			</li>
			<li class="nav-item ">
				<a class="nav-link" href="/event/member/index">Event Saya</a>
			</li>

		</ul>
	</div>
</nav>
</div>
</div>
</section>

<section class="contents container-fluid mt-3" style="transform: none;">
        <div class="container" style="transform: none;">
            <div id="content" class="row" style="transform: none;">
                <div class="col-lg-5 col-md-12" style="transform: none;">
                    <div class="sidebar" style="position: relative; overflow: visible; box-sizing: border-box; min-height: 1px;">

                                                <!-- Sidebar Banner -->





                    <div class="theiaStickySidebar" style="padding-top: 0px; padding-bottom: 1px; position: static; transform: none; left: 119.5px; top: 0px;"><div class="box-shadow bg-white rounded mb-3">
                            <div class="row p-3">
                                                                <div class="col-md-11">
                                    <h5 class="m-0 font-weight-bold text-muted">Pendidikan Terakhir</h5>
                                    <a class="txt-blue" href="#">-</a>
                                </div>
                                <div class="col-md-1">
                                                                            <!--<a href=""><i class="fas fa-pencil-alt"></i></a>-->
                                                                    </div>
                            </div>
                            <div class="row p-3">
                                                                <div class="col-md-11">
                                    <h5 class="m-0 font-weight-bold text-muted">Pekerjaan Terakhir</h5>
                                    <a class="txt-blue" href="#">-</a>
                                </div>
                                <div class="col-md-1">
                                                                            <!--<a href=""><i class="fas fa-pencil-alt"></i></a>-->
                                                                    </div>
                            </div>
                            <div class="row p-3">
                                <div class="col-md-11">
                                    <h5 class="m-0 font-weight-bold text-muted">Alamat</h5>
                                    <p>-</p>
                                </div>
                                <div class="col-md-1">
                                                                            <!--<a href=""><i class="fas fa-pencil-alt"></i></a>-->
                                                                    </div>
                            </div>
                                                                                                            </div><div class="footer-sidebar box-shadow bg-white rounded my-4 p-2">
                            <div class="container px-2">
                                <ul class="row justify-content-center">
                                    <li>
                                        <a class="btn btn-text btn-xs dropdown-toggle p-1" href="#" role="button" id="dropdownPersonal" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Personal<i class="fas fa-chevron-down ml-1"></i></a>
                                        <div class="dropdown-menu p-0" aria-labelledby="dropdownPersonal">
                                            <a class="dropdown-item small pl-2 pr-2" href="/cb/member/index">CareerBuddy</a>
                                            <a class="dropdown-item small pl-2 pr-2" href="/vacancy/site/index">Career</a>
                                            <a class="dropdown-item small pl-2 pr-2" href="/assessment/site/online?type=personality-style">Online Assessment</a>
                                            <a class="dropdown-item small pl-2 pr-2" href="/counseling/online/site/index">Counseling</a>
                                                                                    </div>
                                    </li>
                                    <li>
                                        <a class="btn btn-text btn-xs dropdown-toggle p-1" href="#" role="button" id="dropdownEnterprise" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Enterprise<i class="fas fa-chevron-down ml-1"></i></a>
                                        <div class="dropdown-menu p-0" aria-labelledby="dropdownEnterprise">
                                                                                        <a class="dropdown-item small pl-2 pr-2" href="/site/hcs">Human Capital Services</a>
                                        </div>
                                    </li>
                                                                                                            <li>
                                        <a href="/site/faq" class="btn btn-text btn-xs p-1">FAQ</a>
                                    </li>
                                    <li>
                                        <a href="/site/contact" class="btn btn-text btn-xs p-1">Contact Us</a>
                                    </li>
                                </ul>
                                <div class="text-center border-top pt-1 mt-1">
                                    <span class="text-muted small">Engineering Career Center © 2019</span>
                                </div>
                                                            </div>
                        </div><div class="resize-sensor" style="position: absolute; left: 0px; top: 0px; right: 0px; bottom: 0px; overflow: hidden; z-index: -1; visibility: hidden;"><div class="resize-sensor-expand" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0px; top: 0px; transition: all 0s ease 0s; width: 455px; height: 329px;"></div></div><div class="resize-sensor-shrink" style="position: absolute; left: 0; top: 0; right: 0; bottom: 0; overflow: hidden; z-index: -1; visibility: hidden;"><div style="position: absolute; left: 0; top: 0; transition: 0s; width: 200%; height: 200%"></div></div></div></div></div>
                </div>
                <div class="col-lg-7 col-md-12 main-content">
                                            <div class="tab-content">
                            <div class="tab-pane fade show active" id="profile" role="tabpanel" aria-labelledby="profile-tab">
                                <div class="mb-3 p-2 box-shadow rounded alert alert-warning">
                                    Hai <b>taufik agung santoso</b>, selamat datang di aplikasi upgrad.id.
                                    Saat ini profil cv kamu belum lengkap, Ayo update cv kamu dari sekarang, agar Kamu lebih mudah mencari pekerjaan yang paling tepat. Biarkan perusahaan tahu kualifikasi dan prestasi terbaru kamu melalui cv !
                                </div>
                            </div>
                        </div>


                            <div class="my-3 p-2 box-shadow rounded bg-white text-center">
                                <a class="font-weight-bold txt-orange" href="/cv/site/index">Kelola CV</a>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="timeline" role="tabpanel" aria-labelledby="timeline-tab">
                                                    </div>
                        <div class="tab-pane fade" id="article" role="tabpanel" aria-labelledby="article-tab">Content</div>
                    </div>
                </div>


    </section>    
<?php $this->load->view('member/konten_footer') ?>
</body>
</html>

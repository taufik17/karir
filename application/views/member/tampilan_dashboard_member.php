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
							<img class="rounded-circle prof-img" src="<?= base_url() ?>assets/gambar/member/profil/<?= $row->foto; ?>" alt="<?= $row->nama_jobseeker; ?>" width="85">
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
					<h4 class="text-white ml-2 mb-0"><strong><?= $row->nama_jobseeker ?></strong></h4>
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
					<li <?= $this->uri->segment(2) == '' ? 'class="nav-item active"' : 'class="nav-item"'?>>
						<a class="nav-link" href="<?= base_url() ?>member">Profil</a>
					</li>
					<li <?= $this->uri->segment(2) == 'cv' ? 'class="nav-item active"' : 'class="nav-item"'?>>
						<a class="nav-link" href="<?= base_url() ?>member/cv">CV Saya</a>
					</li>
					<li <?= $this->uri->segment(2) == 'peminatan' ? 'class="nav-item active"' : 'class="nav-item"'?>>
						<a class="nav-link" href="<?= base_url() ?>member/peminatan">Peminatan</a>
					</li>
					<li <?= $this->uri->segment(2) == 'karir' ? 'class="nav-item active"' : 'class="nav-item"'?>>
						<a class="nav-link" href="<?= base_url() ?>member/karir">Karier Saya</a>
					</li>
					<li <?= $this->uri->segment(2) == 'event' ? 'class="nav-item active"' : 'class="nav-item"'?>>
						<a class="nav-link" href="<?= base_url() ?>member/event">Event Saya</a>
					</li>

				</ul>
			</div>
		</nav>
	</div>
</div>
</section>
<?php $this->load->view($konten); ?>
	<?php $this->load->view('member/konten_footer') ?>
</body>
</html>

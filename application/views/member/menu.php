<?php foreach ($data->result() as $row )?>
<ul class="nav-menu">
	<li <?= $this->uri->segment(1) == 'member' ? 'class="menu-active"' : 'class=""'?>>
		<a href="<?php echo base_url() ?>">
			<i class="fa fa-home fa-lg">&nbsp</i>
			Beranda
		</a>
	</li>
	<li <?= $this->uri->segment(1) == 'add_karir' ? 'class="menu-active"' : 'class=""'?>>
		<a href="<?= base_url(); ?>add_karir">
			<i class="fa fa-search-plus fa-lg">&nbsp</i>
			Karir</a>
	</li>
	<li <?= $this->uri->segment(1) == 'berita' ? 'class="menu-active"' : 'class=""'?>>
		<a href="#">
			<i class="fa fa-newspaper-o fa-lg">&nbsp</i>
			Berita</a>
	</li>

	<li <?= $this->uri->segment(1) == 'berita' ? 'class="menu-active"' : 'class=""'?>>
		<a href="<?= base_url(); ?>member/logout">
			<i class="fa fa-sign-out fa-lg">&nbsp</i>
			Logout</a>
	</li>

	<!-- <li>
		<div class="foto-profil">
			<div class="pull-left image">
				<img class="img-circle" alt="User Image" src="<?= base_url() ?>assets/gambar/member/profil/<?= $row->foto; ?>">
				<div class="dropdown-menu p-0" aria-labelledby="profil">
					<button class="dropdown-item dropdown-item text-center p-2 border-bottom small" type="button">Logout</button>
				</div>
			</div>
		</div>
	</li> -->
</ul>

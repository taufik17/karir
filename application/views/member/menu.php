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
	<li>
		<div class="foto-profil">
			<div class="pull-left image">
				<img class="img-circle" alt="User Image" src="<?= base_url() ?>assets/gambar/member/profil/<?= $row->foto; ?>">
			</div>
		</div>
	</li>
</ul>

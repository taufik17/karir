<div class="col-md-3">
	<div class="list-group">
		<a <?=$this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '' ? 'class="list-group-item aktif"' : 'class="list-group-item" '?>
			href="<?= base_url(); ?>company">
			<i class="fa fa-home tab10" aria-hidden="true"></i>
			Beranda
		</a>
		<a <?=$this->uri->segment(2) == 'listjob' ? 'class="list-group-item aktif"' : 'class="list-group-item" '?>
			href="<?= base_url(); ?>company/listjob">
			<i class="fa fa-list-alt tab10" aria-hidden="true"></i>
			List Job
		</a>
		<a <?=$this->uri->segment(2) == 'profil' ? 'class="list-group-item aktif"' : 'class="list-group-item" '?>
			href="<?= base_url(); ?>company/tambahjoblist">
			<i class="fa fa-user tab10" aria-hidden="true"></i>
			profil
		</a>
	</div>

</div>

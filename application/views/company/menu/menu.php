<ul class="sidebar-menu" data-widget="tree">
	<li class="header">MENU UTAMA</li>
	<li <?=$this->uri->segment(2) == 'Dashboard' || $this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '' ? 'class="active"' : 'class=""'?> >
		<a href="<?= base_url() ?>company">
			<i class="fa fa-dashboard"></i> <span>Dashboard</span>
		</a>
	</li>

	<li <?=$this->uri->segment(2) == 'listjob' ? 'class="active"' : 'class=""'?>>
		<a href="<?= base_url() ?>company/listjob">
			<i class="fa fa-list-alt"></i> <span>List Pekerjaan</span>
		</a>
	</li>

</ul>

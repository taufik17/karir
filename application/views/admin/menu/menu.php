<ul class="sidebar-menu" data-widget="tree">
	<li class="header">MAIN NAVIGATION</li>
	<li <?=$this->uri->segment(2) == 'Dashboard' || $this->uri->segment(2) == 'dashboard' || $this->uri->segment(2) == '' ? 'class="active"' : 'class=""'?> >
		<a href="<?= base_url() ?>admin">
			<i class="fa fa-dashboard"></i> <span>Dashboard</span>
		</a>
	</li>

	<li <?=$this->uri->segment(2) == 'industri' ? 'class="active"' : 'class=""'?>>
		<a href="<?= base_url() ?>admin/industri">
			<i class="fa fa-industry"></i> <span>Industri</span>
		</a>
	</li>

	<li <?=$this->uri->segment(2) == 'news' ? 'class="active"' : 'class=""'?> >
		<a href="#">
			<i class="fa fa-newspaper-o"></i> <span>News</span>
		</a>
	</li>

	<li <?=$this->uri->segment(2) == 'kalender_event' || $this->uri->segment(2) == 'peserta_event' ? 'class="treeview active"' : 'class="treeview"'?>>
		<a href="#">
			<i class="fa fa-bullhorn"></i> <span>Event</span>
			<span class="pull-right-container">
				<i class="fa fa-angle-left pull-right"></i>
			</span>
		</a>
		<ul class="treeview-menu">
			<li <?=$this->uri->segment(2) == 'kalender_event' ? 'class="active"' : 'class=""'?>>
				<a href="<?= base_url() ?>admin/kalender_event"><i class="fa fa-circle-o"></i> Kalender Event</a></li>
				<li <?=$this->uri->segment(2) == 'peserta_event' ? 'class="active"' : 'class=""'?>>
					<a href="<?= base_url() ?>admin/peserta_event"><i class="fa fa-circle-o"></i> Peserta Event</a></li>
				</ul>
			</li>

		</ul>

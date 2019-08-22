<ul class="nav-menu">
	<li <?=$this->uri->segment(1) == 'Beranda' || $this->uri->segment(1) == 'beranda' || $this->uri->segment(1) == '' ? 'class="menu-active"' : 'class=""'?>>
		<a href="<?php echo base_url() ?>">Home</a>
	</li>
	<li>
		<a href="#">CAREER INFORMATION</a>
	</li>
	<li>
		<a href="#">COMPANY</a>
	</li>
	<li>
		<a href="#">JOBSEEKER & STUDENT</a>
	</li>
	<li <?=$this->uri->segment(1) == 'Event' || $this->uri->segment(1) == 'event' ? 'class="menu-active"' : 'class=""'?>>
		<a href="<?= base_url() ?>event">EVENT</a>
	</li>
	<li>
		<a href="#">FAQ</a>
	</li>
</ul>

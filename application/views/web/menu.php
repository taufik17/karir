<ul class="nav-menu">
	<li <?=$this->uri->segment(1) == 'Beranda' || $this->uri->segment(1) == 'beranda' || $this->uri->segment(1) == '' ? 'class="menu-active"' : 'class=""'?>>
		<a href="<?php echo base_url() ?>">Home</a>
	</li>
	<li>
		<a href="#">CAREER INFORMATION</a>
	</li>
	<li <?=$this->uri->segment(1) == 'Event' || $this->uri->segment(1) == 'event' ? 'class="menu-active"' : 'class=""'?>>
		<a href="<?= base_url() ?>event">EVENT</a>
	</li>
	<li>
		<a href="<?= base_url() ?>faq">FAQ</a>
	</li>

	<li class="menu-has-children"><a class="ticker-btn" style="color:white">Daftar&nbsp&nbsp</a>
					<ul style="display: none;">
			<li><a href="<?php echo base_url() ?>register">JOBSEEKER</a></li>
			<li><a href="<?php echo base_url() ?>register_company">COMPANY</a></li>
					</ul>
				</li>
	<li>
		<a href="" class="ticker-btn" data-toggle="modal" data-target="#login-modal">Login</a>
	</li>
</ul>

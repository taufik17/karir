<ul class="nav-menu">
	<li <?=$this->uri->segment(1) == 'Beranda' || $this->uri->segment(1) == 'beranda' || $this->uri->segment(1) == '' ? 'class="menu-active"' : 'class=""'?>>
		<a href="<?php echo base_url() ?>">Home</a>
	</li>
	<li <?=$this->uri->segment(1) == 'carier_information' || $this->uri->segment(1) == 'Carier_information' ? 'class="menu-active"' : 'class=""'?>>
		<a href="<?= base_url() ?>carier_information">CAREER INFORMATION</a>
	</li>
	<li <?=$this->uri->segment(1) == 'Event' || $this->uri->segment(1) == 'event' ? 'class="menu-active"' : 'class=""'?>>
		<a href="<?= base_url() ?>event">EVENT</a>
	</li>
	<li <?=$this->uri->segment(1) == 'faq' || $this->uri->segment(1) == 'Faq' ? 'class="menu-active"' : 'class=""'?>>
		<a href="<?= base_url() ?>faq">FAQ</a>
	</li>

	<?php
	$role_user = $this->session->userdata('role_user');

	if ($role_user == '1') { ?>
		<li>
			<a href="<?= base_url() ?>company" class="ticker-btn">
				<i class="fa fa-dashboard">&nbsp</i>Dashboard
			</a>
		</li>
	<?php }
	else if ($role_user == '2') { ?>
		<li>
			<a href="<?= base_url() ?>member" class="ticker-btn">
				<i class="fa fa-user">&nbsp</i>Member
			</a>
		</li>
	<?php }
	else { ?>
		<li class="menu-has-children"><a class="ticker-btn" style="color:white">Daftar <i>&nbsp</i></a>
			<ul>
				<li><a href="<?php echo base_url() ?>register">JOBSEEKER</a></li>
				<li><a href="<?php echo base_url() ?>register_company">COMPANY</a></li>
			</ul>
		</li>
		<li>
			<a href="" class="ticker-btn" data-toggle="modal" data-target="#login-modal">
				<i class="fa fa-sign-in">&nbsp</i>Login
			</a>
		</li>
	<?php } ?>



</ul>

<div class="tab-pane fade show active" id="jobseeker" role="tabpanel" aria-labelledby="jobseeker-tab">
<form id="logForm">
		<div class="form-group-login">
			<input id="username" name="emailjobseeker" type="email" placeholder="Email jobseeker" class="form-control" required>
		</div>
		<div class="form-group-login">
			<input id="password" name="passwordjobseeker" type="password" placeholder="Password" class="form-control" required>
		</div>
<p class="text-center">
	<button type="submit" class="btn btn-primary py-1 px-3">&nbsp<span id="logText"></span></button>
</p>
<hr>
<p class="text-center text-muted">
	<a href="http://localhost/pariwisata/user/daftar">
		<strong style="color:green;">Daftar</strong></a> |<a href="<?php echo base_url() ?>lupapas">
			<strong style="color:red;">Lupa Sandi</strong></a> </p>

			<div id="responseDiv" class="alert text-center" style="margin-left:20px; margin-right:20px;  display:none;">
				<button type="button" class="close" id="clearMsg"><span aria-hidden="true">&times;</span></button>
				<span id="message"></span>
			</div>

		</form>
		</div>

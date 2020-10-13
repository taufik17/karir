<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Detail User
			<small>Daftar Pencari kerja dan Perusahaan</small>
		</h1>

		<ol class="breadcrumb">
			<li><a href="#"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li class="active">Detail User</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-md-6">
				<div class="box box-info" style="margin-bottom:20px;">
					<div class="box-header with-border">
						<h3 class="box-title">User Umum</h3>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table class="table table-bordered table-hover datatable" id="example1">
							<thead>
								<tr>
									<th style="text-align: center" width="5%">No</th>
									<th style="text-align: center">Nama Pelamar</th>
									<th style="text-align: center" width="20%">Detail</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 0;
								foreach ($umum->result() as $key ) {
									$no++;
									?>
									<tr>
										<td><?= $no; ?></td>
										<td><?= $key->nama_jobseeker; ?></td>
										<td>
											<a href="#"><button type="button" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></button></a>
											<a href="#"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
										</td>
									</tr>
								<?php } ?>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box box-success" style="margin-bottom:20px;">
					<div class="box-header with-border">
						<h3 class="box-title">Mahasiswa ITERA</h3>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table class="table table-bordered table-hover datatable" id="example3">
							<thead>
								<tr>
									<th style="text-align: center" width="5%">No</th>
									<th style="text-align: center">Nama Kategori Industri</th>
									<th style="text-align: center" width="20%">Edit</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>kategori</td>
									<td>edit</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box box-warning" style="margin-bottom:20px;">
					<div class="box-header with-border">
						<h3 class="box-title">Mahasiswa non ITERA</h3>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table class="table table-bordered table-hover datatable" id="example4">
							<thead>
								<tr>
									<th style="text-align: center" width="5%">No</th>
									<th style="text-align: center">Nama Kategori Industri</th>
									<th style="text-align: center" width="20%">Edit</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>1</td>
									<td>kategori</td>
									<td>edit</td>
								</tr>
							</tbody>
						</table>
					</div>
				</div>
			</div>

			<div class="col-md-6">
				<div class="box box-danger" style="margin-bottom:20px;">
					<div class="box-header with-border">
						<h3 class="box-title">Perusahaan</h3>
						<div class="box-tools pull-right">
							<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
							</button>
						</div>
					</div>
					<!-- /.box-header -->
					<div class="box-body">
						<table class="table table-bordered table-hover table-striped datatable" id="example5">
							<thead>
								<tr>
									<th style="text-align: center" width="5%">No</th>
									<th style="text-align: center">Logo</th>
									<th style="text-align: center">Nama Perusahaan</th>
									<th style="text-align: center" width="20%">Detail</th>
								</tr>
							</thead>
							<tbody>
								<?php
								$no = 0;
								foreach ($perusahaan->result() as $row) {
								$no++
								?>
									<tr>
										<td><?= $no; ?></td>
										<td>
											<img src="<?= base_url() ?>assets/gambar/company/profil/<?= $row->Logo_perusahaan; ?>" alt="Company profil" style="height:50px;">
										</td>
										<td><?= $row->Nama_perusahaan ?></td>
										<td>
											<a href="#"><button type="button" class="btn btn-info btn-xs"><i class="fa fa-eye"></i></button></a>
											<a href="#"><button type="button" class="btn btn-danger btn-xs"><i class="fa fa-trash"></i></button></a>
										</td>


									</tr>
								<?php } ?>

							</tbody>
						</table>
					</div>
				</div>
			</div>



		</div>

	</section>
</div>

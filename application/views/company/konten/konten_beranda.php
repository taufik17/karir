<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Dashboard
			<small>Informasi utama</small>
		</h1>
		<ol class="breadcrumb">
			<li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-lg-6 col-xs-6">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3><?= $pelamar; ?></h3>
						<p>Jumlah Pelamar</p>
					</div>
					<div class="icon">
						<i class="ion ion-person-stalker"></i>
					</div>
					<a href="#" class="small-box-footer">Selengkapnya <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-6 col-xs-6">
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?= $jumlah_pekerjaan; ?></h3>
						<p>Jumlah Pekerjaan</p>
					</div>
					<div class="icon">
						<i class="ion ion-briefcase"></i>
					</div>
					<a href="#" class="small-box-footer">Selengkapnya<i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>

		<!-- <div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">Data Permohonan Validasi Pekerjaan</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
			
			<div class="box-body">
				<table class="table table-bordered table-hover datatable" id="example1">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pekerjaan</th>
							<th>Perusahaan</th>
							<th>Deadline</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody id="show_list_permohonan">
					</tbody>
				</table>
			</div>
		</div> -->
	</section>
</div>

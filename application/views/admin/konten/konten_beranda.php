<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Dashboard
			<small>Informasi utama ICC</small>
		</h1>
		<ol class="breadcrumb">
			<li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
		</ol>
	</section>

	<section class="content">
		<div class="row">
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-aqua">
					<div class="inner">
						<h3><?php echo $jmlh_user_umum; ?></h3>
						<p>Jumlah User Umum</p>
					</div>
					<div class="icon">
						<i class="ion ion-university"></i>
					</div>
					<a href="<?= base_url(); ?>admin/detailuser" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-green">
					<div class="inner">
						<h3><?php echo $jmlh_mhs_itera; ?></h3>
						<p>Jumlah Mahasiswa ITERA</p>
					</div>
					<div class="icon">
						<i class="ion ion-university"></i>
					</div>
					<a href="<?= base_url(); ?>admin/detailuser" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-yellow">
					<div class="inner">
						<h3><?php echo $jmlh_mhs_non_itera; ?></h3>
						<p>Mahasiswa non ITERA</p>
					</div>
					<div class="icon">
						<i class="ion ion-university"></i>
					</div>
					<a href="<?= base_url(); ?>admin/detailuser" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
			<div class="col-lg-3 col-xs-6">
				<div class="small-box bg-red">
					<div class="inner">
						<h3><?php echo $jmlh_company; ?></h3>
						<p>Jumlah Company</p>
					</div>
					<div class="icon">
						<i class="ion-ios-briefcase"></i>
					</div>
					<a href="<?= base_url(); ?>admin/detailuser" class="small-box-footer">More info <i class="fa fa-arrow-circle-right"></i></a>
				</div>
			</div>
		</div>

		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">Data Permohonan Validasi Pekerjaan</h3>

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
		</div>
	</section>
</div>

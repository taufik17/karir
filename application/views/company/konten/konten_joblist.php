<div class="content-wrapper">
	<section class="content-header">
		<h1>
			List Pekerjaan
			<small>Tambah dan ubah pekerjaan</small>
		</h1>
		<ol class="breadcrumb">
			<li class="active"><i class="fa fa-list-alt"></i> List Pekerjaan</li>
		</ol>
	</section>

	<section class="content">
		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">Data Pekerjaan</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<a href="<?= base_url() ?>company/tambah_joblist">
					<button type="button" name="tambah_pekerjaan" class="btn btn-primary">
						<i class="fa fa-plus-circle"></i>&nbsp&nbspTambah Pekerjaan</button><br></br>
				</a>
				<table class="table table-bordered table-hover datatable" id="example1">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pekerjaan</th>
							<th>Deadline</th>
							<th>Status</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody id="show_list_pekerjaan">
					</tbody>
				</table>
			</div>
		</div>
	</section>
</div>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			Peserta Event
			<small>Data peserta event</small>
		</h1>

		<ol class="breadcrumb">
			<li>
				<a href="<?= base_url() ?>admin">
					<i class="fa fa-dashboard"></i> Dashboard</a>
				</li>
			<li>
				<a href="<?= base_url() ?>admin/peserta_event">
					Peserta Event</a>
			</li>
			<li class="active">Detail Peserta Event</li>
		</ol>
	</section>

	<section class="content">
		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">Data Peserta</h3>
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
							<th style="text-align: center">Nama Kategori Industri</th>
							<th style="text-align: center" width="20%">Edit</th>
						</tr>
					</thead>
					<tbody id="show_list_kategori_industri">
					</tbody>
				</table>
			</div>
		</div>

	</section>

</div>

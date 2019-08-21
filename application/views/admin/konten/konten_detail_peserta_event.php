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
				<a href="<?= base_url() ?>admin/peserta_event">
					<i class="fa fa-arrow-circle-left fa-lg">&nbsp</i>
				</a>
				<h3 class="box-title">Detail Peserta</h3>
				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body table-responsive">
					<table id="example1" class="table table-bordered table-striped responsive">
							<thead>
							<tr>
									<th>No</th>
									<th>Nama</th>
									<th>Jk</th>
									<th>Asal Sekolah / PT</th>
									<th>No HP</th>
									<th>Email</th>
									<th>Foto</th>
									<th>Alasan</th>

							</tr>
							</thead>
							<tbody>
							<tr>
								<?php
								$no = 1;
								foreach ($daftar_peserta->result() as $row ) {
									?>
									<td><?php echo $no++; ?>.</td>
									<td><?php echo $row->nama ;?></td>
									<td><?php echo $row->jk ;?></td>
									<td><?php echo $row->asal_sekolah_pt ;?></td>
									<td><?php echo  $row->nohp ;?></td>
									<td><?php echo $row->email ;?></td>
									<td>
										<a href="<?= base_url("assets/foto_careerday/$row->foto"); ?>" target="_blank"><img src="<?= base_url("assets/foto_careerday/$row->foto"); ?>" width="75px" ></a>
									</td>
									<td><?php echo $row->alasan_ikut ;?></td>
								</tr>
							<?php }?>
							</tbody>
					</table>

			</div>
		</div>

	</section>

</div>

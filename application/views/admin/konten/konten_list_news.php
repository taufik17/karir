<div class="content-wrapper">
	<section class="content-header">
		<h1>
			News
			<small>List Berita</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li>News</li>
			<li class="active">List News</li>
		</ol>
	</section>

	<section class="content">
		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">List Berita</h3>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" type="button" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<?php
		    $info = $this->session->flashdata('info');
		    if(!empty($info))
		    {
		     echo $info;
		    }
		    ?>

				<table id="example1" class="table table-bordered table-striped responsive">
						<thead>
						<tr>
								<th>No</th>
								<th>Foto Utama</th>
								<th>Judul Berita</th>
								<th>Deskripsi Singkat</th>
								<th>Tanggal Tayang</th>
								<th>Aksi</th>

						</tr>
						</thead>
						<tbody>
						<tr>
							<?php
							function limit_words($string, $word_limit){
								$words = explode(" ",$string);
								return implode(" ",array_splice($words,0,$word_limit));
							}
							$no = 1;
							foreach ($datalist->result() as $row ) {
								$long_string = $row->berita_isi;
								$limited_string = limit_words($long_string, 10);
								?>
								<td><?php echo $no++; ?>.</td>
								<td>
									<a href="<?= base_url("assets/gambar/news/$row->berita_image"); ?>" target="_blank"><img src="<?= base_url("assets/gambar/news/$row->berita_image"); ?>" width="75px" ></a>
								</td>
								<td><?php echo $row->berita_judul ;?></td>
								<td><?php echo $limited_string; ?></td>
								<td><?php echo  $row->berita_tanggal; ?></td>
								<td>
									<a href="<?php echo base_url();?>news/view/<?= $row->berita_id ?>" target="_blank" >
									<span class="label label-info"><i class="fa fa-eye"></i> Lihat</span>
								</a>

									<a href="<?php echo base_url();?>index.php/dokter/edit/" >
									<span class="label label-success"><i class="fa fa-edit"></i> edit</span>
								</a>

									<a href="<?php echo base_url();?>index.php/dokter/edit/" >
									<span class="label label-danger"><i class="fa fa-trash"></i> hapus</span>
								</a>
								</td>
							</tr>
						<?php }?>
						</tbody>
				</table>

			</div>
		</div>
	</section>
</div>

<div class="content-wrapper">
	<section class="content-header">
		<h1>
			News
			<small>Tambahkan Berita Terbaru</small>
		</h1>
		<ol class="breadcrumb">
			<li><a href="<?= base_url() ?>"><i class="fa fa-dashboard"></i> Dashboard</a></li>
			<li>News</li>
			<li class="active">Add News</li>
		</ol>
	</section>

	<section class="content">
		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">Tambah Berita</h3>
				<div class="box-tools pull-right">
					<button class="btn btn-box-tool" type="button" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">
				<form action="<?php echo base_url(); ?>admin/simpan_post" method="post" enctype="multipart/form-data">
                <input type="text" name="judul" class="form-control" placeholder="Judul berita" required/><br/>
                <textarea id="ckeditor" name="berita" class="form-control" required></textarea><br/>
								<span>foto utama</span>
                <input type="file" name="filefoto" required><br>
                <button class="btn btn-primary btn-lg" type="submit">Post Berita</button>
            </form>
			</div>
		</div>
	</section>
</div>

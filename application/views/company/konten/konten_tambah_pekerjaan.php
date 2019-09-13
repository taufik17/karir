<div class="content-wrapper">
	<section class="content-header">
		<h1>&nbsp</h1>
		<ol class="breadcrumb">
			<li><i class="fa fa-list-alt"></i> List Pekerjaan</li>
			<li class="active">Tambah Pekerjaan</li>
		</ol>
	</section>

	<section class="content">
		<div class="box box-danger">
			<div class="box-header with-border">
				<h3 class="box-title">
					<i class="fa fa-plus"></i>
					Tambah Pekerjaan</h3>

				<div class="box-tools pull-right">
					<button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
					</button>
				</div>
			</div>
			<!-- /.box-header -->
			<div class="box-body">

				<div class="row">
        <div class="col-md-6">

          <div>
            <div class="box-body">
              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Nama Pekerjaan:</label>
								<div class="input-group">
                <span class="input-group-addon"><i class="fa fa-pencil"></i></span>
                <input type="email" class="form-control" placeholder="Nama Pekerjaan">
              </div>
                <!-- /.input group -->
              </div>

							<div class="form-group" data-select2-id="33">
                <label>Tipe Pekerjaan:</label>
                <select class="form-control select2 select2-hidden-accessible" style="width: 100%;" data-select2-id="1" tabindex="-1" aria-hidden="true">
                  <option selected="selected">Pilih</option>
                  <option value="1">Full Time</option>
                  <option value="2">Part Time</option>
                  <option value="3">Intern</option>
                </select>
              </div>
              <!-- /.form group -->

              <!-- Date mm/dd/yyyy -->
							<label>Tanggal Tutup:</label>
              <div class="form-group">
                <div class="input-group">
                  <div class="input-group-addon">
                    <i class="fa fa-calendar"></i>
                  </div>
                  <input type="text" class="form-control" data-inputmask="'alias': 'mm/dd/yyyy'" data-mask="">
                </div>
								<span class="help-block">* Batas akhir pendaftaran</span>
                <!-- /.input group -->
              </div>

							<label>Dibutuhkan :</label>
              <div class="form-group">
								<div class="input-group">
                <input type="text" class="form-control">
                <span class="input-group-addon">orang</span>
              </div>
								<span class="help-block">* Kosongkan jika tidak ingin disebutkan</span>
                <!-- /.input group -->
              </div>
              <!-- /.form group -->
            </div>

						<div class="box-body">
              <!-- Date dd/mm/yyyy -->
              <div class="form-group">
                <label>Deskripsi Pekerjaan:</label>
									<form action="<?php echo base_url(); ?>admin/simpan_post" method="post" enctype="multipart/form-data">
													<textarea class="textarea" id="ckeditor3" placeholder="Deskripsi Pekerjaan"
																		style="width: 100%; height: 250px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;"></textarea>

					            </form>
                <!-- /.input group -->
              </div>
            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col (left) -->
        <div class="col-md-3">
            <div class="box-body">
							<label>Requirement Berkas:</label>
							<div class="form-group">
								<?php
								foreach ($data_berkas->result() as $brks ) {
									?>
									<div class="checkbox">
                    <label>
                      <input type="checkbox" name="berkas" value="<?= $brks->id_requirement ?>">
                      <?php echo $brks->nama_requirement ?>
                    </label>
                  </div>
								<?php } ?>
                </div>
								<label>Berkas Tambahan:</label>
								<textarea class="textarea" id="ckeditor2"
													style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
													</textarea>
													<span class="help-block">* Isikan Jika Perlu</span>

            </div>
            <!-- /.box-body -->
          <!-- /.box -->
        </div>

				<div class="col-md-3">
            <div class="box-body">
							<label>Lulusan:</label>
							<div class="form-group">
								<div class="checkbox">
									<label>
										<input type="checkbox" name="berkas" value="2">
										SMA / SMK / Sederajat
									</label>
								</div>

								<div class="checkbox">
									<label>
										<input type="checkbox" name="berkas" value="1">
										Diploma
									</label>
								</div>

								<div class="checkbox">
									<label>
										<input type="checkbox" name="berkas" value="1">
										Sarjana / S1
									</label>
								</div>

								<div class="checkbox">
									<label>
										<input type="checkbox" name="berkas" value="1">
										Magister / S2
									</label>
								</div>

								<div class="checkbox">
									<label>
										<input type="checkbox" name="berkas" value="1">
										Apa Saja
									</label>
								</div>

								<div class="form-group">
	                <label>Jurusan:</label>
	                <select class="form-control select2" multiple="multiple" data-placeholder="Pilih Jurusan"
	                        style="width: 100%;">
													<?php
													foreach ($data_jurusan->result() as $row ) {
													?>
													<option value="<?= $row->id_requirement; ?>" ><?= $row->nama_jurusan; ?></option>
													<?php } ?>
	                </select>
									<span class="help-block">* Boleh Lebih dari 1</span>
	              </div>

                </div>
            </div>
            <!-- /.box-body -->
          <!-- /.box -->
        </div>

				<div class="col-md-3">
            <div class="box-body">
								<label>Syarat Khusus:</label>
								<textarea class="textarea" id="ckeditor4"
													style="width: 100%; height: 50px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
													</textarea>
													<span class="help-block">* Isikan Jika Perlu</span>

            </div>
            <!-- /.box-body -->
          <!-- /.box -->
        </div>
        <!-- /.col (right) -->
      </div>

			</div>
			<div class="box-footer">
                <button type="submit" class="btn btn-primary pull-right">
									<i class="fa fa-save">&nbsp</i>Simpan</button>
              </div>
		</div>
	</section>
</div>

<div class="col-md-9">
	<div class="col-xs-12">
		<div class="box">
			<div class="box-header with-border">
				<i class="fa fa-paperclip" aria-hidden="true"></i>
				<h3 class="box-title text-center">List Job</h3>
			</div>
			<div class="box-body">

				<button type="button" name="tambah" class="btn btn-primary" data-toggle="modal" data-target="#modal_tambah"><i class="fa fa-plus-circle"></i>&nbsp&nbspTambah Posisi Lowongan</button>
				<br></br>
				<table class="table table-bordered table-hover datatable" id="joblist">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Pekerjaan</th>
							<th>Deadline</th>
							<th>Status</th>
							<th>Edit</th>
						</tr>
					</thead>
					<tbody id="show_joblist">

					</tbody>
				</table>

				<div class="box box-primary">
					<div class="box-header">
						<h3 class="box-title">Date picker</h3>
					</div>
					<div class="box-body">
						<!-- Date -->
						<div class="form-group">
							<label>Date:</label>

							<div class="input-group date">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="datepicker">
							</div>
							<!-- /.input group -->
						</div>
						<!-- /.form group -->

						<!-- Date range -->
						<div class="form-group">
							<label>Date range:</label>

							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-calendar"></i>
								</div>
								<input type="text" class="form-control pull-right" id="reservation">
							</div>
							<!-- /.input group -->
						</div>
						<!-- /.form group -->

						<!-- Date and time range -->
						<div class="form-group">
							<label>Date and time range:</label>

							<div class="input-group">
								<div class="input-group-addon">
									<i class="fa fa-clock-o"></i>
								</div>
								<input type="text" class="form-control pull-right" id="reservationtime">
							</div>
							<!-- /.input group -->
						</div>
						<!-- /.form group -->

						<!-- Date and time range -->
						<div class="form-group">
							<label>Date range button:</label>

							<div class="input-group">
								<button type="button" class="btn btn-default pull-right" id="daterange-btn">
									<span>
										<i class="fa fa-calendar"></i> Date range picker
									</span>
									<i class="fa fa-caret-down"></i>
								</button>
							</div>
						</div>
						<!-- /.form group -->

					</div>
					<!-- /.box-body -->
				</div>
			</div>
		</div>
	</div>
</div>

<?php $this->load->view('company/konten_header'); ?>

<section class="header-company section-gap">
	<div class="container">
		<div class="row">
			<?php foreach ($profil_company->result() as $nama ) {
				?>
			<?php } ?>
			<?php $this->load->view($menu); ?>
			<?php $this->load->view($konten); ?>
		</div>

	</div>
</section>


<br>
&nbsp
<br>

<!-- modal -->

<div class="modal fade" id="modal_tambah" style="display: none;">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-label="Close">
					<span aria-hidden="true">×</span></button>
					<h4 class="modal-title">Tambah Pekerjaan</h4>
				</div>
				<form class="form-horizontal">
					<div class="modal-body">
						<div class="row">
							<div class="col-sm-2">
								<label for="inputTipe" class="control-label">Nama Pekerjaan</label>
							</div>
							<div class="col-sm-8">
								<input type="text" class="form-control" name="namatipe" id="nama_tipe" placeholder="Nama Pekerjaan">
							</div>
						</div>

						<div class="row">
							<div class="col-sm-2">
								<label for="inputTipe" class="control-label">Deadline</label>
							</div>
							<div class="col-sm-8">

								<input type="text" class="form-control" name="namatipe" id="nama_tipe" placeholder="Deadline">
							</div>
						</div>

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

					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbspTutup</button>
						<button class="btn btn-success" id="btn_tambah"><i class="fa fa-plus-circle"></i>&nbsp&nbspTambah</button>
					</div>
				</form>
			</div>
			<!-- /.modal-content -->
		</div>
		<!-- /.modal-dialog -->
	</div>

<!-- end modal -->

<?php $this->load->view('company/konten_footer') ?>


<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap-daterangepicker/daterangepicker.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/dist/js/demo.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>

<script type="text/javascript">
    $(document).ready(function(){
        tampil_joblist();   //pemanggilan fungsi tampil tipe.

        $('#joblist').dataTable();

        //fungsi tampil tipe
        function tampil_joblist(){
            $.ajax({
                type  : 'ajax',
                url   : '<?php echo base_url()?>company/data_pekerjaan',
                async : false,
                dataType : 'json',
                success : function(data){
                    var html = '';
                    var i;
                    var no=1;
                    for(i=0; i<data.length; i++){
                        html += '<tr>'+
                                '<td>'+no+'</td>'+
                                '<td>'+data[i].Nama_joblist+'</td>'+
																'<td>'+data[i].deadline+'</td>'+
                                '<td style="text-align:center;">'+
                                  '<a href="javascript:;" class="btn btn-info btn-xs item_edit" data="'+data[i].Id_perusahaan+'"><i class="fa fa-edit"></i>&nbsp&nbspEdit</a>'+' '+
                                  '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].Id_perusahaan+'"><i class="fa fa-trash"></i>&nbsp&nbspHapus</a>'+
                                '</td>'+
                                '</tr>';
                                no++;
                    }
                    $('#show_joblist').html(html);
                }

            });
        }

        //GET UPDATE
        $('#show_joblist').on('click','.item_edit',function(){
            var id=$(this).attr('data');
            $.ajax({
                type : "GET",
                url  : '<?php echo base_url()?>edit/gettipekode',
                dataType : 'json',
                data : {id:id},
                success: function(data){
                    $.each(data,function(id_tipe, nama_tipe){
                        $('#modal_edit').modal('show');
                        $('[name="namatipebaru"]').val(data.nama_tipe);
                        $('[name="idtipe"]').val(data.id_tipe);
                    });
                }
            });
            return false;
        });

        //GET HAPUS
        $('#show_joblist').on('click','.item_hapus',function(){
            var id=$(this).attr('data');
            $('#modal_hapus').modal('show');
            $('[name="kode"]').val(id);
        });

        //Tambah tipe
        $('#btn_tambah').on('click',function(){
            var namatipe=$('#nama_tipe').val();
            $.ajax({
                type : "POST",
                url  : "<?php echo base_url('edit/tambah_tipe')?>",
                dataType : "JSON",
                data : {namatipe: namatipe},
                success: function(data){
                    $('[name="namatipe"]').val("");
                    $('#modal_tambah').modal('hide');
                    tampil_joblist();
                }
            });
            return false;
        });

        //Update Barang
        $('#btn_simpan').on('click',function(){
          var namatipebaru=$('#nama_tipe_baru').val();
          var idtipe=$('#textid').val();
          $.ajax({
            type : "POST",
            url  : "<?php echo base_url('edit/update_tipe')?>",
            dataType : "JSON",
            data : {namatipebaru: namatipebaru, idtipe: idtipe},
            success: function(data){
              $('[name="namatipebaru"]').val("");
              $('[name="tipebrg"]').val("");
              $('#modal_edit').modal('hide');
              tampil_joblist();
            }
          });
             return false;
        });

        //Hapus Barang
        $('#btn_hapus').on('click',function(){
            var kode=$('#textkode').val();
            $.ajax({
            type : "POST",
            url  : "<?php echo base_url('edit/delete_tipe')?>",
            dataType : "JSON",
            data : {kode: kode},
            success: function(data){
                $('#modal_hapus').modal('hide');
                    tampil_joblist();
                  }
            });
                return false;
            });
    });
</script>
<script>
  $(function () {
    $('#example1').DataTable()
    $('#example2').DataTable({
      'paging'      : true,
      'lengthChange': false,
      'searching'   : false,
      'ordering'    : true,
      'info'        : true,
      'autoWidth'   : false
    })
  })
</script>

</body>
</html>

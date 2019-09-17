<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <link rel="icon" type="image/png" href="<?php echo base_url() ?>assets/gambar/favicon.png">
  <title><?= $title ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/skins/_all-skins.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/select2/dist/css/select2.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/admin/kalender/plugins/fullcalendar/fullcalendar.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/admin/kalender/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'; ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-red-light fixed sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="../../index2.html" class="logo">
        <span class="logo-mini"><b>A</b>LT</span>
        <span class="logo-lg"><b>ITERA</b> Career Center</span>
      </a>
      <nav class="navbar navbar-static-top">
        <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </a>

        <div class="navbar-custom-menu">
          <ul class="nav navbar-nav">
            <li>
              <?php foreach ($profil_company->result() as $nama ) {
                ?>
                <a href="<?php echo base_url() ?>ProfilDosen"><i class="fa fa-user"></i>&nbsp <?php echo $nama->Nama_perusahaan ?></a>
              <?php }?>
            </li>
            <li>
              <a href="<?php echo base_url() ?>Admin/logout"><i class="fa fa-sign-out"></i>&nbsp Logout</a>
            </li>
          </ul>
        </div>
      </nav>
    </header>

    <aside class="main-sidebar">
      <section class="sidebar">
        <?php foreach ($profil_company->result() as $nama ) {
          ?>
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?= base_url() ?>assets/gambar/company/profil/<?php echo $nama->Logo_perusahaan; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $nama->Nama_perusahaan ?></p>
            <?php }?>
            <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
          </div>
        </div>
        <br>
        <?php $this->load->view($menu); ?>
      </section>
    </aside>

    <?php $this->load->view($konten); ?>

  </div>
</div>
<footer class="main-footer">
  <div class="pull-right hidden-xs">
    <b>Version</b> Beta
  </div>
  <strong>Copyright &copy; <script>document.write(new Date().getFullYear());</script> by <a href="https://tik.itera.ac.id/id/" target="_blank">UPT TIK.</a></strong> All rights reserved.
</footer>
<script src="<?php echo base_url().'assets/admin/kalender/js/jquery.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/admin/kalender/js/moment.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/admin/kalender/js/bootstrap.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/admin/kalender/plugins/bootstrap-datepicker/js/bootstrap-datepicker.min.js'; ?>"></script>
<script src="<?php echo base_url().'assets/admin/kalender/plugins/fullcalendar/fullcalendar.js'; ?>"></script>

<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery-slimscroll/jquery.slimscroll.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/fastclick/lib/fastclick.js"></script>
<script src="<?php echo base_url() ?>assets/admin/dist/js/adminlte.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/dist/js/demo.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/datatables.net/js/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<!-- Select2 -->
<script src="<?php echo base_url() ?>assets/admin/bower_components/select2/dist/js/select2.full.min.js"></script>

<script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>

<script type="text/javascript">
$(function () {
  //Initialize Select2 Elements
  $('.select2').select2()
});
</script>

    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('ckeditor');
      });
    </script>

    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('ckeditor2',{ toolbar: [['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock']]});
      });
    </script>

    <script type="text/javascript">
    $(function () {
      CKEDITOR.replace('ckeditor3',{ toolbar: [
      ['Styles','Format','Font','FontSize'],
      '/',
      ['Bold','Italic','Underline','StrikeThrough','-','Undo','Redo','-','Cut','Copy','Paste','Find','Replace','-','Outdent','Indent','-','Print'],
      '/',
      ['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock'],
      ['Image','Table','-','Link','Flash','Smiley','TextColor','BGColor','Source']
      ]});
    });
    </script>

    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('ckeditor4',{ toolbar: [['NumberedList','BulletedList','-','JustifyLeft','JustifyCenter','JustifyRight','JustifyBlock']]});
      });
    </script>

    <!-- script list pekerjaan -->
    <script type="text/javascript">
    $(document).ready(function(){
    	tampil_joblist();   //pemanggilan fungsi tampil tipe.
    	$('#joblist').dataTable();
    	//fungsi tampil tipe
    	function tampil_joblist(){
    		$.ajax({
    			type  : 'ajax',
    			url   : '<?php echo base_url()?>company/list_pekerjaan',
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
    					'<td>'+data[i].Nama_perusahaan+'</td>'+
    					'<td>'+data[i].deadline+'</td>'+
    					'<td style="text-align:center;">'+
    					'<a href="javascript:;" class="btn btn-success btn-xs item_validasi" data="'+data[i].id_joblist+'"><i class="fa fa-check"></i>&nbsp&nbspValidasi</a>'+' '+
    					'<a href="javascript:;" class="btn btn-danger btn-xs item_hapus" data="'+data[i].id_joblist+'"><i class="fa fa-trash"></i>&nbsp&nbspHapus</a>'+
    					'</td>'+
    					'</tr>';
    					no++;
    				}
    				$('#show_list_pekerjaan').html(html);
    			}

    		});
    	}
    	//GET HAPUS
    	$('#show_list_pekerjaan').on('click','.item_hapus',function(){
    		var id=$(this).attr('data');
    		$('#ModalHapus').modal('show');
    		$('[name="kode"]').val(id);
    	});
    	//GET VALIDASI
    	$('#show_list_pekerjaan').on('click','.item_validasi',function(){
    		var id=$(this).attr('data');
    		$('#ModalValidasi').modal('show');
    		$('[name="kode"]').val(id);
    	});
    	//Hapus joblist
    	$('#btn_hapus').on('click',function(){
    		var kode=$('#textkode').val();
    		$.ajax({
    			type : "POST",
    			url  : "<?php echo base_url('admin/hapusjoblist')?>",
    			dataType : "JSON",
    			data : {kode: kode},
    			success: function(data){
    				$('#ModalHapus').modal('hide');
    				tampil_joblist();
    			}
    		});
    		return false;
    	});
    	//validasi joblist
    	$('#btn_validasi').on('click',function(){
    		var kode=$('#textkode').val();
    		$.ajax({
    			type : "POST",
    			url  : "<?php echo base_url('admin/validasi')?>",
    			dataType : "JSON",
    			data : {kode: kode},
    			success: function(data){
    				$('#ModalValidasi').modal('hide');
    				tampil_joblist();
    			}
    		});
    		return false;
    	});
    });
    </script>
    <!-- end script list permohonan -->

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

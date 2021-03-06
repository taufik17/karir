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
  <link rel="stylesheet" href="<?= base_url() ?>assets/dropify/dist/css/dropify.min.css">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/admin/kalender/plugins/fullcalendar/fullcalendar.css'; ?>">
  <link rel="stylesheet" type="text/css" href="<?php echo base_url().'assets/admin/kalender/plugins/bootstrap-datepicker/css/bootstrap-datepicker3.min.css'; ?>">
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>

<body class="hold-transition skin-red-light fixed sidebar-mini">
  <div class="wrapper">
    <header class="main-header">
      <a href="<?= base_url(); ?>admin" class="logo">
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
              <?php foreach ($data->result() as $nama ) {
                ?>
                <a href="<?php echo base_url() ?>admin/profil"><i class="fa fa-user"></i>&nbsp <?php echo $nama->Nama ?></a>
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
        <?php foreach ($data->result() as $nama ) {
          ?>
          <div class="user-panel">
            <div class="pull-left image">
              <img src="<?= base_url() ?>assets/gambar/<?= $nama->foto; ?>" class="img-circle" alt="User Image">
            </div>
            <div class="pull-left info">
              <p><?php echo $nama->Nama ?></p>
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

<!-- modal hapus -->
<div class="modal fade" id="ModalHapus" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus List Job</h4>
      </div>
      <form class="form-horizontal">
        <div class="modal-body">

          <input type="hidden" name="kode" id="textkode" value="">
          <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus JobList ini?</p></div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button class="btn_hapus btn btn-danger" id="btn_hapus">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- endmodal -->


<!-- modal hapus kategori -->
<div class="modal fade" id="ModalHapusKategori" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Kategori</h4>
      </div>
      <form class="form-horizontal">
        <div class="modal-body">

          <input type="hidden" name="kode_kategori" id="textkodekategori" value="">
          <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus Kategori ini?</p></div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button class="btn_hapus btn btn-danger" id="btn_hapus_kategori">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end modal -->


<!-- modal hapus requirement -->
<div class="modal fade" id="ModalHapusRequirement" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Requirement</h4>
      </div>
      <form class="form-horizontal">
        <div class="modal-body">

          <input type="hidden" name="kode_requirement" id="textkoderequirement" value="">
          <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus requirement ini?</p></div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button class="btn_hapus btn btn-danger" id="btn_hapus_requirement">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end modal -->



<!-- modal hapus requirement jurusan -->
<div class="modal fade" id="ModalHapusrequirement_jurusan" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h4 class="modal-title" id="myModalLabel">Hapus Requirement Jurusan</h4>
      </div>
      <form class="form-horizontal">
        <div class="modal-body">

          <input type="hidden"  name="kode_requirement_jurusan" id="textkoderequirement_jurusan" value="">
          <div class="alert alert-warning"><p>Apakah Anda yakin mau memhapus jurusan ini?</p></div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button class="btn_hapus btn btn-danger" id="btn_hapus_requirement_jurusan">Hapus</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- end modal -->

<!-- modal validasi -->
<div class="modal fade" id="ModalValidasi" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">X</span></button>
        <h4 class="modal-title" id="myModalLabel">Validasi</h4>
      </div>
      <form class="form-horizontal">
        <div class="modal-body">

          <input type="hidden" name="kode" id="textkode" value="">
          <div class="alert alert-warning"><p>Validasi JobList ini?</p></div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Tutup</button>
          <button class="btn_hapus btn btn-danger" id="btn_validasi">Validasi</button>
        </div>
      </form>
    </div>
  </div>
</div>
<!-- endmodal -->

<!-- modal edit kategori -->
<div class="modal fade" id="Modal_Edit_Kategori" style="display: none;">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">×</span></button>
          <h4 class="modal-title">Edit Kategori</h4>
        </div>
        <form class="form-horizontal">
          <div class="modal-body">
            <div class="row">
              <div class="col-sm-2">
                <label for="inputTipe" class="control-label">Nama Kategori Baru</label>
              </div>
              <div class="col-sm-9">
                <input type="hidden" name="id_kategori_edit" id="idkategoriedit" value="">
                <input type="text" class="form-control" name="jenis_industri_edit" id="namakategoriedit" placeholder="Nama Tipe Baru">
              </div>
            </div>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbspTutup</button>
            <button class="btn btn-success" id="btn_simpan_kategori"><i class="fa fa-save"></i>&nbsp&nbspSimpan</button>
          </div>
        </form>
      </div>
    </div>
  </div>
  <!-- end modal edit kategori -->

  <!-- modal edit requirement -->
  <div class="modal fade" id="Modal_Edit_Requirement" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Edit Requirement</h4>
          </div>
          <form class="form-horizontal">
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-2">
                  <label for="inputTipe" class="control-label">Nama Requirement Baru</label>
                </div>
                <div class="col-sm-9">
                  <input type="hidden" name="id_requirement_edit" id="idrequirementedit" value="">
                  <input type="text" class="form-control" name="nama_requirement_edit" id="namarequirementedit" placeholder="Nama Requirement Baru">
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbspTutup</button>
              <button class="btn btn-success" id="btn_simpan_requirement"><i class="fa fa-save"></i>&nbsp&nbspSimpan</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- end modal edit requirement -->

    <!-- modal edit requirement jurusan-->
    <div class="modal fade" id="Modal_Edit_requirement_jurusan" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Edit Jurusan</h4>
            </div>
            <form class="form-horizontal">
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-2">
                    <label for="inputTipe" class="control-label">Nama Jurusan Baru</label>
                  </div>
                  <div class="col-sm-9">
                    <input type="hidden" name="id_requirement_jurusan_edit" id="idrequirement_jurusanedit" value="">
                    <input type="text" class="form-control" name="nama_requirement_jurusan_edit" id="namarequirement_jurusanedit" placeholder="Nama Jurusan Baru">
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbspTutup</button>
                <button class="btn btn-success" id="btn_simpan_requirement_jurusan"><i class="fa fa-save"></i>&nbsp&nbspSimpan</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- end modal edit requirement jurusan -->

  <!-- modal tambah kategori -->
  <div class="modal fade" id="modal_tambah_kategori" style="display: none;">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span></button>
            <h4 class="modal-title">Tambah Kategori Industri</h4>
          </div>
          <form class="form-horizontal">
            <div class="modal-body">
              <div class="row">
                <div class="col-sm-2">
                  <label for="inputTipe" class="control-label">Nama Kategori</label>
                </div>
                <div class="col-sm-8">
                  <input type="text" class="form-control" name="namakategori" id="nama_kategori" placeholder="Nama Kategori" required>
                </div>
              </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbspTutup</button>
              <button class="btn btn-success" id="btn_tambah_kategori"><i class="fa fa-plus-circle"></i>&nbsp&nbspTambah</button>
            </div>
          </form>
        </div>
      </div>
    </div>
    <!-- end modal -->


    <!-- modal tambah requirement -->
    <div class="modal fade" id="modal_tambah_requirement" style="display: none;">
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span></button>
              <h4 class="modal-title">Tambah Requirement</h4>
            </div>
            <form class="form-horizontal">
              <div class="modal-body">
                <div class="row">
                  <div class="col-sm-2">
                    <label for="inputTipe" class="control-label">Nama Requirement</label>
                  </div>
                  <div class="col-sm-8">
                    <input type="text" class="form-control" name="namarequirement" id="nama_requirement" placeholder="Nama Requirement" required>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbspTutup</button>
                <button class="btn btn-success" id="btn_tambah_requirement"><i class="fa fa-plus-circle"></i>&nbsp&nbspTambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
      <!-- end modal -->

      <!-- modal tambah requirement jurusan -->
      <div class="modal fade" id="modal_tambah_requirement_jurusan" style="display: none;">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span></button>
                <h4 class="modal-title">Tambah Jurusan</h4>
              </div>
              <form class="form-horizontal">
                <div class="modal-body">
                  <div class="row">
                    <div class="col-sm-2">
                      <label for="inputTipe" class="control-label">Nama Jurusan</label>
                    </div>
                    <div class="col-sm-8">
                      <input type="text" class="form-control" name="namarequirement_jurusan" id="nama_requirement_jurusan" placeholder="Nama Jurusan" required>
                    </div>
                  </div>
                </div>
                <div class="modal-footer">
                  <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-close"></i>&nbspTutup</button>
                  <button class="btn btn-success" id="btn_tambah_requirement_jurusan"><i class="fa fa-plus-circle"></i>&nbsp&nbspTambah</button>
                </div>
              </form>
            </div>
          </div>
        </div>
        <!-- end modal -->

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

    <script src="<?php echo base_url().'assets/ckeditor/ckeditor.js'?>"></script>
    <script src="<?php echo base_url() ?>assets/dropify/dist/js/dropify.min.js"></script>
    <script type="text/javascript">
      $(function () {
        CKEDITOR.replace('ckeditor');
      });
    </script>

    <script>
        $(document).ready(function(){
            // Basic
            $('.dropify').dropify();

            // Translated
            $('.dropify-fr').dropify({
                messages: {
                    default: 'Glissez-déposez un fichier ici ou cliquez',
                    replace: 'Glissez-déposez un fichier ou cliquez pour remplacer',
                    remove:  'Supprimer',
                    error:   'Désolé, le fichier trop volumineux'
                }
            });

            // Used events
            var drEvent = $('#input-file-events').dropify();

            drEvent.on('dropify.beforeClear', function(event, element){
                return confirm("Do you really want to delete \"" + element.file.name + "\" ?");
            });

            drEvent.on('dropify.afterClear', function(event, element){
                alert('File deleted');
            });

            drEvent.on('dropify.errors', function(event, element){
                console.log('Has Errors');
            });

            var drDestroy = $('#input-file-to-destroy').dropify();
            drDestroy = drDestroy.data('dropify')
            $('#toggleDropify').on('click', function(e){
                e.preventDefault();
                if (drDestroy.isDropified()) {
                    drDestroy.destroy();
                } else {
                    drDestroy.init();
                }
            })
        });
    </script>

    <!-- kalender event -->
    <script type="text/javascript">
        var get_data        = '<?php echo $get_data; ?>';
        var backend_url     = '<?php echo base_url(); ?>';
        $(document).ready(function() {
            $('.date-picker').datepicker();
            $('#calendarIO').fullCalendar({
                header: {
                    left: 'prev,next today',
                    center: 'title',
                    right: 'month,basicWeek,basicDay'
                },
                defaultDate: moment().format('YYYY-MM-DD'),
                editable: true,
                    eventLimit: true, // allow "more" link when too many events
                    selectable: true,
                    selectHelper: true,
                    select: function(start, end) {
                        $('#create_modal input[name=start_date]').val(moment(start).format('YYYY-MM-DD'));
                        $('#create_modal input[name=end_date]').val(moment(end).format('YYYY-MM-DD'));
                        $('#create_modal').modal('show');
                        save();
                        $('#calendarIO').fullCalendar('unselect');
                    },
                    eventDrop: function(event, delta, revertFunc) { // si changement de position
                        editDropResize(event);
                    },
                    eventResize: function(event,dayDelta,minuteDelta,revertFunc) { // si changement de longueur
                        editDropResize(event);
                    },
                    eventClick: function(event, element)
                    {
                        deteil(event);
                        editData(event);
                        deleteData(event);
                    },
                    events: JSON.parse(get_data)
                });
        });

        $(document).on('click', '.add_calendar', function(){
            $('#create_modal input[name=calendar_id]').val(0);
            $('#create_modal').modal('show');
        })

        $(document).on('submit', '#form_create', function(){
            var element = $(this);
            var eventData;
            $.ajax({
                url     : backend_url+'admin/save',
                type    : element.attr('method'),
                data    : element.serialize(),
                dataType: 'JSON',
                beforeSend: function()
                {
                    element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                },
                success: function(data)
                {
                    if(data.status)
                    {
                        eventData = {
                            id          : data.id,
                            title       : $('#create_modal input[name=title]').val(),
                            description : $('#create_modal textarea[name=description]').val(),
                            start       : moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                            end         : moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                            color       : $('#create_modal select[name=color]').val()
                        };
                            $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                            $('#create_modal').modal('hide');
                            element[0].reset();
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                        }
                        else
                        {
                            element.find('.alert').css('display', 'block');
                            element.find('.alert').html(data.notif);
                        }
                        element.find('button[type=submit]').html('Submit');
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        element.find('button[type=submit]').html('Submit');
                        element.find('.alert').css('display', 'block');
                        element.find('.alert').html('Wrong server, please save again');
                    }
                });
            return false;
        })

        function editDropResize(event)
        {
            start = event.start.format('YYYY-MM-DD HH:mm:ss');
            if(event.end)
            {
                end = event.end.format('YYYY-MM-DD HH:mm:ss');
            }
            else
            {
                end = start;
            }

            $.ajax({
                url     : backend_url+'admin/save',
                type    : 'POST',
                data    : 'calendar_id='+event.id+'&title='+event.title+'&start_date='+start+'&end_date='+end,
                dataType: 'JSON',
                beforeSend: function()
                {
                },
                success: function(data)
                {
                    if(data.status)
                    {
                        $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html('Data success update');
                    }
                    else
                    {
                        $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Data cant update');
                    }

                },
                error: function (jqXHR, textStatus, errorThrown)
                {
                    $('.notification').removeClass('alert-primary').addClass('alert-danger').find('p').html('Wrong server, please save again');
                }
            });
        }

        function save()
        {
            $('#form_create').submit(function(){
                var element = $(this);
                var eventData;
                $.ajax({
                    url     : backend_url+'admin/save',
                    type    : element.attr('method'),
                    data    : element.serialize(),
                    dataType: 'JSON',
                    beforeSend: function()
                    {
                        element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                    },
                    success: function(data)
                    {
                        if(data.status)
                        {
                            eventData = {
                                id          : data.id,
                                title       : $('#create_modal input[name=title]').val(),
                                description : $('#create_modal textarea[name=description]').val(),
                                start       : moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                                end         : moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss'),
                                color       : $('#create_modal select[name=color]').val()
                            };
                                $('#calendarIO').fullCalendar('renderEvent', eventData, true); // stick? = true
                                $('#create_modal').modal('hide');
                                element[0].reset();
                                $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                                location.href = "<?= base_url() ?>admin/kalender_event";
                            }
                            else
                            {
                                element.find('.alert').css('display', 'block');
                                element.find('.alert').html(data.notif);
                            }
                            element.find('button[type=submit]').html('Submit');
                        },
                        error: function (jqXHR, textStatus, errorThrown)
                        {
                            element.find('button[type=submit]').html('Submit');
                            element.find('.alert').css('display', 'block');
                            element.find('.alert').html('Wrong server, please save again');
                        }
                    });
                return false;
            })
        }

        function deteil(event)
        {
            $('#create_modal input[name=calendar_id]').val(event.id);
            $('#create_modal input[name=start_date]').val(moment(event.start).format('YYYY-MM-DD'));
            $('#create_modal input[name=end_date]').val(moment(event.end).format('YYYY-MM-DD'));
            $('#create_modal input[name=title]').val(event.title);
            $('#create_modal textarea[name=description]').val(event.description);
            $('#create_modal select[name=color]').val(event.color);
            $('#create_modal .delete_calendar').show();
            $('#create_modal').modal('show');
        }

        function editData(event)
        {
            $('#form_create').submit(function(){
                var element = $(this);
                var eventData;
                $.ajax({
                    url     : backend_url+'admin/save',
                    type    : element.attr('method'),
                    data    : element.serialize(),
                    dataType: 'JSON',
                    beforeSend: function()
                    {
                        element.find('button[type=submit]').html('<i class="fa fa-spinner fa-spin" aria-hidden="true"></i>');
                    },
                    success: function(data)
                    {
                        if(data.status)
                        {
                            event.title         = $('#create_modal input[name=title]').val();
                            event.description   = $('#create_modal textarea[name=description]').val();
                            event.start         = moment($('#create_modal input[name=start_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                            event.end           = moment($('#create_modal input[name=end_date]').val()).format('YYYY-MM-DD HH:mm:ss');
                            event.color         = $('#create_modal select[name=color]').val();
                            $('#calendarIO').fullCalendar('updateEvent', event);

                            $('#create_modal').modal('hide');
                            element[0].reset();
                            $('#create_modal input[name=calendar_id]').val(0)
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                            location.href = "<?= base_url() ?>admin/kalender_event";
                        }
                        else
                        {
                            element.find('.alert').css('display', 'block');
                            element.find('.alert').html(data.notif);
                        }
                        element.find('button[type=submit]').html('Submit');
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        element.find('button[type=submit]').html('Submit');
                        element.find('.alert').css('display', 'block');
                        element.find('.alert').html('Wrong server, please save again');
                    }
                });
                return false;
            })
        }

        function deleteData(event)
        {
            $('#create_modal .delete_calendar').click(function(){
                $.ajax({
                    url     : backend_url+'admin/delete',
                    type    : 'POST',
                    data    : 'id='+event.id,
                    dataType: 'JSON',
                    beforeSend: function()
                    {
                    },
                    success: function(data)
                    {
                        if(data.status)
                        {
                            $('#calendarIO').fullCalendar('removeEvents',event._id);
                            $('#create_modal').modal('hide');
                            $('#form_create')[0].reset();
                            $('#create_modal input[name=calendar_id]').val(0)
                            $('.notification').removeClass('alert-danger').addClass('alert-primary').find('p').html(data.notif);
                            location.href = "<?= base_url() ?>admin/kalender_event";
                        }
                        else
                        {
                            $('#form_create').find('.alert').css('display', 'block');
                            $('#form_create').find('.alert').html(data.notif);
                        }
                    },
                    error: function (jqXHR, textStatus, errorThrown)
                    {
                        $('#form_create').find('.alert').css('display', 'block');
                        $('#form_create').find('.alert').html('Wrong server, please save again');
                    }
                });
            })
        }
    </script>
    <!-- end kalender event -->

    <!-- script list permohonan -->
    <script type="text/javascript">
    $(document).ready(function(){
      tampil_joblist();   //pemanggilan fungsi tampil tipe.
      $('#joblist').dataTable();
      //fungsi tampil tipe
      function tampil_joblist(){
        $.ajax({
          type  : 'ajax',
          url   : '<?php echo base_url()?>admin/list_permohonan',
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
            $('#show_list_permohonan').html(html);
          }

        });
      }
      //GET HAPUS
      $('#show_list_permohonan').on('click','.item_hapus',function(){
        var id=$(this).attr('data');
        $('#ModalHapus').modal('show');
        $('[name="kode"]').val(id);
      });
      //GET VALIDASI
      $('#show_list_permohonan').on('click','.item_validasi',function(){
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

    <!-- script data peserta event -->
    <script type="text/javascript">
    $(document).ready(function(){
      tampil_peserta();   //pemanggilan fungsi tampil tipe.
      $('#joblist').dataTable();
      //fungsi tampil tipe
      function tampil_peserta(){
        $.ajax({
          type  : 'ajax',
          url   : '<?php echo base_url()?>admin/data_peserta',
          async : false,
          dataType : 'json',
          success : function(data){
            var html = '';
            var i;
            var no=1;
            for(i=0; i<data.length; i++){
              html += '<tr>'+
              '<td>'+no+'</td>'+
              '<td>'+data[i].title+'</td>'+
              '<td>'+data[i].jumlah+'&nbsppeserta</td>'+
              '<td style="text-align:center;">'+
              '<a href="<?= base_url() ?>admin/detail_peserta/'+data[i].id_event+'" class="btn btn-info btn-xs "><i class="fa fa-eye"></i>&nbsp&nbspLihat</a>'+' '+
              '</td>'+
              '</tr>';
              no++;
            }
            $('#show_peserta').html(html);
          }

        });
      }
    });
    </script>
    <!-- end script data peserta event -->


    <!-- script list kategori industri -->
    <script type="text/javascript">
    $(document).ready(function(){
      tampil_listkategori();   //pemanggilan fungsi tampil tipe.
      $('#joblist').dataTable();
      //fungsi tampil tipe
      function tampil_listkategori(){
        $.ajax({
          type  : 'ajax',
          url   : '<?php echo base_url()?>admin/list_kategori_industri',
          async : false,
          dataType : 'json',
          success : function(data){
            var html = '';
            var i;
            var no=1;
            for(i=0; i<data.length; i++){
              html += '<tr>'+
              '<td>'+no+'</td>'+
              '<td>'+data[i].jenis_industri+'</td>'+
              '<td style="text-align:center;">'+
              '<a href="javascript:;" class="btn btn-info btn-xs item_edit_kategori" data="'+data[i].id_industri+'"><i class="fa fa-edit"></i>&nbsp&nbspEdit</a>'+' '+
              '<a href="javascript:;" class="btn btn-danger btn-xs item_hapus_kategori" data="'+data[i].id_industri+'"><i class="fa fa-trash"></i>&nbsp&nbspHapus</a>'+
              '</td>'+
              '</tr>';
              no++;
            }
            $('#show_list_kategori_industri').html(html);
          }

        });
      }
      //Tambah kategori
      $('#btn_tambah_kategori').on('click',function(){
        var namakategori=$('#nama_kategori').val();
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('admin/tambah_kategori')?>",
          dataType : "JSON",
          data : {namakategori: namakategori},
          success: function(data){
            $('[name="namakategori"]').val("");
            $('#modal_tambah_kategori').modal('hide');
            tampil_listkategori();
          }
        });
        return false;
      });
      //GET HAPUS
      $('#show_list_kategori_industri').on('click','.item_hapus_kategori',function(){
        var id=$(this).attr('data');
        $('#ModalHapusKategori').modal('show');
        $('[name="kode_kategori"]').val(id);
      });
      //Hapus kategori
      $('#btn_hapus_kategori').on('click',function(){
        var kode_kategori=$('#textkodekategori').val();
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('admin/hapuskategori')?>",
          dataType : "JSON",
          data : {kode_kategori: kode_kategori},
          success: function(data){
            $('#ModalHapusKategori').modal('hide');
            tampil_listkategori();
          }
        });
        return false;
      });


      //GET UPDATE
      $('#show_list_kategori_industri').on('click','.item_edit_kategori',function(e){
        var id=$(this).attr('data');
        $.ajax({
          type : "GET",
          url  : "<?php echo base_url()?>admin/getidkategori",
          dataType : "JSON",
          data : {id:id},
          success: function(data){
            $.each(data,function(id_industri, jenis_industri){
              $('#Modal_Edit_Kategori').modal('show');
              $('[name="id_kategori_edit"]').val(data.id_industri);
              $('[name="jenis_industri_edit"]').val(data.jenis_industri);
            });
          }
        });
        return false;
      });

      //Update Kategori
      $('#btn_simpan_kategori').on('click',function(){
        var id_industri=$('#idkategoriedit').val();
        var jenis_industri=$('#namakategoriedit').val();
        $.ajax({
          type : "POST",
          url  : "<?php echo base_url('admin/update_kategori')?>",
          dataType : "JSON",
          data : {id_industri:id_industri , jenis_industri:jenis_industri},
          success: function(data){
            $('[name="id_kategori_edit"]').val("");
            $('[name="jenis_industri_edit"]').val("");
            $('#Modal_Edit_Kategori').modal('hide');
            tampil_listkategori();
          }
        });
        return false;
      });


    });
    </script>
    <!-- end script list kategori industri -->

    <!-- list Requirement -->
    <script type="text/javascript">
    $(document).ready(function(){
    	tampil_listrequirement();   //pemanggilan fungsi tampil tipe.
    	$('#joblist').dataTable();
    	//fungsi tampil tipe
    	function tampil_listrequirement(){
    		$.ajax({
    			type  : 'ajax',
    			url   : '<?php echo base_url()?>admin/list_requirement',
    			async : false,
    			dataType : 'json',
    			success : function(data){
    				var html = '';
    				var i;
    				var no=1;
    				for(i=0; i<data.length; i++){
    					html += '<tr>'+
    					'<td>'+no+'</td>'+
    					'<td>'+data[i].nama_requirement+'</td>'+
    					'<td style="text-align:center;">'+
    					'<a href="javascript:;" class="btn btn-info btn-xs item_edit_requirement" data="'+data[i].id_requirement+'"><i class="fa fa-edit"></i>&nbsp&nbspEdit</a>'+' '+
    					'<a href="javascript:;" class="btn btn-danger btn-xs item_hapus_requirement" data="'+data[i].id_requirement+'"><i class="fa fa-trash"></i>&nbsp&nbspHapus</a>'+
    					'</td>'+
    					'</tr>';
    					no++;
    				}
    				$('#show_list_requirement').html(html);
    			}

    		});
    	}
    	//Tambah requirement
    	$('#btn_tambah_requirement').on('click',function(){
    		var namarequirement=$('#nama_requirement').val();
    		$.ajax({
    			type : "POST",
    			url  : "<?php echo base_url('admin/tambah_requirement')?>",
    			dataType : "JSON",
    			data : {namarequirement: namarequirement},
    			success: function(data){
    				$('[name="namarequirement"]').val("");
    				$('#modal_tambah_requirement').modal('hide');
    				tampil_listrequirement();
    			}
    		});
    		return false;
    	});
    	//GET HAPUS
    	$('#show_list_requirement').on('click','.item_hapus_requirement',function(){
    		var id=$(this).attr('data');
    		$('#ModalHapusRequirement').modal('show');
    		$('[name="kode_requirement"]').val(id);
    	});
    	//Hapus requirement
    	$('#btn_hapus_requirement').on('click',function(){
    		var kode_requirement=$('#textkoderequirement').val();
    		$.ajax({
    			type : "POST",
    			url  : "<?php echo base_url('admin/hapusrequirement')?>",
    			dataType : "JSON",
    			data : {kode_requirement: kode_requirement},
    			success: function(data){
    				$('#ModalHapusRequirement').modal('hide');
    				tampil_listrequirement();
    			}
    		});
    		return false;
    	});


    	//GET UPDATE
    	$('#show_list_requirement').on('click','.item_edit_requirement',function(){
    		var id=$(this).attr('data');
    		$.ajax({
    			type : "GET",
    			url  : "<?php echo base_url()?>admin/getidrequirement",
    			dataType : "JSON",
    			data : {id:id},
    			success: function(data){
    				$.each(data,function(id_requirement, jenis_requirement){
    					$('#Modal_Edit_Requirement').modal('show');
    					$('[name="id_requirement_edit"]').val(data.id_requirement);
    					$('[name="nama_requirement_edit"]').val(data.nama_requirement);
    				});
    			}
    		});
    		return false;
    	});

    	//Update requirement
    	$('#btn_simpan_requirement').on('click',function(){
    		var id_requirement=$('#idrequirementedit').val();
    		var nama_requirement=$('#namarequirementedit').val();
    		$.ajax({
    			type : "POST",
    			url  : "<?php echo base_url('admin/update_requirement')?>",
    			dataType : "JSON",
    			data : {id_requirement:id_requirement , nama_requirement:nama_requirement},
    			success: function(data){
    				$('[name="id_requirement_edit"]').val("");
    				$('[name="nama_requirement_edit"]').val("");
    				$('#Modal_Edit_Requirement').modal('hide');
    				tampil_listrequirement();
    			}
    		});
    		return false;
    	});
    });
    </script>
    <!-- end requirement -->


    <!-- list requirement_jurusan -->
    <script type="text/javascript">
    $(document).ready(function(){
    	tampil_listrequirement_jurusan();   //pemanggilan fungsi tampil tipe.
    	$('#joblist').dataTable();
    	//fungsi tampil tipe
    	function tampil_listrequirement_jurusan(){
    		$.ajax({
    			type  : 'ajax',
    			url   : '<?php echo base_url()?>admin/list_requirement_jurusan',
    			async : false,
    			dataType : 'json',
    			success : function(data){
    				var html = '';
    				var i;
    				var no=1;
    				for(i=0; i<data.length; i++){
    					html += '<tr>'+
    					'<td>'+no+'</td>'+
    					'<td>'+data[i].nama_jurusan+'</td>'+
    					'<td style="text-align:center;">'+
    					'<a href="javascript:;" class="btn btn-info btn-xs item_edit_requirement_jurusan" data="'+data[i].id_requirement+'"><i class="fa fa-edit"></i>&nbsp&nbspEdit</a>'+' '+
    					'<a href="javascript:;" class="btn btn-danger btn-xs item_hapus_requirement_jurusan" data="'+data[i].id_requirement+'"><i class="fa fa-trash"></i>&nbsp&nbspHapus</a>'+
    					'</td>'+
    					'</tr>';
    					no++;
    				}
    				$('#show_list_requirement_jurusan').html(html);
    			}

    		});
    	}
    	//Tambah requirement_jurusan
    	$('#btn_tambah_requirement_jurusan').on('click',function(){
    		var namarequirement_jurusan=$('#nama_requirement_jurusan').val();
    		$.ajax({
    			type : "POST",
    			url  : "<?php echo base_url('admin/tambah_requirement_jurusan')?>",
    			dataType : "JSON",
    			data : {namarequirement_jurusan: namarequirement_jurusan},
    			success: function(data){
    				$('[name="namarequirement_jurusan"]').val("");
    				$('#modal_tambah_requirement_jurusan').modal('hide');
    				tampil_listrequirement_jurusan();
    			}
    		});
    		return false;
    	});
    	//GET HAPUS
    	$('#show_list_requirement_jurusan').on('click','.item_hapus_requirement_jurusan',function(){
    		var id=$(this).attr('data');
    		$('#ModalHapusrequirement_jurusan').modal('show');
    		$('[name="kode_requirement_jurusan"]').val(id);
    	});
    	//Hapus requirement_jurusan
    	$('#btn_hapus_requirement_jurusan').on('click',function(){
    		var kode_requirement_jurusan=$('#textkoderequirement_jurusan').val();
    		$.ajax({
    			type : "POST",
    			url  : "<?php echo base_url('admin/hapusrequirement_jurusan')?>",
    			dataType : "JSON",
    			data : {kode_requirement_jurusan: kode_requirement_jurusan},
    			success: function(data){
    				$('#ModalHapusrequirement_jurusan').modal('hide');
    				tampil_listrequirement_jurusan();
    			}
    		});
    		return false;
    	});


    	//GET UPDATE
    	$('#show_list_requirement_jurusan').on('click','.item_edit_requirement_jurusan',function(){
    		var id=$(this).attr('data');
    		$.ajax({
    			type : "GET",
    			url  : "<?php echo base_url()?>admin/getidrequirement_jurusan",
    			dataType : "JSON",
    			data : {id:id},
    			success: function(data){
    				$.each(data,function(id_requirement, nama_jurusan){
    					$('#Modal_Edit_requirement_jurusan').modal('show');
    					$('[name="id_requirement_jurusan_edit"]').val(data.id_requirement);
    					$('[name="nama_requirement_jurusan_edit"]').val(data.nama_jurusan);
    				});
    			}
    		});
    		return false;
    	});

    	//Update requirement_jurusan
    	$('#btn_simpan_requirement_jurusan').on('click',function(){
    		var id_requirement=$('#idrequirement_jurusanedit').val();
    		var nama_jurusan=$('#namarequirement_jurusanedit').val();
    		$.ajax({
    			type : "POST",
    			url  : "<?php echo base_url('admin/update_requirement_jurusan')?>",
    			dataType : "JSON",
    			data : {id_requirement:id_requirement , nama_jurusan:nama_jurusan},
    			success: function(data){
    				$('[name="id_requirement_jurusan_edit"]').val("");
    				$('[name="nama_requirement_jurusan_edit"]').val("");
    				$('#Modal_Edit_requirement_jurusan').modal('hide');
    				tampil_listrequirement_jurusan();
    			}
    		});
    		return false;
    	});
    });
    </script>
    <!-- end requirement_jurusan -->


    <script>
    $(function () {
      $('#example1').DataTable()
      $('#example3').DataTable()
      $('#example4').DataTable()
      $('#example5').DataTable()
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

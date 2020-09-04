<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php echo $title; ?></title>
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/font-awesome/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/bower_components/Ionicons/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/dist/css/AdminLTE.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/admin/plugins/iCheck/square/blue.css">

  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <div class="login-logo">
    <a href="<?php echo base_url(); ?>"><b>ITERA</b> Career Center</a>
  </div>
  <!-- /.login-logo -->
  <div class="login-box-body">
    <p class="login-box-msg">Sign in to start your session</p>
    
    <div id="responseDiv3" class="alert alert-danger alert-mg-b" style="margin-left:20px; margin-right:20px;  display:none;">
      <button type="button" class="close" data-dismiss="alert" aria-label="Close">
        <span aria-hidden="true">×</span>
      </button>
      <span id="message3"></span>
    </div>

    <form id="admin_login" class="adminpro-form">
      <div class="form-group has-feedback">
        <input type="text" class="form-control" name="Email" placeholder="Username" required>
        <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
      </div>
      <div class="form-group has-feedback">
        <input type="password" class="form-control" name="Password" placeholder="Password" required>
        <span class="glyphicon glyphicon-lock form-control-feedback"></span>
      </div>
      <div class="row">
        <div class="col-xs-8">
          <div class="checkbox icheck">
            <label>
              <input type="checkbox"> Remember Me
            </label>
          </div>
        </div>
        <!-- /.col -->
        <div class="col-xs-4">
          <button type="submit" class="btn btn-primary btn-block btn-flat">&nbsp<span id="button_login"></span></button>
        </div>
        <!-- /.col -->
      </div>
    </form>
    <!-- /.social-auth-links -->
  </div>
  <!-- /.login-box-body -->
</div>
<!-- /.login-box -->

<script src="<?php echo base_url() ?>assets/admin/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<script src="<?php echo base_url() ?>assets/admin/plugins/iCheck/icheck.min.js"></script>
<script>
  $(function () {
    $('input').iCheck({
      checkboxClass: 'icheckbox_square-blue',
      radioClass: 'iradio_square-blue',
      increaseArea: '20%' /* optional */
    });
  });
</script>

<script type="text/javascript">
$(document).ready(function(){
  $('#button_login').html('<i class="fa fa-sign-in"></i>&nbspMasuk');
  $('#admin_login').submit(function(e){
    e.preventDefault();
    $('#button_login').html('<img src="http://localhost/karir/assets/gambar/login.gif" width="30" height="30">...');
    var url = '<?php echo base_url(); ?>';
    var user = $('#admin_login').serialize();
    var login = function(){
      $.ajax({
        type: 'POST',
        url: url + 'admin/login',
        dataType: 'json',
        data: user,
        success:function(response){
          $('#message3').html(response.message);
          $('#button_login').html('<i class="fa fa-sign-in"></i>&nbspMasuk');
          if(response.error){
            $('#responseDiv3').removeClass('alert-success').addClass('alert-danger').show();
          }
          else{
            $('#responseDiv3').removeClass('alert-danger').addClass('alert-success').show();
            $('#admin_login')[0].reset();
            setTimeout(function(){
              location.href = "Admin/Dashboard";
            }, 1000);
          }
        }
      });
    };
    setTimeout(login, 1000);
  });

  $(document).on('click', '#clearMsg', function(){
    $('#responseDiv').hide();
  });
});
</script>

</body>
</html>

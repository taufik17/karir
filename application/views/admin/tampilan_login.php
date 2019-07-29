<!doctype html>
<html class="no-js" lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title><?php echo $title; ?></title>
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i,800" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/font-awesome.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/adminpro-custon-icon.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/meanmenu.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/jquery.mCustomScrollbar.min.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/animate.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/normalize.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/form.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/style.css">
  <link rel="stylesheet" href="<?= base_url() ?>assets/admin/css/responsive.css">
  <script src="<?= base_url() ?>assets/admin/js/vendor/modernizr-2.8.3.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
</head>

<body class="materialdesign">
  <div class="wrapper-pro">
    <!-- Header top area start-->
    <div class="content">
      <div class="login-form-area mg-t-30 mg-b-40">
        <div class="container-fluid">
          <div class="row">
            <div class="col-lg-4"></div>
            <form id="admin_login" class="adminpro-form">
              <div class="col-lg-4">
                <div class="login-bg">
                  <div class="row">
                    <div class="col-lg-12">
                      <div class="logo">
                        <a href="#"><img src="<?= base_url(); ?>assets/img/logo-login.png" alt="" width="100"></img>
                        </a>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-12">

                      <div id="responseDiv3" class="alert alert-danger alert-mg-b" style="margin-left:20px; margin-right:20px;  display:none;">
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                          <span aria-hidden="true">×</span>
                        </button>
                        <span id="message3"></span>
                      </div>

                      <div class="login-title">
                        <h1>Login Administrator</h1>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="login-input-head">
                        <p>Username</p>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="login-input-area">
                        <input type="text" name="username" required />
                        <i class="fa fa-envelope login-user" aria-hidden="true"></i>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">
                      <div class="login-input-head">
                        <p>Password</p>
                      </div>
                    </div>
                    <div class="col-lg-8">
                      <div class="login-input-area">
                        <input type="password" name="password" required />
                        <i class="fa fa-lock login-user"></i>
                      </div>
                      <div class="row">
                        <div class="col-lg-12">
                          <div class="login-keep-me">
                            <label class="checkbox">
                              <input type="checkbox" name="remember" checked><i></i>Keep me logged in
                            </label>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-lg-4">

                    </div>
                    <div class="col-lg-8">
                      <div class="login-button-pro">
                        <button type="submit" class="login-button login-button-lg">&nbsp<span id="button_login"></span></button>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </form>
            <div class="col-lg-4"></div>
          </div>
        </div>
      </div>
      <!-- login End-->
    </div>
  </div>

  <script src="<?php echo base_url() ?>assets/js/vendor/jquery-2.2.4.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/vendor/bootstrap.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/superfish.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.ajaxchimp.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.magnific-popup.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/owl.carousel.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.sticky.js"></script>
  <script src="<?php echo base_url() ?>assets/js/jquery.nice-select.min.js"></script>
  <script src="<?php echo base_url() ?>assets/js/main.js"></script>

  <script type="text/javascript">
  $(document).ready(function(){
    $('#button_login').html('<i class="fa fa-sign-in"></i>&nbspMasuk');
    $('#admin_login').submit(function(e){
      e.preventDefault();
      $('#button_login').html('<img src="http://localhost/karir/assets/gambar/login.gif" width="30" height="30">Proses Login...');
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

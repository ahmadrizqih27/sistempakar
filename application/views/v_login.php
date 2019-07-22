<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Dark Bootstrap Admin by Bootstrapious.com</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/newcss/vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/newcss/vendor/font-awesome/css/font-awesome.min.css">
    <!-- Custom Font Icons CSS-->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/newcss/css/font.css">
    <!-- Google fonts - Muli-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Muli:300,400,700">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/newcss/css/style.default.premium.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo base_url('') ?>assets/newcss/css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="<?php echo base_url('') ?>assets/newcss/img/favicon.ico">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <div class="login-page">
      <div class="container d-flex align-items-center">
        <div class="form-holder has-shadow">
          <div class="row">
            <!-- Logo & Information Panel-->
            <div class="col-lg-6">
              <div class="info d-flex align-items-center">
                <div class="content">
                  <div class="logo">
                    <h1>Login</h1>
                  </div>
                  <p>Sistem Informasi Kurikulum Politeknik Negeri Malang</p>
                </div>
              </div>
            </div>
            <!-- Form Panel    -->
            <div class="col-lg-6 bg-white">
              <div class="form d-flex align-items-center">
                <div class="content">
                  <?php $attributes = array('class' => 'form-validate'); ?>
                  <?php echo form_open('login/ceklogin', $attributes);?>
                    <div class="form-group">
                      <input id="login-username" name="no_induk" type="text"  required data-msg="Masukkan username" class="input-material">
                      <label for="login-username" class="label-material">Username</label>
                    </div>
                    <div class="form-group">
                      <input id="login-password" name="password" type="password" name="loginPassword" required data-msg="Masukkan Password" class="input-material">
                      <label for="login-password" class="label-material">Password</label>
                    </div>
                    <button type="submit" class="btn btn-primary">Login</button>
                    <!-- This should be submit button but I replaced it with <a> for demo purposes-->
                  <?php echo form_close(); ?>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="copyrights text-center">
        <p>Design by <a href="https://bootstrapious.com" class="external">Group 4</a></p>
        <!-- Please do not remove the backlink to us unless you support further theme's development at https://bootstrapious.com/donate. It is part of the license conditions. Thank you for understanding :)-->
      </div>
    </div>
    <!-- JavaScript files-->
    <script src="<?php echo base_url('') ?>assets/newcss/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/newcss/vendor/popper.js/umd/popper.min.js"> </script>
    <script src="<?php echo base_url('') ?>assets/newcss/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/newcss/vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="<?php echo base_url('') ?>assets/newcss/vendor/chart.js/Chart.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/newcss/vendor/jquery-validation/jquery.validate.min.js"></script>
    <script src="<?php echo base_url('') ?>assets/newcss/js/front.js"></script>
  </body>
</html>
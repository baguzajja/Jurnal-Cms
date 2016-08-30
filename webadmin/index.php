<!DOCTYPE html>
<html>
<!--
///////////////////////////////////////////////
///          Copyright AFDAL YUSRA          ///
///          No Hp  : 085278458544          ///
///      E-Mail : afdalyusra94@gmail.com    ///
///        AMIK - STMIK JAYANUSA PADANG     ///
///////////////////////////////////////////////
-->
  <head>
    <meta charset="UTF-8">
    <title>E-Journal FIP</title>
	<link rel='shortcut icon' href='image/icon.gif' />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <!-- Bootstrap 3.3.2 -->
    <link href="templeate/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <!-- Font Awesome Icons -->
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <!-- Theme style -->
    <link href="templeate/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <!-- iCheck -->
    <link href="templeate/plugins/iCheck/square/blue.css" rel="stylesheet" type="text/css" />

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
    <![endif]-->
  </head>
  <body background="image/symphony.png">
    <div class="login-box"><!-- /.login-logo -->
	  <table border="2" width="100%">
	  <tr><td>
      <div class="login-box-body">
        <p class="login-box-msg"><img src="image/banner.jpg" width="100%" height=""><br>&nbsp;
        <form action="xlogin.php" method="post">
          <div class="form-group has-feedback">
            <input type="text" class="form-control" name="un" placeholder="Username / NIM / NIDN"/>
            <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
          </div>
          <div class="form-group has-feedback">
            <input type="password" class="form-control" name="ps" placeholder="Password"/>
            <span class="glyphicon glyphicon-lock form-control-feedback"></span>
          </div>
          <div class="row">
            <div class="col-xs-8">    
              <div class="checkbox icheck">
                <label>
                  <input type="checkbox"> Remember Me
                </label>
              </div>                        
            </div><!-- /.col -->
            <div class="col-xs-4">
              <button type="submit" class="btn btn-primary btn-block btn-flat">Sign In</button>
            </div><!-- /.col -->
          </div>
        </form>

        <div class="social-auth-links text-center">
          <p><b>LIKE US</b></p>
          <a href="#" class="btn btn-block btn-social btn-facebook btn-flat"><i class="fa fa-facebook"></i> E-Journal Fakultas Ilmu Pendidikan UNP</a>
          <a href="#" class="btn btn-block btn-social btn-google-plus btn-flat"><i class="fa fa-google-plus"></i> Mail Fakultas Ilmu Pendidikan UNP</a>
        </div><!-- /.social-auth-links -->

        <a href="#">Lupa Password Login</a><br>
        <a href="register.html" class="text-center">Manual Book E-Journal</a>

      </div><!-- /.login-box-body -->
    </div><!-- /.login-box -->
	</td></tr>
	</table>

    <!-- jQuery 2.1.3 -->
    <script src="templeate/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="templeate/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- iCheck -->
    <script src="templeate/plugins/iCheck/icheck.min.js" type="text/javascript"></script>
    <script>
      $(function () {
        $('input').iCheck({
          checkboxClass: 'icheckbox_square-blue',
          radioClass: 'iradio_square-blue',
          increaseArea: '20%' // optional
        });
      });
    </script>
  </body>
</html>
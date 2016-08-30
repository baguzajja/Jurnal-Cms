<?php
session_start();
error_reporting(0);
if(!empty($_SESSION[userid])){
	include "config/koneksi.php";
	$tahun= mysql_query("select*from tahun where stat_ta='Aktif'");
	$thn = mysql_fetch_array($tahun);
?>
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
    <title>.:: E-JOURNAL ::.</title>
	<link rel='shortcut icon' href='image/icon.gif' />
    <meta content='width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no' name='viewport'>
    <link href="templeate/bootstrap/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css" />
    <link href="http://code.ionicframework.com/ionicons/2.0.0/css/ionicons.min.css" rel="stylesheet" type="text/css" />
    <link href="templeate/plugins/datatables/dataTables.bootstrap.css" rel="stylesheet" type="text/css" />
    <link href="templeate/dist/css/AdminLTE.min.css" rel="stylesheet" type="text/css" />
    <link href="templeate/dist/css/skins/_all-skins.min.css" rel="stylesheet" type="text/css" />
	<link rel="shortcut icon" href="images/logo.png" />
	<script type="text/javascript" src="ckeditor/ckeditor.js"></script>
	<script type="text/javascript" src="ckeditor/style.js"></script>
</head>
  <body class="skin-blue">
    <div class="wrapper">
      
      <header class="main-header">
        <a href="index2.html" class="logo"><b>TODAK</b> source</a>
        <nav class="navbar navbar-static-top" role="navigation">
          <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
              <!-- Messages: style can be found in dropdown.less-->
              
              <!-- User Account: style can be found in dropdown.less -->
              <li class="dropdown user user-menu">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                  <img src="./modul/image/don.png" class="user-image" alt="User Image"/>
                  <span class="hidden-xs"><?php echo"$_SESSION[userid]"?></span>
                </a>
                <ul class="dropdown-menu">
                  <!-- User image -->
                  <li class="user-header">
                    <img src="./modul/image/<?php echo $_SESSION[foto];?>" class="img-circle" alt="User Image" />
                    <p>
                      <?php echo"<center>$_SESSION[nu] <br>Informa Teknologi"?>
                      <small></small>
                    </p>
                  </li>
                  <!-- Menu Body -->
      
                  <!-- Menu Footer-->
                  <li class="user-footer">
                    <div class="pull-left">
                      <a href="?modul=ganti" class="btn btn-default btn-flat">Profile</a>
                    </div>
                    <div class="pull-right">
                      <a href="logout.php" class="btn btn-default btn-flat">Sign out</a>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
          </div>
        </nav>
      </header>
      <!-- Left side column. contains the logo and sidebar -->
      <aside class="main-sidebar">
        <!-- sidebar: style can be found in sidebar.less -->
        <section class="sidebar">
          <!-- Sidebar user panel -->
          <div class="user-panel">
            <div class="pull-left image">
              <img src="./modul/image/<?php echo $_SESSION[foto];?>" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
              <p><?php echo"$_SESSION[nu]";?></p>

              <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
          </div>
          <!-- search form -->
          <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
              <input type="text" name="q" class="form-control" placeholder="Search..."/>
              <span class="input-group-btn">
                <button type='submit' name='seach' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
              </span>
            </div>
          </form>
          <!-- /.search form -->
          <!-- sidebar menu: : style can be found in sidebar.less -->
       <?php
			include"menu.php";
	   ?>
      </aside>

      <!-- Right side column. Contains the navbar and content of the page -->
      <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
          <h1>
            <?php echo"$_SESSION[tool_nama]";?>
            <small><?php echo"";?></small>
          </h1>
          <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li class="active"><?php echo"$_GET[modul]";?></li>
          </ol>
        </section>

        <!-- Main content -->
        <section class="content">
          <div class="row">
            <div class="col-xs-12">
              <div class="box">
			  <div class="box-body">
                  <?php
						include"conten.php";
				  ?>
                </div><!-- /.box-body -->
              </div><!-- /.box -->

            
            </div><!-- /.col -->
          </div><!-- /.row -->
        </section><!-- /.content -->
      </div><!-- /.content-wrapper -->
      <footer class="main-footer">
        <div class="pull-right hidden-xs">
          <b>Version</b> 2.1
        </div>
        <strong>Copyright &copy; 2016 <a href="">AFDAL YUSRA</a>.</strong> All rights reserved.
      </footer>
    </div><!-- ./wrapper -->

    <!-- jQuery 2.1.3 -->
    <script src="templeate/plugins/jQuery/jQuery-2.1.3.min.js"></script>
    <!-- Bootstrap 3.3.2 JS -->
    <script src="templeate/bootstrap/js/bootstrap.min.js" type="text/javascript"></script>
    <!-- DATA TABES SCRIPT -->
    <script src="templeate/plugins/datatables/jquery.dataTables.js" type="text/javascript"></script>
    <script src="templeate/plugins/datatables/dataTables.bootstrap.js" type="text/javascript"></script>
    <!-- SlimScroll -->
    <script src="templeate/plugins/slimScroll/jquery.slimscroll.min.js" type="text/javascript"></script>
    <!-- FastClick -->
    <script src='templeate/plugins/fastclick/fastclick.min.js'></script>
    <!-- AdminLTE App -->
    <script src="templeate/dist/js/app.min.js" type="text/javascript"></script>
    <!-- AdminLTE for demo purposes -->
    <script src="templeate/dist/js/demo.js" type="text/javascript"></script>
    <!-- page script -->
    <script type="text/javascript">
		
      $(function () {
        $("#example1").dataTable();
        $('#example2').dataTable({
          "bPaginate": true,
          "bLengthChange": false,
          "bFilter": false,
          "bSort": true,
          "bInfo": true,
          "bAutoWidth": false
        });
      });
    </script>

<?php
}else{
header("Location:index.php");
}
?>
  </body>
</html>

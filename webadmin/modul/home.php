<?php
///////////////////////////////////////////////
///          Copyright AFDL YUSRA           ///
///          No Hp  : 085278458544          ///
///      E-Mail : afdalyusra94@gmail.com    ///
///        AMIK - STMIK JAYANUSA PADANG     ///
///////////////////////////////////////////////
	session_start();
	error_reporting(0);
if(!empty($_SESSION[userid])){
//==========================================UNTUK ADMINISTRATOR=====================================================================
if($_SESSION[aksesid] == 0 or $_SESSION[aksesid] == 1 or $_SESSION[aksesid] == 2){
?>
 <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-aqua">
                <div class="inner">
                  <h3 color="white">
                    <id style="color:#ffffff">100%
                  </h3>
                  <p>
                    HOME
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?php echo"?$modul=".md5("home")."";?>" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-green">
                <div class="inner">
                  <h3>
				  <?php
					$sql=mysql_query("select count(id_pel) as pegawai from penelitian where id_pel=1");
					$data=mysql_fetch_array($sql);
				  ?>
                   <id style="color:#ffffff"> <?php echo"$data[pegawai]"; ?><sup style="font-size: 20px"></sup>
                  </h3>
                  <p>
                    LIST PENELITIAN DOSEN
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>
                <a href="<?php echo"?$modul=".md5("penelitian")."&pel=1";?>" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-yellow">
                <div class="inner">
				<?php
					$sqlx=mysql_query("select count(id_pel) as pegawai from penelitian where id_pel=2");
					$datax=mysql_fetch_array($sqlx);
				  ?>
                  <h3>
                     <id style="color:#ffffff"> <?php echo"$datax[pegawai]"; ?>
                  </h3>
                  <p>
                    LIST PENELITIAN MAHASISWA
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
                <a href="<?php echo"?$modul=".md5("penelitian")."&pel=2";?>" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-red">
                <div class="inner">
				<?php
					$sqlxx=mysql_query("select count(id_pel) as pegawai from penelitian where id_pel=3");
					$dataxx=mysql_fetch_array($sqlxx);
				  ?>
                  <h3>
                   <id style="color:#ffffff">  <?php echo"$dataxx[pegawai]";?>
                  </h3>
                  <p>
                    JOURNAL FIP UNP
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-pie-graph"></i>
                </div>
                <a href="<?php echo"?$modul=".md5("penelitian")."&pel=3";?>" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->

          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-blue">
                <div class="inner">
                  <h3>
				  <?php
					$sqlz=mysql_query("select count(id_pel) as pegawai from penelitian where id_pel=4");
					$dataz=mysql_fetch_array($sqlz);
				  ?>
                  <id style="color:#ffffff">   <?php echo"$dataz[pegawai]"; ?>
                  </h3>
                  <p>
                    PENELITIAN MAHASISWA
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-cart-outline"></i>
                </div>
                <a href="<?php echo"?$modul=".md5("penelitian")."&pel=4";?>" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-purple">
                <div class="inner">
                  <h3>
				   <?php
					$sqls=mysql_query("select count(nip) as pegawai from form_skp where tahun='$thn[nm_ta]' AND acc='Y'");
					$datas=mysql_fetch_array($sqls);
				  ?>
                   <id style="color:#ffffff">  88,99%<sup style="font-size: 20px"></sup>
                  </h3>
                  <p>
                    SEARCHING
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-briefcase-outline"></i>
                </div>
                <a href="<?php echo"?$modul=".md5("search")."";?>" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-teal">
                <div class="inner">
                  <h3>
				   <?php
					$sqlq=mysql_query("select count(username) as pegawai from user");
					$dataq=mysql_fetch_array($sqlq);
				  ?>
                  <id style="color:#ffffff">   <?php echo"$dataq[pegawai]"; ?>
                  </h3>
                  <p>
                   MANAGEMENT USER
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-alarm-outline"></i>
                </div>
                <a href="<?php echo"?modul=user"?>" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
            <div class="col-lg-3 col-xs-6">
              <!-- small box -->
              <div class="small-box bg-maroon">
                <div class="inner">
                  <h3>
                   <id style="color:#ffffff">  99%
                  </h3>
                  <p>
                    CHANGE PASSWORD
                  </p>
                </div>
                <div class="icon">
                  <i class="ion ion-ios-pricetag-outline"></i>
                </div>
                <a href="<?php echo"?modul=ganti";?>" class="small-box-footer">
                  More info <i class="fa fa-arrow-circle-right"></i>
                </a>
              </div>
            </div><!-- ./col -->
          </div><!-- /.row -->
<?php
}
//==============================TUTUP ADMINISTRATOR======================================================================================================
?>
<?php
}else{
	header("Location:index.php");
}
//==============================TUTUP GURU======================================================================================================
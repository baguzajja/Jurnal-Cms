<?php
///////////////////////////////////////////////
///          Copyright AFDL YUSRA           ///
///          No Hp  : 085278458544          ///
///      E-Mail : afdalyusra94@gmail.com    ///
///        AMIK - STMIK JAYANUSA PADANG     ///
///////////////////////////////////////////////
	session_start();
	include "config/koneksi.php";
	session_unset();
	session_destroy();
	header("Location:index.php");

?>

<?php
///////////////////////////////////////////////
///          Copyright AFDL YUSRA           ///
///          No Hp  : 085278458544          ///
///      E-Mail : afdalyusra94@gmail.com    ///
///        AMIK - STMIK JAYANUSA PADANG     ///
///////////////////////////////////////////////
		session_start();
		$modul=MD5("modul");
		if ($_GET[$modul] == MD5("home"))
		{
			include "./modul/home.php";
		}
		if ($_GET[$modul] == MD5("penelitian"))
		{
			include "./modul/penelitian.php";
		}
		if ($_GET[$modul] == MD5("search"))
		{
			include "./modul/search.php";
		}
		if ($_GET["modul"] == "upload")
		{
			include "./modul/upload.php";
		}
		if ($_GET["modul"] == "uploads")
		{
			include "./modul/uploads.php";
		}
		if ($_GET["modul"] == "user")
		{
			include "./modul/user.php";
		}
		if ($_GET["modul"] == "ganti")
		{
			include "./modul/ganti.php";
		}
?>

<?php

include "../config/koneksi.php";
session_start();
$dx=$_SESSION[userid];
$cek = $_POST[cek];
$jumlah = count($cek);
$md=MD5("modul");
$modul = $_GET[$md];
$act   = $_GET[act];
$jam=date('H:i:s');
$date=date('Y-m-d');
$nama  = MD5("penelitian");

	if ($modul == $nama AND $act == "simpan")
	{
		include"./proses.php";
		mysql_query("insert into penelitian (id_pel,pel_kode,pel_judul,pel_keterangan,pel_abstrak,pel_waktu,pel_penulis,pel_upload) VALUES ('$_POST[kd_pel]','$_POST[kode]','$_POST[judul]','$_POST[keterangan]','$_POST[abstrak]','$_POST[thn]-$_POST[m]-$_POST[t]','$_POST[penulis]','$dx')");
		header("Location:../media.php?".md5("modul")."=".$modul);
	} 
//==============================================================================================================================================================================================================================================================================================================//
	if ($modul == $nama AND $act == "delete")
	{
		mysql_query("delete from penelitian WHERE id_m = '$_GET[id]'");
		header("Location:../media.php?".md5("modul")."=".$modul);
	} 
	if ($modul == $nama AND $act == "deletex")
	{
		mysql_query("delete from jurnal_pel WHERE id_m = '$_GET[id]'");
		header("Location:../media.php?".md5("modul")."=".$modul);
	} 

?>

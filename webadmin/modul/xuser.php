<?php

include "../config/koneksi.php";
$bro=date('Y-m-d');
$modul = $_GET[modul];
$act   = $_GET[act];

$nama  = "user";

	if ($modul == $nama AND $act == "simpan")
	{
		mysql_query("insert into user (username,password,nama,akses) VALUES ('$_POST[un_user]',MD5('$_POST[ps_user]'), '$_POST[nm_user]','$_POST[id_akses]')");
		header("Location:../media.php?modul=".$modul);
	} 

	
	if ($modul == $nama AND $act == "update")
	{
		if (empty($_POST[ps_user]))
		{
			mysql_query("UPDATE user SET nm_user = '$_POST[nm_user]' , un_user = '$_POST[un_user]',id_akses = '$_POST[id_akses]' WHERE id_user = '$_POST[id_user]'");
			header("Location:../media.php?modul=".$modul);
		}
		else
		{
			mysql_query("UPDATE user SET nm_user = '$_POST[nm_user]' , un_user = '$_POST[un_user]', ps_user = MD5('$_POST[ps_user]'),id_akses = '$_POST[id_akses]' WHERE id_user = '$_POST[id_user]'");
			header("Location:../media.php?modul=".$modul);
		}
	} 

	if ($modul == $nama AND $act == "delete")
	{
		mysql_query("delete from user WHERE username = '$_GET[id]'");
		header("Location:../media.php?modul=".$modul);
	} 
	
?>

<?php
session_start();
if(!empty($_SESSION[userid])){
/**
	Nama	: Afdal Yusra
	E-Mail	: afdalyusra94@gmail.com
	No HP	: +6285278458544
	Fb		: facebook/afdal25
*/

$modul=MD5("modul");
echo "<ul class='sidebar-menu'>
		<li><a href=?$modul=".md5("home")."><i class='fa fa-dashboard'></i><span class='hidden-tablet'> Dashbord</a></li>";
			
			echo "<li><a class='treeview'  href=?$modul=".md5("penelitian")."&pel=1><i class='fa fa-th'></i><span class='hidden-tablet'> List Penelitian Dosen</a></li>";
			echo "<li ><a class='treeview' href=?$modul=".md5("penelitian")."&pel=2><i class='fa fa-edit'></i><span class='hidden-tablet'> List Penelitian Mahasiswa</a></li>
				  <li ><a class='treeview' href=?$modul=".md5("penelitian")."&pel=3><i class='fa fa-circle-o'></i><span class='hidden-tablet'> Journal FIP</a></li>";
			echo "<li ><a class='treeview' href=?$modul=".md5("penelitian")."&pel=4><i class='fa fa-envelope'></i><span class='hidden-tablet'> Penelitian Mahasiswa</a></li>";
			echo "<li ><a class='treeview' href=?$modul=".md5("search")."><i class='fa fa-laptop'></i><span class='hidden-tablet'> Searching</a></li>";
			if ($_SESSION['aksesid'] == 0){ /* Administrator */
			echo "<li><a class='treeview'  href=?modul=user><i class='fa fa-th'></i><span class='hidden-tablet'> Management User</a></li>";
			}
			echo "<li><a class='treeview'  href=?modul=ganti><i class='fa fa-th'></i><span class='hidden-tablet'> Change Password</a></li>";
				
	echo"
      </ul>";
}else{
		header("Location:index.php");
}
?>

<?php
switch($_GET[act])
	{
default:
echo "<h3><center>GANTI PASSWORD</center></h3>";
		$sql  = mysql_query("SELECT *FROM user WHERE username = '$_SESSION[userid]'");
			$data = mysql_fetch_array($sql);
		echo "<form action=./modul/xganti.php?modul=ganti&act=update method=post onSubmit=\"return pwd(this)\">
			<input type=hidden value=\"$data[username]\" name=id>
			
			<table id='example2' class='table table-bordered table-hover'>
			<tr><td>Username</td><td>$data[nama]</td></tr>
			<tr><td>Password</td><td><input type=password name=pss></td></tr>
			<tr><td>Konfirmasi Password</td><td><input type=password name=psk></td></tr>
			
			<tr><td colspan=2 align=right id=tombol><input type=submit class='btn btn-info' value='Update Password'>
			<input type=button value=Cancel class='btn btn-danger' onClick=\"self.history.back()\"></td></tr>
				</table></form>";
}
?>

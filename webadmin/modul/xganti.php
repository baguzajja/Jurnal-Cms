<?php
	include "../config/koneksi.php";
	
$modul = $_GET[modul];
$act = $_GET[act];

	
	if ($modul == "ganti" AND $act == "update")
	{
		if($_POST[pss] == $_POST[psk])
		{
		mysql_query("UPDATE user SET 
			password = MD5('$_POST[pss]') WHERE username = '$_POST[id]'");
			?>
			<script language="javascript">
		{
				alert("Password Berhasil Diganti");
				setTimeout("location.href='../media.php?modul=ganti'");
		}
		</script>
		
	<?php	
		}
	else
			{
		?>
	<script language="javascript">
		{
				alert("Password Tidak Cocok");
				setTimeout("location.href='../media.php?modul=ganti'");
		}
		</script>
		
	<?php
			}
	}	
	
	
?>

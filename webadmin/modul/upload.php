<?php
$sql = mysql_query("select *from masuk where id_m = '$_GET[id]'");
		$no=1;
		$data = mysql_fetch_array($sql);
		echo " Nama : $data[nomor]<br>";
?>

<form name="form" method="post" enctype="multipart/form-data" action="modul/proses.php">
Image : <input name="data_upload" type="file" />
<input type="hidden" value="<?php echo"$_GET[id]";?>" name="id">
<input type="hidden" value="<?php echo"$data[nomor]";?>" name="nomor">
<input type="submit" name="upload" value="Upload" />
</form>

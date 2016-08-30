<?php
$sql = mysql_query("select *from penelitian where id_m = '$_GET[id]'");
		$no=1;
		$data = mysql_fetch_array($sql);
?>

<form name="form" method="post" enctype="multipart/form-data" action="modul/prosess.php">
<table class='table table-striped table-bordered bootstrap-datatable datatable responsive'>
<tr>
	<td>Judul Penelitian</td>
	<td><?php echo"$data[pel_judul]"; ?></td>
</tr>
<tr>
	<td>Penulis</td>
	<td><?php echo"$data[pel_penulis]"; ?></td>
</tr>

<tr>
	<td>Upload File</td>
	<td><input name="data_upload" type="file" /></td>
</tr>
<input type="hidden" value="<?php echo"$_GET[id]";?>" name="id">

<tr>
	<td></td>
	<td><input type="submit" name="upload" class='btn btn-info' value="Upload" /></td>
</tr>
</table>

</form>

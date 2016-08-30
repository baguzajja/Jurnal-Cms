<?php
$tanggal=date('d-m-Y');
$tanggal1=date('Y-m-d');
$jam = date('H:i');
$modul = MD5("search");
$batas = 20;
	$halaman = $_GET[halaman];
	if (empty($halaman))
	{
		$posisi = 0;
		$halaman = 1;
	}	
	else
	{
		$posisi = ($halaman - 1) * $batas;
	}

	switch($_GET[act])
	{
		default:

		echo"<font color=green><b>Tanggal : $tanggal <blink><font color=red> Jam $jam</blink></font></b></center>";
		echo "<form action=?".MD5("modul")."=$modul&act=cari method=post id=tombol>";
			echo"<table class='table table-striped table-bordered bootstrap-datatable datatable responsive'>
			     <tr>
						<td>Cari Jurnal & Penelitian : 

				<select name=tipe>";
				
						echo"<option value='0'>Dosen</option>";
						echo"<option value='1'>Mahasiswa</option>";
								
				echo"</select>
					
				<select name=t>";
				echo"<option value='%'>All</option>";
				for($i=1;$i<=31;$i++)
					{
						if($i<=9){
						echo"<option>0$i</option>";
						}else{
						echo"<option>$i</option>";
						}
					}
				echo"</select>";
				echo"<select name=m>";
				
						echo"<option value='%'>All</option>";
						echo"<option value='01'>Januari</option>";
						echo"<option value='02'>Februari</option>";
						echo"<option value='03'>Maret</option>";
						echo"<option value='04'>April</option>";
						echo"<option value='05'>Mei</option>";
						echo"<option value='06'>Juni</option>";
						echo"<option value='07'>Juli</option>";
						echo"<option value='08'>Agustus</option>";
						echo"<option value='09'>September</option>";
						echo"<option value='10'>Oktober</option>";
						echo"<option value='11'>November</option>";
						echo"<option value='12'>Desember</option>";
								
				echo"</select>";
				echo"<select name=thn>";
				echo"<option value='%'>All</option>";
				for($i=2014;$i<=2020;$i++)
					{
						echo"<option>$i</option>";
					}				
				echo"</select>

				
				
				<input type=text name=cari size=35 placeholder='Masukan Kata Kunci'> <input type=submit class='btn btn-success' value='Search Now'></td>
				 </tr>
				 </table>";
		echo"</form>";
		echo "<p><table class='table table-striped table-bordered bootstrap-datatable datatable responsive'>
				<tr>
					<th>No</th>
					<th><center>Kode Penelitian</th>
					<th><center>Judul Penelitian</th>
					<th><center>Waktu</th>
					<th><center>Penulis</th>
					<th><center>Download File</th>
					<th><center>Upload Cover</th>
					<th><center>Delete</th>
				</tr>";
		$sqlx = mysql_query("select*from penelitian LIMIT $posisi, $batas");
		$no = 1;
		while ($datax = mysql_fetch_array($sqlx))
		{
		
			echo "<tr>
				<td width=5%; align=center>$no</td>
				<td>$datax[pel_kode]</td>
				<td>$datax[pel_judul]</td>
				<td>$datax[pel_waktu]</td>
				<td>$datax[pel_penulis]</td>
				<td><a href='./modul/files/$datax[file]'><center><img src=image/page_white_put.png></a></td>
				<td>";if(empty($datax[pel_cover])){echo"<a href=?modul=uploads&act=edit&id=$datax[id_m]><center><img src=image/webcam.png><br>File Belum Ada";}else{echo"<center><img src='./modul/file/$datax[pel_cover]' width=80px height=100px>";}echo"</a></td>";

				echo "<td align=center width=4%><a href=./modul/xpenelitian.php?".MD5("modul")."=$modul&act=delete&id=$datax[id_m] onClick=\"return confirm('Delete Jurnal')\"><img src=image/del.png border=0></a></td>
				</tr>";
			$no++;
		} 
		echo "</table>";

		$sql1 = mysql_query("SELECT*from penelitian");
		$jumlah = mysql_num_rows($sql1);
			$jmlhalaman = ceil($jumlah / $batas);
			
			echo "<div id=paging>";
			if ($halaman > 1) 
				{
				$previous = $halaman - 1;
				echo "<A HREF=$_SERVER[PHP_SELF]?".MD5("modul")."=$modul&halaman=1> << First</A><A HREF=$_SERVER[PHP_SELF]?".MD5("modul")."=$modul&halaman=$previous> < Previous</A>  ";
				}
				else{
					echo "<< First | < Previous | ";
				}

			$angka = ($halaman > 4 ? "  " : " "); //Ternary operator
				for ($i=$halaman;$i<($halaman);$i++) {
					if ($i > 1)
						continue;
					$angka .= "<A HREF=$_SERVER[PHP_SELF]?modul=$modul&halaman=$i>$i</A> ";
				}
			// Angka tengah
				$angka .= " <b>$halaman</b> ";
			for ($i=$halaman+1;$i<($halaman+8);$i++) {
				if ($i > $jmlhalaman)
					break;
			$angka .= "<A HREF=$_SERVER[PHP_SELF]?".MD5("modul")."=$modul&halaman=$i>$i</A> ";
			}

			// Angkat akhir
				$angka .= ($halaman+2<$jmlhalaman ? "
				<A HREF=$_SERVER[PHP_SELF]?".MD5("modul")."=$modul&halaman=$jmlhalaman>$jmlhalaman</A> " : " ");
			echo "$angka";

// Link ke halaman berikutnya (Next)
			if ($halaman < $jmlhalaman) {
				$next = $halaman + 1;
				echo "<A HREF=$_SERVER[PHP_SELF]?".MD5("modul")."=$modul&halaman=$next> Next > </A>
				<A HREF=$_SERVER[PHP_SELF]?".MD5("modul")."=$modul&halaman=$jmlhalaman> Last >> </A> ";
}else{
	echo "Next > | Last >>";
}
break;




		case "cari":
			echo"<font color=green><b>Tanggal : $tanggal <blink><font color=red> Jam $jam</blink></font></b></center>";
		echo "<form action=?".MD5("modul")."=$modul&act=cari method=post id=tombol>";
			echo"<table class='table table-striped table-bordered bootstrap-datatable datatable responsive'>
			     <tr>
						<td>Cari Jurnal & Penelitian : 

				<select name=tipe>";
				
						echo"<option value='00'>All</option>";
						echo"<option value='0'>Dosen</option>";
						echo"<option value='1'>Mahasiswa</option>";
								
				echo"</select>
					
				<select name=t>";
				echo"<option value='%'>All</option>";
				for($i=1;$i<=31;$i++)
					{
						if($i<=9){
						echo"<option>0$i</option>";
						}else{
						echo"<option>$i</option>";
						}
					}
				echo"</select>";
				echo"<select name=m>";
				
						echo"<option value='%'>All</option>";
						echo"<option value='01'>Januari</option>";
						echo"<option value='02'>Februari</option>";
						echo"<option value='03'>Maret</option>";
						echo"<option value='04'>April</option>";
						echo"<option value='05'>Mei</option>";
						echo"<option value='06'>Juni</option>";
						echo"<option value='07'>Juli</option>";
						echo"<option value='08'>Agustus</option>";
						echo"<option value='09'>September</option>";
						echo"<option value='10'>Oktober</option>";
						echo"<option value='11'>November</option>";
						echo"<option value='12'>Desember</option>";
								
				echo"</select>";
				echo"<select name=thn>";
				echo"<option value='%'>All</option>";
				for($i=2014;$i<=2020;$i++)
					{
						echo"<option>$i</option>";
					}				
				echo"</select>

				
				
				<input type=text name=cari size=35 placeholder='Masukan Kata Kunci'> <input type=submit class='btn btn-success' value='Search Now'></td>
				 </tr>
				 </table>";
		echo"</form>";
		echo "<p><table class='table table-striped table-bordered bootstrap-datatable datatable responsive'>
				<tr>
					<th>No</th>
					<th><center>Kode Penelitian</th>
					<th><center>Judul Penelitian</th>
					<th><center>Waktu</th>
					<th><center>Penulis</th>
					<th><center>Download File</th>
					<th><center>Upload Cover</th>
					<th><center>Delete</th>
				</tr>";
		if($_POST[tipe]==0){
			$nil="1";
			$nil1="3";
		}else if($_POST[tipe]==1){
			$nil="2";
			$nil1="4";
		}else{
			$nil="%";
			$nil1="%";
		}
		$sqlx = mysql_query("select*from penelitian where pel_waktu like '%$_POST[thn]-$_POST[m]-$_POST[t]%' AND id_pel='$nil' or id_pel='$nil1' AND pel_judul like '%$_POST[cari]%' or pel_kode like '%$_POST[cari]%'");
		$no = 1;
		while ($datax = mysql_fetch_array($sqlx))
		{
		
			echo "<tr>
				<td width=5%; align=center>$no</td>
				<td>$datax[pel_kode]</td>
				<td>$datax[pel_judul]</td>
				<td>$datax[pel_waktu]</td>
				<td>$datax[pel_penulis]</td>
				<td><a href='./modul/files/$datax[file]'><center><img src=image/page_white_put.png></a></td>
				<td>";if(empty($datax[pel_cover])){echo"<a href=?modul=uploads&act=edit&id=$datax[id_m]><center><img src=image/webcam.png><br>File Belum Ada";}else{echo"<center><img src='./modul/file/$datax[pel_cover]' width=80px height=100px>";}echo"</a></td>";

				echo "<td align=center width=4%><a href=./modul/xpenelitian.php?".MD5("modul")."=$modul&act=delete&id=$datax[id_m] onClick=\"return confirm('Delete Jurnal')\"><img src=image/del.png border=0></a></td>
				</tr>";
			$no++;
		} 
		echo "</table>";

		break;
		
	}

	

?>

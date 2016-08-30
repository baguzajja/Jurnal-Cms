<?php
include "../config/koneksi.php";

$eror		= false;
$folder		= './files/';


$file_type	= array('pdf');


$max_size	= 1000000000000000000; // 1MB

	
	$file_name	= $_FILES['data_upload']['name'];
	$file_size	= $_FILES['data_upload']['size'];
	
	$explode	= explode('.',$file_name);
	$extensi	= $explode[count($explode)-1];

	
	if(!in_array($extensi,$file_type)){
		$eror   = true;
		$pesan .= '- Type file yang anda upload tidak sesuai<br />';
	}
	if($file_size > $max_size){
		$eror   = true;
		$pesan .= '- Ukuran file melebihi batas maximum<br />';
	}
	

	if($eror == true){
		echo '<div id="eror">'.$pesan.'</div>';
	}
	else{
		
		if(move_uploaded_file($_FILES['data_upload']['tmp_name'], $folder.$file_name)){
				mysql_query("insert into jurnal_pel (id_penelitian,pel_kode,pel_judul,pel_keterangan,pel_abstrak,pel_waktu,pel_penulis,file) VALUES ('$_POST[kd_pel]','$_POST[kode]','$_POST[judul]','$_POST[keterangan]','$_POST[abstrak]','$_POST[thn]-$_POST[m]-$_POST[t]','$_POST[penulis]','$file_name')");
				header("Location:../media.php?".md5("modul")."=".MD5("home"));
			
		} else{
			echo "Proses upload eror";
		}
	}

?>
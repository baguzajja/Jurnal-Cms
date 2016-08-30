<?php

include "../config/koneksi.php";
//Buat konfigurasi upload
//Folder tujuan upload file
$eror		= false;
$folder		= './file/';

//type file yang bisa diupload
$file_type	= array('jpg','jpeg','png','gif','bmp');
//tukuran maximum file yang dapat diupload

$max_size	= 1000000000000; // 1MB

if(isset($_POST['upload'])){
	//Mulai memorises data
	$file_name	= $_FILES['data_upload']['name'];
	$file_size	= $_FILES['data_upload']['size'];
	//cari extensi file dengan menggunakan fungsi explode
	$explode	= explode('.',$file_name);
	$extensi	= $explode[count($explode)-1];

	//check apakah type file sudah sesuai
	if(!in_array($extensi,$file_type)){
		$eror   = true;
		$pesan .= '- Type file yang anda upload tidak sesuai<br />';
	}
	if($file_size > $max_size){
		$eror   = true;
		$pesan .= '- Ukuran file melebihi batas maximum<br />';
	}
	//check ukuran file apakah sudah sesuai

	if($eror == true){
		echo '<div id="eror">'.$pesan.'</div>';
	}
	else{
		//mulai memproses upload file
		if(move_uploaded_file($_FILES['data_upload']['tmp_name'], $folder.$file_name)){
			//catat nama file ke database
						mysql_query ("update penelitian set pel_cover='$file_name' where id_m=$_POST[id]"); //insert image property to database
						header("Location:../media.php?".md5("modul")."=".MD5("home"));
			echo '<div id="msg">Berhasil mengupload file '.$file_name.'</div>';
		} else{
			echo "Proses upload eror";
		}
	}
}
?>
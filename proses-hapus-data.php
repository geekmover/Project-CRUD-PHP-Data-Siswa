<?php

include("configuration.php");

if( isset($_GET['id']) ){
	
	$id = $_GET['id'];
	
	$sql = "DELETE FROM tbl_data_siswa WHERE id=$id";
	$query = mysqli_query($db, $sql);
	
	if( $query ){
		header('Location: informasi-hapus-berhasil.php');
	} else {
		die("Maaf!, Gagal menghapus...!");
	}
	
} else {
	die("akses dilarang...");
}

?>

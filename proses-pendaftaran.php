<?php

	include("configuration.php");

	// cek apakah tombol daftar sudah diklik atau blum?
	if(isset($_POST['pendaftaran'])){

		// ambil data dari formulir
		$nama = $_POST['nama'];
		$alamat = $_POST['alamat'];
		$jk = $_POST['jenis_kelamin'];
		$agama = $_POST['agama'];
		$sekolah = $_POST['sekolah_asal'];
		
		// buat query
		$sql_insertdata = "INSERT INTO tbl_data_siswa (nama, alamat, jenis_kelamin, agama, sekolah_asal) VALUE ('$nama', '$alamat', '$jk', '$agama', '$sekolah')";
		$query = mysqli_query($db, $sql_insertdata);
		
		// apakah query simpan berhasil?
		if( $query ) {
			// kalau berhasil alihkan ke halaman index.php dengan status=sukses
			header('Location: index.php?status=sukses');
		} else {
			// kalau gagal alihkan ke halaman indek.ph dengan status=gagal
			header('Location: index.php?status=gagal');
		}

	} else {
		die("Akses dilarang...");
	}

?>

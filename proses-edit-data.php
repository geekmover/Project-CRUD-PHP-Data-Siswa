<?php

    include("configuration.php");

    if(isset($_POST['simpan'])){
        
        $id = $_POST['id'];
        $nama = $_POST['nama'];
        $alamat = $_POST['alamat'];
        $jk = $_POST['jenis_kelamin'];
        $agama = $_POST['agama'];
        $sekolah = $_POST['sekolah_asal'];
        
        $sql = "UPDATE tbl_data_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jk', agama='$agama', sekolah_asal='$sekolah' WHERE id=$id";
        $query = mysqli_query($db, $sql);
        
        if( $query ) {
            header('Location: list-database.php');
        } else {
            die("Gagal menyimpan perubahan...");
        }
        
    } else {
        die("Akses dilarang...");
    }

?>

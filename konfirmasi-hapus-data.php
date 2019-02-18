<link rel="shortcut icon" type="image/png" href="icon/alarm.png" />
<?php

    include 'configuration.php';

    if( isset($_GET['id']) ){
        
        // ambil id dari query string
        $id = $_GET['id'];
        $namalengkap = $_GET['id'];

        echo '
                <title>Konfirmasi Hapus Data Calon Peserta?</title>
                <body style="font-family: monospace;">
                <center>
                <br><br><br><br><br><br><br><br><br><br><br><br><br>
                <fieldset style="width: 650px; padding: 20px; border:2px solid green; box-shadow:0 0 10px #999;">
                <img src="icon/alarm.png" height="84" width="84"/><br><br>Pemberitahuan!<br><br>  
                Data yang didapat untuk dihapus yaitu dengan ID No. <u>' . $id.'</u> di dalam database<br>';

		$sql = 'SELECT nama, alamat, jenis_kelamin, agama, sekolah_asal FROM tbl_data_siswa WHERE id = '.$id.';';
        $query = mysqli_query($db, $sql);
        
        while($siswa = mysqli_fetch_array($query)){
            echo 'Nama Lengkap <u>'.$siswa['nama'].'</u> dan beralamatkan di <u>';
            echo $siswa['alamat'].'</u>, berjenis kelamin <u>';
            echo $siswa['jenis_kelamin'].'</u> , dengan agama <u>';
            echo $siswa['agama'].'</u>, dan Asal Sekolahnya di <u>' ;
            echo $siswa['sekolah_asal'].'</u><br><br> Apakah anda ingin menghapus data ini? <br><br>';
        }
        ?>

        <form action="proses-edit-data.php" method="POST">
            <a href='list-database.php'>[---] Kembali ke List Data Pendaftar</a>    
            <a href='proses-hapus-data.php?id=<?php echo $id ?>'>[x] Hapus Data</a>  
        </form>

        <?php
        
    } else {
        die("akses dilarang...");
    }
    ?>
    <br><br>  
    </fieldset>
    </center>
    </body>
    <?php
?>
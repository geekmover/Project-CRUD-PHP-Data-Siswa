<!DOCTYPE html>
<html>
<head>
	<title>Informasi Pengelolaan Pendaftaran Siswa Baru | Madrasah Koders</title>
    <link rel="shortcut icon" type="image/png" href="icon/add.png" />
</head>

<body style="font-family: monospace;">
    <br><br><br><br><br><br><br><br><br><br><br><br><br><br>
    <center>
	<font size="10"><b>Aplikasi Madrasah Coding Indonesia</b></font><br><br>
    <font size="3"><b>Selamat Datang, Di informasi pendaftaran siswa baru</b></font>

    <br><br><br><br>
	Mulai Mengelola Data
    <br><br><br>

    <table border=0>
        <tr>
            <td align="center"><a href="form-pendaftaran.php"><img src="icon/add.png" width="84" height="84" title="Tambah Data Siswa"/></a></td>
            <td>&nbsp;</td>
            <td align="center"><a href="list-database.php"><img src="icon/list-data.png" width="84" height="84" title="Lihat Data Pendaftar"/></a></td>
            <td>&nbsp;</td>
            <td align="center"><a href="cari-data-siswa.php"><img src="icon/search.png" width="84" height="84" title="Cari Data Siswa"/></a></td>
        </tr>   
        <tr>
            <td align="center"><br>Tambah Data</td>
            <td>&nbsp;&nbsp;&nbsp;</td>
            <td align="center"><br>Lihat Data</td>
            <td>&nbsp;&nbsp;&nbsp;</td>
            <td align="center"><br>Cari Data Siswa</td>
        </tr>
    </table>
	
	<?php if(isset($_GET['status'])): ?>
	<p>
		<?php
			if($_GET['status'] == 'sukses'){
				echo "<br><br>Pendaftaran siswa baru berhasil!, <a href='list-database.php'>Menuju ke list data pendaftar</a>";
			} else {
				echo "<br><br>Pendaftaran gagal!, Mohon cek file program!";
			}
		?>
	</p>
	<?php endif; ?>
	<br><br><br>
    Copyright &copy; 2018 Form Pendaftaran Siswa. All right reserved.<br><br><br>
	
    </center>
	</body>
</html>

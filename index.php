<!DOCTYPE html>
<html>
<head>
	<title>Informasi Pengelolaan Pendaftaran Siswa Baru | Madrasah Koders</title>
</head>

<body style="font-family: monospace;">
    <br><br><br><br><br><br><br><br><br><br><br>
    <center>
	<font size="10"><b>Madrasah Indonesia</b></font><br>
    <font size="3"><b>Selamat Datang, Di informasi pendaftaran siswa baru</b></font>

    <br><br><br><br>
	Mulai Mengelola Data
    <br><br><br>

    <table border=0>
        <tr>
            <td align="center"><a href="form-pendaftaran.php"><img src="icon/profile.png" width="84" height="84" title="Tambah Data Siswa"/></a></td>
            <td>&nbsp;</td>
            <td align="center"><a href="list-database.php"><img src="icon/list.png" width="84" height="84" title="Lihat Data Pendaftar"/></a></td>
        </tr>   
        <tr>
            <td align="center"><br>Tambah Data</td>
            <td>&nbsp;&nbsp;&nbsp;</td>
            <td align="center"><br>Lihat Data</td>
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

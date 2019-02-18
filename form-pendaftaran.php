<!DOCTYPE html>
<html>
<head>
	<title>Form Tambah Siswa Baru | Madrasah Koders</title>
</head>
<style type="text/css">
    select {
        width: 150px;
		height: 25px;
    }
</style>

<body style="font-family: monospace;">
	<br><br><br>
	<center>
	<font size="6"><b>FORM TAMBAH SISWA BARU</font></b><br>
	Data siswa ini adalah data lengkap dari siswa baru yang akan mendaftar ke sekolah.<br><br><br><br>	

	<fieldset style="width: 400px; height: 220px; padding: 20px; border:2px solid green; box-shadow:0 0 10px #999;">
	<form action="proses-pendaftaran.php" method="POST">
		<table border=0>
			<tr>
				<td width="200" valign="top"><label for="nama">Nama Lengkap</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="nama" placeholder="Nama Lengkap" /></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="alamat">Alamat Lengkap</label></td>
				<td valign="top">:</td>
				<td valign="top"><textarea rows="4" cols="25,99" name="alamat"></textarea></td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="jenis_kelamin">Jenis Kelamin: </label></td>
				<td valign="top">:</td>
				<td>
					<label><input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki</label><br>
					<label><input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan</label>
				</td>
			</tr>
			<tr>
				<td width="200" valign="center"><label for="agama">Agama</label></td>
				<td valign="center">:</td>
				<td valign="center">
					<select name="agama">
						<option>Islam</option>
						<option>Kristen</option>
						<option>Hindu</option>
						<option>Budha</option>
						<option>Atheis</option>
					</select>
				</td>
			</tr>
			<tr>
				<td width="200" valign="top"><label for="sekolah_asal">Sekolah Asal</label></td>
				<td valign="top">:</td>
				<td valign="top"><input size="36" type="text" name="sekolah_asal" placeholder="Nama Sekolah Asal" /></td>
			</tr>
			<tr>
				<td></td>
				<td></td>
				<td width="200"><input style="margin-top:10px; height:25px; width:120px" height="200" type="submit" value="Save Data Siswa" name="pendaftaran" /></td>
			</tr>
		</table>
		</fieldset>
		<br><br><br>
		Copyright &copy; 2018 Form Pendaftaran Siswa. All right reserved.<br><br><br>
		<a href="list-database.php">[|] Lihat Data Calon Siswa</a>&nbsp;|&nbsp;<a href="index.php">[^] Ke Halaman Utama</a>
		</center>
	</body>
</html>

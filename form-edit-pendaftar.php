<?php 

    include("configuration.php");

    if( !isset($_GET['id']) ){
        // kalau tidak ada id di query string
        header('Location: list-siswa.php');
    }

    //ambil id dari query string
    $id = $_GET['id'];

    // buat query untuk ambil data dari database
    $sql = "SELECT * FROM tbl_data_siswa WHERE id=$id";
    $query = mysqli_query($db, $sql);
    $siswa = mysqli_fetch_assoc($query);

    // jika data yang di-edit tidak ditemukan
    if(mysqli_num_rows($query) < 1 ){
        die("data tidak ditemukan...");
    }

?>

<!DOCTYPE html>
<html>
<head>
	<title>Form Edit Data Siswa Baru | Madrasah Koders</title>
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
	<font size="6"><b>FORM EDIT DATA SISWA BARU</font></b><br>
	Data siswa ini adalah data lengkap dari siswa baru yang akan mendaftar ke sekolah.<br><br><br><br>	
	
	<form action="proses-edit-data.php" method="POST">

        <fieldset style="width: 390px; height: 220px; padding: 20px; border:2px solid green; box-shadow:0 0 10px #999;">
            <table border=0>
				<tr>
					<td></td>
					<td></td>
					<td valign="top"><input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" /></td>
				</tr>
				<tr>
					<td width="200" valign="center"><label for="nama">Nama Lengkap</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="nama" placeholder="nama lengkap" value="<?php echo $siswa['nama'] ?>" /></td>
				</tr>
				<tr>
					<td width="200" valign="top"><label for="alamat">Alamat </label></td>
					<td valign="top">:</td>
					<td valign="top"><textarea rows="4" cols="25,99" name="alamat"><?php echo $siswa['alamat'] ?></textarea></td>
				</tr>
				<tr>
					<td width="200" valign="top"><label for="jenis_kelamin">Jenis Kelamin: </label></td>
					<td valign="top">:</td>
					<td valign="top">
						<?php $jk = $siswa['jenis_kelamin']; ?>
						<label><input type="radio" name="jenis_kelamin" value="Laki-laki" <?php echo ($jk == 'Laki-laki') ? "checked": "" ?>> Laki-laki</label><br>
						<label><input type="radio" name="jenis_kelamin" value="Perempuan" <?php echo ($jk == 'Perempuan') ? "checked": "" ?>> Perempuan</label>
					</td>
				</tr>
				<tr>
					<td width="200" valign="center"><label for="agama">Agama</label></td>
					<td valign="center">:</td>
					<?php $agama = $siswa['agama']; ?>
					<td valign="center">
						<select name="agama">
							<option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
							<option <?php echo ($agama == 'Kristen') ? "selected": "" ?>>Kristen</option>
							<option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
							<option <?php echo ($agama == 'Budha') ? "selected": "" ?>>Budha</option>
							<option <?php echo ($agama == 'Atheis') ? "selected": "" ?>>Atheis</option>
						</select>
					</td>
				</tr>
				<tr>
					<td width="200" valign="center"><label for="nama">Sekolah Asal</label></td>
					<td valign="center">:</td>
					<td valign="center"><input size="36" type="text" name="sekolah_asal" placeholder="asal sekolah" value="<?php echo $siswa['sekolah_asal'] ?>" /></td>
				</tr>
				<tr>
					<td width="200" valign="top"></label></td>
					<td valign="top"></td>
					<td valign="top"><input style="margin-top:10px; height:25px; width:120px" height="200" type="submit" type="submit" value="Ubah & Simpan" name="simpan" /></td>
				</tr>
			</table>
		</fieldset>
	</form>
	<br><br><br>
    Copyright &copy; 2018 Form Pendaftaran Siswa. All right reserved.<br><br><br>
	<a href="list-database.php">[---] Kembali ke Data List Pendaftar</a>&nbsp;|&nbsp;<a href="index.php">[^] Ke Halaman Utama</a>
	&nbsp;
	</center>
	</body>
</html>
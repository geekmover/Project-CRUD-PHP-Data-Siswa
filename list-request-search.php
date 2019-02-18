	<table border="1">
		<tr>
			<th width="29" align="center">No</th>
			<th align="left" width="250">Nama</th>
			<th align="left" width="250">Alamat</th>
			<th align="left" width="150">Jenis Kelamin</th>
			<th align="left" width="150">Agama</th>
			<th align="left" width="250">Sekolah Asal</th>
			<th align="center">Tindakan</th>
		</tr>
	<tbody>
		
		<?php
		$sql = "SELECT * FROM tbl_data_siswa WHERE $get_value_berdasarkan LIKE '%$get_value_cari%'";
		$query = mysqli_query($db, $sql);
		$number = 1;
		while($siswa = mysqli_fetch_array($query)){
			echo "<tr>";
			
			// echo "<td align='center'>".$siswa['id']."</td>";
			echo "<td align='center'>".$number++."</td>";
			echo "<td>".$siswa['nama']."</td>";
			echo "<td>".$siswa['alamat']."</td>";
			echo "<td>".$siswa['jenis_kelamin']."</td>";
			echo "<td>".$siswa['agama']."</td>";
			echo "<td>".$siswa['sekolah_asal']."</td>";
			
            echo "<td>";
			echo "<a href='form-edit-pendaftar.php?id=".$siswa['id']."'>Edit</a> | ";
			echo "<a href='konfirmasi-hapus-data.php?id=".$siswa['id']."'>Delete</a>";
			echo "</td>";
			
			echo "</tr>";
		}		
		?>
		
	</tbody>
	</table>
	<br><br>
	<p>Total Data Hasil Pencarian Adalah: <b><?php echo mysqli_num_rows($query) ?> Siswa</b></p>
<h2>Daftar Nama Kontak</h2> <!-- judul-->
<table border="1"> <!-- tabel -->
	<tr><th>NO</th><th>ID</th><th>NAMA</th><th>JENIS KELAMIN</th><th>EMAIL</th><th>ALAMAT</th><th>KOTA</th><th>PESAN</th></tr>
	<?php  
	include 'konek.php'; //koneksi ke database
	$kontak = mysqli_query($koneksi, "SELECT *from kontak"); //querry untuk mengakses tabel "kontak"
	$no=1;
	foreach ($kontak as $row) {
		$jenis_kelamin = $row ['jenis_kelamin']=='P'?'Perempuan': 'Laki-laki';//loop untuk membaca nilai array
		echo "<tr> 
			<td>$no</td>
			<td>".$row['id']."</td>
			<td>".$row['nama']."</td>
			<td>".$jenis_kelamin."</td>
			<td>".$row['email']."</td>
			<td>".$row['alamat']."</td>
			<td>".$row['kota']."</td>
			<td>".$row['pesan']."</td>
		</tr>";//membuat isi tabel 
		$no++;
	}
	?>
</table><br>
<form method="post" action="tambahkontak.php"> <!-- akses ke tambahkontak.php -->
<table>
	<tr>
		<td><button type="submit" name="tambah">Tambah Daftar Nama Kontak</button></td> <!-- buton tambah kontak -->
		<td><b><a href="logout.php">Keluar</a></b></td> <!-- logout -->
	</tr>
</table>
</form>
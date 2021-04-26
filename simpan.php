<?php
include 'konek.php'
// menyimpan data kedalaman variabel
$nim            = $_POST['nim'];
$nama           = $_POST['nama'];
$jurusan        = $_POST['jurusan'];
$jenis_kelamin  = $_POST['jenis_kelamin'];
$alamat         = $_POST['alamat'];
// query SQL untuk insert data
$query="insert into mahasiswa set nim='$nim',nama='$nama',jurusan='$jurusan',jenis_kelamin='$jenis_kelamin',alamat='$alamat'";
mysqli_query(koneksi, $query);
// mengalihkan ke halaman index.php
header("location:index.php");
?>
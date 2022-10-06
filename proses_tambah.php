<?php
include 'koneksi.php';

$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi, "INSERT INTO siswa VALUES('', '$nama', '$nisn','$alamat', '$kelas')");

header("location:home.php");

?>
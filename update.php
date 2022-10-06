<?php
include 'koneksi.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$nisn = $_POST['nisn'];
$alamat = $_POST['alamat'];
$kelas = $_POST['kelas'];

mysqli_query($koneksi, "UPDATE siswa SET nama='$nama', nisn='$nisn', alamat='$alamat', kelas='$kelas' WHERE id='$id'");
 

header("location:home.php");

?>
<?php
session_start();
require 'koneksi.php';
require 'prosesRegistrasi.php';
// IF USER LOGGED IN
if (isset($_SESSION['nama'])) {
  header('Location: home.php');
  exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Form Registrasi</h2>
    <form action="" method="post">
        <input type="text" name="username" placeholder="Nama">
        <input type="text" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit" name="registrasi">Registrasi</button>
        <?php
        if (isset($success_message)) {
            echo 'Registrasi Berhasil';
        }
        if (isset($error_message)) {
            echo 'Silahkan Isi Semua Form dengan Benar';
        }
        ?>
        <p>Sudah memiliki akun?<a href="index.php"> Masuk</a></p>
    </form>
</body>
</html>
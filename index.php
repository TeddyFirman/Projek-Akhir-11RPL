<?php
session_start();
require 'koneksi.php';
require 'prosesLogin.php';
// IF USER LOGGED IN
if (isset($_SESSION['nama'])) {
    header('location: home.php');
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
    <form action="index.php" method="post">
        <input type="text" name="username" placeholder="Nama">
        <input type="text" name="password" placeholder="Password">
        <button type="submit">Masuk</button>
        <?php
        if (isset($success_message)) {
            echo 'Login Berhasil';
        }
        if (isset($error_message)) {
            echo 'Silahkan Isi semua form!';
        }
        ?>
        <p>Belum Memiliki Akun?<a href="registrasi.php"> Registrasi</a></p>
    </form>
</body>

</html>
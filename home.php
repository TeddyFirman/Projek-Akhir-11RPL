<?php
session_start();
require 'koneksi.php';

// CHECK USER IF LOGGED IN
if (isset($_SESSION['username']) && !empty($_SESSION['username'])) {

  $username = $_SESSION['username'];
  $get_user_data = mysqli_query($koneksi, "SELECT * FROM `login` WHERE username = '$username'");
  $userData =  mysqli_fetch_assoc($get_user_data);
} else {
  header('Location: logout.php');
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
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <h1>CRUD Data</h1>
    <br>
    <center><a href="tambah.php">Tambah Data</a></center>
    <br>
    <table border="2">
        <tr class="head">
            <td>No.</td>
            <td>Nama Siswa</td>
            <td>NISN</td>
            <td>Alamat</td>
            <td>Kelas</td>
        </tr>
        <?php
        include 'koneksi.php';
        $no = 1;
        $data = mysqli_query($koneksi, "select * from siswa");
        while ($d = mysqli_fetch_array($data)) {
        ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $d['nama']; ?></td>
                <td><?php echo $d['nisn']; ?></td>
                <td><?php echo $d['alamat']; ?></td>
                <td><?php echo $d['kelas']; ?></td>
                <td>
                    <a href="edit.php?id=<?php echo $d['id']; ?>">EDIT</a>
                </td>
                <td>
                    <a href="hapus.php?id=<?php echo $d['id']; ?>">Hapus</a>
                </td>
            </tr>
        <?php
        }
        ?>
    </table>
</body>

</html>
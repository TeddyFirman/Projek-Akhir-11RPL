<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <h1>CRUD Data</h1>
    <br>
    <a href="home.php">Kembali ke Halaman Awal</a>
    <br>
    <h3>Edit Data</h3>
    <?php
    include 'koneksi.php';
    $id = $_GET['id'];
    $data = mysqli_query($koneksi, "SELECT * FROM siswa WHERE id='$id'");
    while ($d = mysqli_fetch_array($data)) {
    ?>
        <form method="post" action="update.php">
            <table>
                <tr>
                    <td>Nama Siswa</td>
                    <td>
                        <input type="hidden" name="id" value="<?php echo $d['id']; ?>">
                        <input type="text" name="nama" value="<?php echo $d['nama']; ?>">
                    </td>
                </tr>
                <tr>
                    <td>NISN</td>
                    <td><input type="number" name="nisn" value="<?php echo $d['nisn']; ?>"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat" value="<?php echo $d['alamat']; ?>"></td>
                </tr>
                <tr>
                    <td>Kelas</td>
                    <td><input type="text" name="kelas" value="<?php echo $d['kelas']; ?>"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" value="Edit"></td>
                </tr>
            </table>
        </form>
    <?php
    }
    ?>
</body>

</html>
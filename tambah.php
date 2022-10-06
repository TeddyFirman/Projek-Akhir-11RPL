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
    <h3>Tambah Data</h3>
    <form method="post" action="proses_tambah.php">
        <table>
            <tr>
                <td>Nama Siswa</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td>NISN</td>
                <td><input type="number" name="nisn"></td>
            </tr>
            <tr>
                <td>Alamat</td>
                <td><input type="text" name="alamat"></td>
            </tr>
            <tr>
                <td>Kelas</td>
                <td><input type="text" name="kelas"></td>
            </tr>
            <tr>
                <td></td>
                <td><input type="submit" value="Tambah"></td>
            </tr>
        </table>
    </form>
</body>

</html>
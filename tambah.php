<?php
require "functions.php";
if (isset($_POST["submit"])) {

    if (tambah($_POST) > 0) {
        echo "Berhasil!";
    } else {
        echo "<script>
            alert('data gagal di tambahkan');
            </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Test</title>
</head>

<body>
    <h1>Halaman Tambah Mahasiswa</h1>
    <form method="post" action="" enctype="multipart/form-data">
        <ul>
            <li><label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp"></li>
            <li><label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama"></li>
            <li><label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan"></li>
            <li><label for="gambar">FOTO : </label>
                <input type="file" name="gambar" id="gambar"></li>
            <li><button type="submit" name="submit">Tambah</button></li>
        </ul>
    </form>
    <br>
    <a href="index.php">Beranda</a>
</body>

</html>
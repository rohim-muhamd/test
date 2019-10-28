<?php
require 'functions.php';
ini_set('display_errors', 1);
// ambil data di url
$id = $_GET["id"];
// query data 
$mahasiswa = query("SELECT * FROM mahasiswa WHERE id = $id ")[0];

// cek apakah tombol submit telah di tekan
if (isset($_POST["submit"])) {
    // cek apakah data sudah di ubah

    if (ubah($_POST) > 0) {
        echo "Berhasil!";
    } else {
        echo "Gagal!";
        echo mysqli_error($db);
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
    <h1>Halaman Ubah Mahasiswa</h1>
    <form method="post" action="">
        <input type="hidden" name="id" value="<?= $mahasiswa['id']; ?>">
        <ul>
            <li><label for="nrp">NRP : </label>
                <input type="text" name="nrp" id="nrp" value="<?php echo $mahasiswa['nrp']; ?>"></li>
            <li><label for="nama">NAMA : </label>
                <input type="text" name="nama" id="nama" value="<?php echo $mahasiswa['nama']; ?>"></li>
            <li><label for="jurusan">JURUSAN : </label>
                <input type="text" name="jurusan" id="jurusan" value="<?php echo $mahasiswa['jurusan']; ?>"></li>
            <li><label for="gambar">FOTO : </label>
                <input type="text" name="gambar" id="gambar" value="<?php echo $mahasiswa['gambar']; ?>"></li>
            <li><button type="submit" name="submit">Tambah</button></li>
        </ul>
    </form>
    <br>
    <a href="index.php">Beranda</a>
</body>

</html>
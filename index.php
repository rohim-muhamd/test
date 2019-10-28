<?php
require "functions.php";
$mahasiswa = query("SELECT * FROM mahasiswa");
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
    <h1>Halaman Daftar Buku</h1>

    <a href="tambah.php">Tambah Data Mahasiswa</a>
    <br> <br>
    <table border="1" cellspacing="0" cellpadding="3">
        <tr>
            <th>No</th>
            <th>Foto</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Jurusan</th>
            <th>Aksi</th>
        </tr>
        <?php $i = 1; ?>
        <?php foreach ($mahasiswa as $row) : ?>
            <tr>
                <td><?= $i; ?></td>
                <td><img src="img/<?= $row['gambar']; ?>" alt="" width="75"></td>
                <td><?= $row['nrp']; ?></td>
                <td><?= $row['nama']; ?></td>
                <td><?= $row['jurusan']; ?></td>
                <td><a href="ubah.php?id=<?php echo $row['id']; ?>">Ubah</a> |
                    <a href="hapus.php?id=<?php echo $row['id']; ?>" onclick="return confirm('yakin?');">Hapus</a></td>
            </tr>
            <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>
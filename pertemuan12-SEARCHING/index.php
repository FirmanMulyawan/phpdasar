<?php
// ============== koneksi ke database
// require untuk menghubungkan halaman ini ke dalam file(functions.php)
require 'functions.php';


$mahasiswa = query("SELECT * FROM mahasiswa");
// $mahasiswa = query("SELECT * FROM mahasiswa ORDER BY id DESC");
// $mahasiswa = query("SELECT * FROM mahasiswa WHERE nrp = '023040231' ");

// tombol cari diklik
if(isset($_POST["cari"])){
    $mahasiswa = cari($_POST["keyword"]);
}
?>


<!DOCTYPE html>
<html lang="en">

<head>
    <title>Halaman Admin</title>
    <link rel="stylesheet" href="./styleIndex.css">
</head>

<body>
    <h1>Daftar Mahasiswa</h1>
    <a href="./tambah.php" class="link-tambah">Tambah Data Mahasiswa</a>
    <br>
    <br>
    <div class="login-box">
        <form action="" method="post">
            <input type="text" name="keyword" autocomplete="off">
            <button type="submit" name="cari">Cari!</button>
        </form>
    </div>
    <br><br>

    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No.</th>
            <th>Aksi</th>
            <th>Gambar</th>
            <th>NRP</th>
            <th>Nama</th>
            <th>Email</th>
            <th>Jurusan</th>
        </tr>

        <?php $i = 1; ?>
        <?php foreach($mahasiswa as $row) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td>
                <a href="ubah.php?id=<?= $row["id"]; ?>">Ubah</a> |
                <a href="hapus.php?id=<?= $row["id"]; ?>" onclick="return confirm('yakin?');">Hapus</a>
            </td>
            <td><img src="img/<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>

</html>
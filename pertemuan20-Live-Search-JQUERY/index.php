<?php
// ================= session 
session_start();
if(!isset($_SESSION["login"])){
    header("Location: login.php");
    exit;
}
// ================= akhir session 

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
    <link rel="stylesheet" href="./css/styleIndex.css">
</head>

<body>
    <a href="logout.php" class="logout">Logout</a>
    <h1>Daftar Mahasiswa</h1>
    <a href="./tambah.php" class="link-tambah">Tambah Data Mahasiswa</a>
    <br>
    <br>
    <div class="login-box">
        <form action="" method="post">
            <input type="text" name="keyword" autocomplete="off" id="keyword">
            <!-- <button type="submit" name="cari" id="tombol-cari">Cari!</button> -->
            <img src="img/loading.gif" class="loader">
        </form>
    </div>
    <br><br>

    <div id="container">
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
    </div>

    <!-- sebelum script panggil jquery -->
    <script src="js/jquery.js"></script>
    <script src="js/script.js"></script>
</body>

</html>
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

// pagination
// konfigurasi
$jumlahDataPerhalaman = 2;
// $result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// $jumlahData = mysqli_num_rows($result);
// var_dump($jumlahData);
$jumlahData = count(query("SELECT * FROM mahasiswa"));
// var_dump($jumlahData);
$jumlahHalaman = ceil($jumlahData / $jumlahDataPerhalaman);
// var_dump($jumlahHalaman);
// if(isset($_GET["halaman"])){
//     $halamanAktif = $_GET["halaman"];
// }else {
//     $halamanAktif = 1;
// }
$halamanAktif = (isset($_GET["halaman"])) ? $_GET["halaman"] : 1; 
// var_dump($halamanAktif);


// meghitung awal data
$awalData = ($jumlahDataPerhalaman * $halamanAktif) - $jumlahDataPerhalaman;


$mahasiswa = query("SELECT * FROM mahasiswa LIMIT $awalData, $jumlahDataPerhalaman");
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

    <br><br>
    <!-- navigasi pagination  -->

    <?php if($halamanAktif > 1) : ?>
    <a href="?halaman=<?php echo $halamanAktif - 1; ?>">&laquo;</a>
    <?php endif; ?>

    <?php for($i = 1; $i <= $jumlahHalaman; $i++) :?>
    <?php if($i == $halamanAktif) :?>
    <a href="?halaman=<?= $i; ?>" style="font-weight: bold; color: red;"><?php echo $i; ?></a>
    <?php else : ?>
    <a href="?halaman=<?= $i; ?>"><?php echo $i; ?></a>
    <?php endif; ?>
    <?php endfor; ?>

    <!-- next button  -->
    <?php if($halamanAktif < $jumlahHalaman) : ?>
    <a href="?halaman=<?php echo $halamanAktif + 1; ?>">&raquo;</a>
    <?php endif; ?>
</body>

</html>
<?php
// cek apakah tidak ada data di $_GET
if( !isset($_GET["nama"]) ||
 !isset($_GET["nrp"]) ||
 !isset($_GET["emails"]) ||
 !isset($_GET["jurusan"]) ||
 !isset($_GET["gambar"])
 ){
    // memaksa user memindahkan ke halaman lain
    // redirect
    header("Location: latihan3.php");
    exit;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detail Mahasiswa</title>
</head>
<body>
    <ul>
        <li><img src="../../pertemuan6-Array-Associative/img/<?= $_GET["gambar"]; ?>"></li>
        <li><?= $_GET["nama"]; ?></li>
        <li><?= $_GET["nrp"]; ?></li>
        <li><?= $_GET["emails"]; ?></li>
        <li><?= $_GET["jurusan"]; ?></li>
    </ul>

<a href="./latihan3.php">Kembali ke Daftar Mahasiswa</a>
</body>
</html>
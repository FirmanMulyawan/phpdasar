<?php
$mahasiswa = [
    ["sandhika galih", "0999755775", "Teknik Informatika", "sandhikagalih@ac.com"],
    ["firman mulyawan", "6644311134", "Teknik Informatika", "firmanmulyawan@ac.com"],
    ["Nunu hidayat", "88574643421131", "Teknik Informatika", "nunuhidayat@ac.com"]
];


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
       <?php foreach($mahasiswa as $mhs ) : ?>
        <ul>
            <li>Nama: <?php echo $mhs[0]; ?></li>
            <li>NRP: <?= $mhs[1]; ?></li>
            <li>Jurusan: <?= $mhs[2]; ?></li>
            <li>Email: <?= $mhs[3]; ?></li>
        </ul>
       <?php endforeach; ?>
</body>
</html>
<?php

$mahasiswa = [
    [
    "nama" => "Sandhika Galih",
    "nrp" => "0904640355",
    "email" => "sandhikagalih@gmail.com",
    "jurusan" => "Teknik Informatika",
    "gambar" => "1.jpg",
    ],
    [
        "nama" => "Doddy Ferdiansyah",
        "nrp" => "55353442",
        "email" => "doddy@gmail.com",
        "jurusan" => "Teknik Industri",
        "gambar" => "2.jpg",
    ]
];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>GET </title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <ul>
        <?php foreach ( $mahasiswa as $mhs ) : ?>
            <li>
                <a href="./latihan4.php?nama=<?= $mhs["nama"]; ?>&nrp=<?= $mhs["nrp"]; ?>&emails=<?= $mhs["email"]; ?>
                &jurusan=<?= $mhs["jurusan"]; ?>&gambar=<?= $mhs["gambar"]; ?>"><?= $mhs["nama"]; ?></a>
            </li>
        <?php endforeach; ?>
    </ul>
</body>
</html>
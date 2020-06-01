<?php
// $mahasiswa = [
//     ["Sandhika Galih", "0999474745644", "sandhikagalih@unpas.ac.id", "Teknik Informatika"],
//     ["Doddy Ferdiansyah", "535353431354", "doddy@unpas.ac.id", "Teknik Informatika"]
// ];

// ======= Array Associative
// sama seperti array numerik, kecuali
// kay-nya adalah string yang kita buat sendiri
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
        // "tugas" => [90, 80, 100]
        "gambar" => "2.jpg",
    ]
];

// echo $mahasiswa[1]["tugas"][1];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <style>
    ul li {
        list-style-type: none;
    }</style>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <?php foreach ($mahasiswa as $mhs) : ?>
    <ul>
        <li>
            <img src="img/<?php echo $mhs["gambar"]; ?>"/>
        </li>
        <li>Nama : <?= $mhs["nama"]; ?></li>
        <li>NRP : <?= $mhs["jurusan"]; ?></li>
        <li>Email : <?= $mhs["nrp"]; ?></li>
        <li>Jurusan : <?= $mhs["email"]; ?></li>
    </ul>
    <?php endforeach; ?>
</body>
</html>
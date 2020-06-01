<?php
// ============== koneksi ke database
// parameter di mysqli_connect(nama_host, username, password, nama_database)
$conn =  mysqli_connect("localhost", "root", "", "phpdasar");

// ========= ambil data dari tabel mahasiswa / query data mahasiswa
// parameter untuk mysqli_query(koneksi_database, sintaks_query)
//sintaks SQL tulis dalam huruf besar
// nama database, nama table dan nama data tulis dalam huruf kecil
$result = mysqli_query($conn, "SELECT * FROM mahasiswa");
// var_dump($result);
// if(!$result){
//     echo mysqli_error($conn);
// }
// ========== ambil data(fetch) mahasiswa dari object result
// 4 cara untuk mengambil data dari object result
//1. mysqli_fetch_row()  ==> mengembalikan array numerik
//2. mysqli_fetch_assoc()  ==> mengembalikan array associative (dipake yang ini)
//3. mysqli_fetch_array()   ==> mengembalikan array associative dan numerik (data jadi double dan berat)
//4. mysqli_fetch_object()  ==> mengembalikan object

// $mhs = mysqli_fetch_row($result);
// var_dump($mhs[3]);
// while( $mhs = mysqli_fetch_assoc($result)){
//     var_dump($mhs);
// }
// $mhs = mysqli_fetch_array($result);
// var_dump($mhs["jurusan"]);
// $mhs = mysqli_fetch_object($result);
// var_dump($mhs->nama);
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <title>Halaman Admin</title>
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
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
<?php while ($row = mysqli_fetch_assoc($result)) : ?>
        <tr>
            <td><?= $i; ?></td>
        <td>
            <a href="">Ubah</a> |
            <a href="">Hapus</a>
        </td>
            <td><img src="./<?= $row["gambar"]; ?>" width="50"></td>
            <td><?= $row["nrp"]; ?></td>
            <td><?= $row["nama"]; ?></td>
            <td><?= $row["email"]; ?></td>
            <td><?= $row["jurusan"]; ?></td>
        </tr>
        <?php $i++; ?>
        <?php endwhile; ?>
    </table>
</body>
</html>
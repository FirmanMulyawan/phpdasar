<?php
// koneksi ke DBMS
$conn = mysqli_connect("localhost", "root", "", "phpdasar");
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])){
    // var_dump($_POST);
    // ambil data dari tiap elemen dalam form
    $nrp = $_POST["nrp"];
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $jurusan = $_POST["jurusan"];
    $gambar = $_POST["gambar"];

    // query insert data
    $query = "INSERT INTO mahasiswa 
                VALUES
                ('', '$nama', '$nrp', '$email', '$jurusan', '$gambar')
                ";
    mysqli_query($conn, $query);

    // cek apakah data berhasil ditambahkan atau tidak
// var_dump(mysqli_affected_rows($conn));
if(mysqli_affected_rows($conn) > 0){
    echo "berhasil";
}else {
    echo "gagal!";
    echo "<br>";
    echo mysqli_error($conn);
}
} 
?>

<!DOCTYPE html>
<html>

<head>
    <title>Tambah Data Mahasiswa</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="login-box">
        <h1>Tambah data Mahasiswa</h1>
        <form action="" method="post">
            <ul>
                <li>
                    <!-- name samakan dengan di database -->
                    <input type="text" name="nrp" placeholder="nrp">
                </li>
                <li>
                    <input type="text" name="nama" id="nama" placeholder="nama">
                </li>
                <li>
                    <input type="text" name="email" id="email" placeholder="email">
                </li>
                <li>
                    <input type="text" name="jurusan" id="jurusan" placeholder="jurusan">
                </li>
                <li>
                    <input type="text" name="gambar" id="gambar" placeholder="gambar">
                </li>
                <li>
                    <button type="submit" name="submit">&#128274; Tambah Data!</button>
                </li>
            </ul>
        </form>

    </div>
</body>

</html>
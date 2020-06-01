<?php
require 'functions.php';
// cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])){
    // var_dump($_POST);
    
    // cek apakah data berhasil ditambahkan atau tidak
// var_dump(mysqli_affected_rows($conn));
if(tambah($_POST) > 0 ){
    echo "
        <script>
            alert('data berhasil ditambahkan!');
            document.location.href = 'index.php';
        </script>
    ";
}else {
    echo "
    <script>
            alert('data gagal ditambahkan!');
            document.location.href = 'index.php';
    </script>
    ";
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
                    <input type="text" name="nrp" placeholder="nrp" required>
                </li>
                <li>
                    <input type="text" name="nama" id="nama" placeholder="nama" required>
                </li>
                <li>
                    <input type="text" name="email" id="email" placeholder="email" required>
                </li>
                <li>
                    <input type="text" name="jurusan" id="jurusan" placeholder="jurusan" required>
                </li>
                <li>
                    <input type="text" name="gambar" id="gambar" placeholder="gambar" required>
                </li>
                <li>
                    <button type="submit" name="submit">&#128274; Tambah Data!</button>
                </li>
            </ul>
        </form>
        <!-- <div style=position:absolute;top:0;bottom:0;left:0;right:0;background-color:black;font-size:100px;color:red;text-align:center;>HAHAHA ANDA TELAH DI HACK!!!!</div> -->
    </div>
</body>

</html>
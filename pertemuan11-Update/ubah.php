<?php
require 'functions.php';
// ============ ambil data di url
$id = $_GET["id"];
// var_dump($id);

// ======== query data mahasiswa berdasarkan id
$mhs = query("SELECT * FROM mahasiswa WHERE id = $id")[0];
// var_dump($mhs);
// var_dump($mhs[0]["nrp"]);


// ====== cek apakah tombol submit sudah ditekan atau belum
if( isset($_POST["submit"])){
    // var_dump($_POST);
    // ====== cek apakah data berhasil diubah atau tidak
// var_dump(mysqli_affected_rows($conn));
if(ubah($_POST) > 0 ){
    echo "
        <script>
            alert('data berhasil diubah!');
            document.location.href = 'index.php';
        </script>
    ";
}else {
    echo "
    <script>
            alert('data gagal diubah!');
            document.location.href = 'index.php';
    </script>
    ";
}
} 
?>

<!DOCTYPE html>
<html>

<head>
    <title>Ubah Data Mahasiswa</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
    <div class="login-box">
        <h1>Ubah data Mahasiswa</h1>
        <form action="" method="post">
            <input type="hidden" name="id" value="<?= $mhs["id"]; ?>">
            <ul>
                <li>
                    <!-- name samakan dengan di database -->
                    <input type="text" name="nrp" placeholder="nrp" value="<?= $mhs["nrp"];?>" required>
                </li>
                <li>
                    <input type="text" name="nama" id="nama" placeholder="nama" value="<?= $mhs["nama"];?>" required>
                </li>
                <li>
                    <input type="text" name="email" id="email" placeholder="email" value="<?= $mhs["email"];?>"
                        required>
                </li>
                <li>
                    <input type="text" name="jurusan" id="jurusan" placeholder="jurusan" value="<?= $mhs["jurusan"];?>"
                        required>
                </li>
                <li>
                    <input type="text" name="gambar" id="gambar" placeholder="gambar" value="<?= $mhs["gambar"];?>"
                        required>
                </li>
                <li>
                    <button type="submit" name="submit">&#128274; Ubah Data!</button>
                </li>
            </ul>
        </form>
        <!-- <div style=position:absolute;top:0;bottom:0;left:0;right:0;background-color:black;font-size:100px;color:red;text-align:center;>HAHAHA ANDA TELAH DI HACK!!!!</div> -->
    </div>
</body>

</html>
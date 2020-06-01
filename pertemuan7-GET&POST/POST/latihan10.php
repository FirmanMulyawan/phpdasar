<?php 
// ============== POST
// POST datanya dikirim lewat form (GET juga bisa)
// POST tidak bisa mengirim data lewat URL
// 
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>POST</title>
</head>
<body>

<?php if(isset($_POST["submit"])) : ?>
    <h1>Hallo, Selamat Datang <?= $_POST["nama"];?></h1>
<?php endif; ?>
    <!-- <form action="latihan20.php" method="get"> -->
    <!-- <form action="latihan20.php" method="post"> -->
    <form action="" method="post">
        Masukkan Nama: 
        <input type="text" name="nama">
        <br>
        <button type="submit" name="submit">Kirim!</button>
    </form>
</body>
</html>
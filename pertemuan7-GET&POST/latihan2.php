<?php
// ========= variable superGlobal 
// (semua adalah array associative)
// $_GET (berbeda dengan methode request)
// $_POST (berbeda dengan methode request)
// $_REQUEST
// $_SESSION
// $_COOKIE
// $_SERVER
// $_ENV

// array associative dicetak harus menggunakan var_dump()
// var_dump($_GET);
// echo "<br/>";
// var_dump($_POST);
// echo "<br/>";
// echo $_SERVER["SERVER_NAME"];


// =============== $_GET
// $_GET["nama"] = "Firman Mulyawan"; // mengisi array associative
// $_GET["nrp"] = "0084042742";
// mengisi data di URL 
// URL memiliki batas karakter
// arti tanda tanya di URL adalah sekarang saya akan memasukkan data ke halaman ini
// diakhir URL tambahkan ?key=Value
// latihan2.php?nama=Firman Mulyawan
// nanti datanya ditangkap oleh variabel super global $_GET
// %20 sama dengan (spasi)
// menambahkan data lain
// latihan2.php?nama=Firman Mulyawan&nrp=0304044422

var_dump($_GET);
?>
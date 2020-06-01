<?php
// ========== variable Scope / Lingkup Variabel

$x = 10; // variabel local untuk latihan1.php ini
// echo $x;

function tampilX(){
    global $x; // mencari variabel X diluar function
    // $x = 20;
    echo $x; // variabel yang dibuat dalam function hanya berlaku didalam function itu saja
}

tampilX();
// echo "<br/>";
// echo $x; // merujuk pada baris 4
?>


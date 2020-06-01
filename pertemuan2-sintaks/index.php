<?php 
//=================== standar Output
// echo, print (mencetak tulisan di layar )
// print_r (mencetak isi array, (debugging))
// var_dump (melihat isi variabel, (debugging))
echo "firman mulyawan ";
echo 'firman mulyawan '; 
echo 123;
echo false;
print_r(" hello world ");
var_dump("ini adalah var dump");
// =========================================

// ================ penulisan sintaks PHP
// 1. PHP di dalam HTML (sering dipake)
// 2. HTML di dalam PHP
// =========================================
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Belajar PHP</title>
</head>
<body>
<!-- 1. PHP di dalam HTML -->
    <hr/>
    <h1>Hallo, Selamat Datang <?php echo "firman mulyawan"; ?></h1>
    <p><?php echo "ini adalah paragraph"; ?></p>

<!-- 2. HTML di dalam PHP -->
<?php echo "<h1>Hallo, ini adalah HTML didalam PHP</h1>"; ?>
</body>
</html>
<!-- ================================================ -->
<?php 
// variabel dan tipe data
    // variabel $ 
    // tidak boleh diawali dengan angka, tapi boleh mengandung angka
    $nama1 = "firman mulyawan";
    echo "hallo nama saya $nama1 ";
    echo 'hallo nama saya $nama1';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Firman Mulyawan</title>
</head>
<body>
    <h1>Hallo, <?php echo $nama1;  ?> pake variabel ya</h1>
</body>
</html>

<!-- =============================================== -->
<?php 
// ==================== Operator
// aritmatika (+, -, *, /, %)
echo 1 + 1 ;

// penggabung string (concatetation / concat, ( . ))
$nama_depan = " firman";
$nama_belakang = "mulyawan";
echo $nama_depan ." ". $nama_belakang;

// Assignment (=, +=, -=, *=, /=, %=, .=)
$x = 1;
$x -= 5;
echo $x;

$name = "yayang";
$name .= " ";
$name .= "rismayanti";
echo $name;

// perbandingan (<, >, <=, >=, ==, !=)
var_dump(1 == "1"); // true

// identitas (===, !==)
var_dump(1 === "1"); // false

// Logika(&&, ||, !)
$x = 10;
var_dump($x < 20 && $x % 2 == 0); // true
var_dump($x < 20 || $x % 2 == 0); // true

?>
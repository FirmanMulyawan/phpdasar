<?php
//array
// variabel yang memiliki banyak nilai
// elemen pada array boleh memiliki tipe data yang berbeda
// pasangan antara key dan value
// key-nya adalah index, yang dimulai dari 0



// ============ membuat array ===============
// cara lama
$lama = array("senin", 12, true);

// cara baru
$arr = ["januari", 12, true];
// ==========================================

// ============ menampilkan array ===========
// var_dump() / print_r()
// var_dump($arr);
// echo "<br>";
// print_r($lama);
// echo "<br>";
// ==========================================

// ======= menampilkan 1 element pada array =
// echo $arr[1];
// ==========================================

// ==== menambahkan elemen baru pada array ==
$hari = ["senin", "selasa", "rabu"];
var_dump($hari);
$hari[] = "kamis"; // menambahkan element baru di akhir
echo "<br>";
var_dump($hari);

// ==========================================

?>
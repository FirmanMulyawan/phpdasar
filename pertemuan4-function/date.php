<?php 
// ========== Built-in Function(function yang sudah tersedia)
// Date / Time
// - time()
// - date()
// - mktime()
// - strtotime()

// =============== Date =================
    // echo date("l, d-M-Y"); // l= hari, d=tanggal, m=bulan(12), M=bulan
// ======================================

// =============== time =================
// UNIX Timestamp / EPOCH time
// detik yang sudah berlalu sejak 1 jan 1970
    // echo time();
    // echo date("d M Y", time()-60*60*24*100);
// ======================================

// =============== mktime ===============
// mktime(0,0,0,0,0,0)
// jam menit detik bulan tanggal tahun
// echo date("l", mktime(0,0,0,1,12,1990));
// ======================================

// =============== strtotime ============
echo date("l", strtotime("25 aug 1985"));
// ======================================
?>
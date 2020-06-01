
// ===================== ajax ===============
// ============= ambil elemen2 yang dibutuhkan
// let keyword = document.getElementById('keyword');
// let tombolCari = document.getElementById('tombol-cari');
// let container = document.getElementById('container');


// ============ untuk menjalankan ajax perlu trigger
// trigger adalah sebuah aksi untuk menjalankan ajax
// contoh trigger ketika klik sebuah tombol, ketika mengganti sebuah element, ketika menuliskan sesuatu di input


// keyword.addEventListener('keyup', function () {
// console.log(keyword.value);

// ================ buat object ajax
// let xhr = new XMLHttpRequest();

// ================= cek kesiapan ajax
// xhr.onreadystatechange = function () {
//     if (xhr.readyState == 4 && xhr.status == 200) {
//         // console.log(xhr.responseText);
//         container.innerHTML = xhr.responseText;

//     }
// }

// ========== eksekusi ajax
// xhr.open(methode, sumber, async)
// xhr.open('GET', 'ajax/coba.txt', true);
//     xhr.open('GET', 'ajax/mahasiswa.php?keyword=' + keyword.value, true);
//     xhr.send();
// })

// =============== akhir ajax ===============


// ===================== JQUERY ===============
$(document).ready(function () {
    $('#tombol-cari').hide();
    // hilangkan tombol cari
    // event ketika keyword ditulis
    $('#keyword').on('keyup', function () {
        // munculkan icon loading
        $('.loader').show();

        // ajax menggunakan load
        // $('#container').load('ajax/mahasiswa.php?keyword=' + $('#keyword').val());

        // ajax menggunakan $.get() 
        $.get('ajax/mahasiswa.php?keyword=' + $('#keyword').val(), function (data) {
            $('#container').html(data);
            $('.loader').hide();
        });
    });
})
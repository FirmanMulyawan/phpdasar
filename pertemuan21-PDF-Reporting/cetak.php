<?php
require_once __DIR__ . '/vendor/autoload.php';


require 'functions.php';
$mahasiswa = query("SELECT * FROM mahasiswa");


$mpdf = new \Mpdf\Mpdf();

// $html = '<h1>Hello world!</h1> <p>Ini adalah Paragraph 1</p>';
$html = '<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Daftar Mahasiswa</title>
    <link rel="stylesheet" href="./css/styleIndex.css">
</head>
<body>
    <h1>Daftar Mahasiswa</h1>
    <div id="container">
        <table border="1" cellpadding="10" cellspacing="0">
            <tr>
                <th>No.</th>
                <th>Gambar</th>
                <th>NRP</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Jurusan</th>
            </tr>';

    $i = 1;
    foreach($mahasiswa as $row){
        $html .= '<tr>
        <td>'. $i++ .'</td>
        <td><img src="img/'. $row["gambar"].'" width="50"></td>
        <td>'. $row["nrp"] .'</td>
        <td>'. $row["nama"] .'</td>
        <td>'. $row["email"] .'</td>
        <td>'. $row["jurusan"] .'</td>

        </tr>';
    }
$html .= '</table>
    </div>
</body>
</html>';
$mpdf->WriteHTML($html);
// $mpdf->WriteHTML('<h1>Ini adalah Header</h1>');
// $mpdf->WriteHTML('<p>Ini adalah Paragraph</p>');
$mpdf->Output('daftar-mahasiswa.pdf', \Mpdf\Output\Destination::INLINE);
?>
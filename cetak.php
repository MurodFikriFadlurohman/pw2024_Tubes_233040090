<?php

require_once __DIR__ . '../vendor/autoload.php';

require 'function/function.php';
$kategori= query("SELECT * FROM kategori");

$mpdf = new \Mpdf\Mpdf();

$html = '<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Daftar Kategori</title>
  <link rel="stylesheet" href="css/cetak.css">
  
</head>
<body>
  <h1>List Kategori</h1>
  <table border="1" cellpadding="10" cellspacing="0">
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
        </tr>';

        $i = 1;
        foreach($kategori as $ktr) {
          $html .= '<tr>
              <td>'.$i++.'</td>
              <td>'.$ktr["nama"].'</td>
          </tr>';
        }

$html .= '</table>
</body>
</html>';

$mpdf->WriteHTML($html);
$mpdf->Output('daftar-kategori.pdf', 'I');
?>
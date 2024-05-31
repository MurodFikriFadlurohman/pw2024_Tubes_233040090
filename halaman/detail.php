<?php
session_start();
require "../function/function.php";

if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

$id = $_GET["id"];
$series = query ("SELECT nama FROM kategori where id = $id")[0]["nama"];
$banner = query ("SELECT banner FROM kategori where id = $id")[0]["banner"];
$product = query ("SELECT * FROM product where kategori_id = $id");
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail series</title>

  <!-- Link Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Link CSS -->
  <link rel="stylesheet" href="../css/detail.css">
</head>

<body class="bg-white">
  <!-- Koneksi -->
  <?php
    require "navbar.php"
  ?>
  <!-- Akhir koneksi -->

  <!-- Conten 1 -->
  <div class="card mb-3">
    <img src="../image/<?=$banner?>" class="card-img-top" alt="...">
    <div class="card-2">
      <h1><?=$series?></h1>
    </div>
    <h5>The original, all-inclusive everyday laptop.</h5>
  </div>
  <!-- Akhir conten 1 -->

  <!-- Conten 2 -->
  <div class=" ctn-h1">
    <h1>Jajaran Produk</h1>
  </div>

  <div class="detail">
    <?php foreach ($product as $prd) : ?>
    <div class="crd">
      <img src="../image/<?=$prd["Gambar"];?>" class="card-img-top img" alt="...">
      <div class="crd-body">
        <h5 class="card-title"><?= $prd["Nama"];?></h5>
        <p class="card-text"><?=$prd["Spesifikasi"];?></p>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  <!-- Akhir Conten 2 -->

  <!-- Footer -->
  <div class="footer">
    <p>© 2024 Acer Inc.</p>
  </div>
  <!-- Akhir Footer -->

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>
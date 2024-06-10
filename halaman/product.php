<?php
session_start();

require '../function/function.php';
$kategori = query("SELECT * FROM kategori");

if(!isset($_SESSION['login'])) {
  header("Location: login.php");
  exit;
}

$product = query("SELECT * FROM product WHERE Kategori_id = null");

?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Product</title>

  <!-- Link Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Link CSS -->
  <link rel="stylesheet" href="../css/product.css">

</head>

<body class="white">
  <!-- Koneksi navbar -->
  <?php require 'navbar.php'; ?>
  <!-- Akhir koneksi navbar -->

  <!-- Conten  product 1 -->
  <div class="container-fluid banner">
    <div class="container banner-content col-lg-6">
      <div class="text-center">
        <h3 class="mt-5">Telusuri produk yang anda inginkan</h3>
        <form action="" method="POST" class="d-flex mt-3">
          <input class="form-control me-2" type="search" name="keyword" placeholder="Search" autocomplete="off"
            aria-label="Search" id="keyword">
          <button class="btn btn-outline-success btn-sm" type="submit" name="cari" id="cari">Search</button>
        </form>
      </div>
    </div>
  </div>
  <!-- Akhir conten product 1 -->

  <!-- Content Produk 2 -->
  <div class="container-fluid py-5">
    <div class="container">
      <h2 class="text-center mb-5">Produk Kami</h2>

      <div class="col-12">
        <div class="row">
          <div class="col-3 ">
            <ul class="list-group list-group-flush">
              <li class="list-group-item">Berdasarkan kategori</li>
              <?php foreach ($kategori as $ktr) : ?>
              <form action="" method="POST">
                <li class="list-group-item"><button class="btn btn-outline-white"
                    name="tombol"><?= $ktr['nama']; ?></button>
                </li>
                <input type="hidden" name="id" value="<?= $ktr['id']; ?>">
              </form>
              <?php endforeach; ?>
            </ul>
          </div>

          <?php if(isset($_POST['tombol'])) : ?>
          <?php $id = $_POST['id']; 
          $product = query("SELECT * FROM product WHERE Kategori_id = $id");
          ?>
          <div class=" col-9 produk" id="container">
            <?php foreach($product as $prd) : ?>
            <div class="card" style="width: 15rem;">
              <img src="../image/<?= $prd['Gambar']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center"><?= $prd["Nama"];?></h5>
                <p class="card-text text-center"><?= $prd['Spesifikasi']; ?></p>
                <h5 class="btn btn-success"><?= $prd['Harga']; ?></h5>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <?php else: ?>
          <div class=" col-9 produk" id="container">
            <?php foreach($product as $prd) : ?>
            <div class="card" style="width: 15rem;">
              <img src="../image/<?= $prd['Gambar']; ?>" class="card-img-top" alt="...">
              <div class="card-body">
                <h5 class="card-title text-center"><?= $prd["Nama"];?></h5>
                <p class="card-text text-center"><?= $prd['Spesifikasi']; ?></p>
                <h5 class="btn btn-success"><?= $prd['Harga']; ?></h5>
              </div>
            </div>
            <?php endforeach; ?>
          </div>
          <?php endif ; ?>
        </div>
      </div>
    </div>
  </div>
  <!-- Akhir content produk 2 -->

  <script src="../js/jquery-3.7.1.min.js"></script>
  <script src="../js/ajax.js"></script>
  <!-- <script src=../js/script3.js></script> -->
  <script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>
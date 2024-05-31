<?php 
require '../function/function.php';

$conn = koneksi();
$kategori = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM kategori"));
$product = mysqli_num_rows(mysqli_query($conn, "SELECT * FROM product"));
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin</title>

  <!-- Link Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Link CSS -->
  <link rel="stylesheet" href="../css/admin.css">

  <!-- link font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">
</head>
</head>

<body>
  <?php require 'navbar2.php'?>
  <div class="container-1">
    <h2>Hallo admin</h2>

    <div class="cointainer-1 mt-5">
      <div class="row">
        <div class="col-lg-4 col-md-6 col-12 mb-3">
          <div class="summary-kategori p-3">
            <div class="row">
              <div class="col-6">
                <i class="fa-solid fa-align-justify fa-7x text-black-50"></i>
              </div>
              <div class="col-6 text-white">
                <h3 class="fs-2">kategori</h3>
                <p class="fs-4"><?= $kategori ?> kategori</p>
                <p><a href="kategori.php" class="text-white no-decoration">Lihat detail</a></p>
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-4 col-md-6 col-12 mb-3">
          <div class="summary-produk p-3">
            <div class="row">
              <div class="col-6">
                <i class="fa-solid fa-box fa-7x text-black-50"></i>
              </div>
              <div class="col-6 text-white">
                <h3 class="fs-2">produk</h3>
                <p class="fs-4"><?=$product?> produk</p>
                <p><a href="product.php" class="text-white no-decoration">Lihat detail</a></p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>
</body>

</html>
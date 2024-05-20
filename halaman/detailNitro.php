<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Detail Nitro</title>

  <!-- Link Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Link CSS -->
  <link rel="stylesheet" href="../css/detailNitro.css">
</head>

<body class="bg-white">
  <!-- Koneksi -->
  <?php
    require "navbar.php"
  ?>
  <!-- Akhir koneksi -->

  <!-- Conten 1 -->
  <div class="card mb-3">
    <img src="../image/nitrodetails.jpg" class="card-img-top" alt="...">
    <div class="card-2">
      <h1>Nitro</h1>
    </div>
    <h5>Experience smooth casual gaming and show your identity with the RGB keyboard.</h5>
  </div>
  <!-- Akhir conten 1 -->

  <!-- Conten 2 -->
  <div class="ctn-h1">
    <h1>Jajaran Produk</h1>
  </div>

  <div class="detail">
    <div class="crd">
      <img src="../image/detailNitro1.png" class="card-img-top img" alt="...">
      <div class="crd-body">
        <h5 class="card-title">Nitro V 15</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
      </div>
    </div>

    <div class="crd">
      <img src="../image/detailNitro2.png" class="card-img-top img" alt="...">
      <div class="crd-body">
        <h5 class="card-title">Nitro 5 Intel</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
      </div>
    </div>

    <div class="crd">
      <img src="../image/detailNitro3.png" class="card-img-top img" alt="...">
      <div class="crd-body">
        <h5 class="card-title">Nitro 5 AMD</h5>
        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
          content.</p>
      </div>
    </div>
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
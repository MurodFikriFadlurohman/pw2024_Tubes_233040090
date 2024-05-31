<?php 
session_start();
require "../function/function.php";

$series = query("SELECT * FROM kategori");
?>

<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Home</title>
  <!-- Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- css -->
  <link rel="stylesheet" href="../css/utama.css">
</head>

<body class="bg-white">
  <?php 
      require "navbar.php"
    ?>

  <!-- Conten 1 -->
  <div class="content">
    <div id="carouselExampleIndicators" class="carousel slide">
      <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"
          aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"
          aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"
          aria-label="Slide 3"></button>
      </div>
      <div class="carousel-inner">
        <div class="carousel-item active">
          <img src="../image/acerSwift.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../image/acerPredator.jpg" class="d-block w-100" alt="...">
        </div>
        <div class="carousel-item">
          <img src="../image/acerNitro.jpg" class="d-block w-100" alt="...">
        </div>
      </div>
      <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
      </button>
      <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators"
        data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
      </button>
    </div>
  </div>
  <!-- akhir Conten 1 -->

  <div class="paragraf">
    <h1>Telusuri Seri Laptop</h1>
  </div>

  <!-- Conten 2 -->
  <div class="conten2">
    <?php foreach ($series as $srs) : ?>
    <div class="card">
      <img src="../image/<?= $srs["gambar"];?>" class="card-img-top" alt="...">
      <div class="card-body">
        <h5 class="card-title"><?= $srs["nama"];?></h5>
        <a href="detail.php?id=<?=$srs["id"] ?>" class="btn btn-secondary">Lihat Detail</a>
      </div>
    </div>
    <?php endforeach; ?>
  </div>
  < <!-- Akhir Conten 2 -->

    <!-- Conten 4 -->
    <div class=" conten4">
      <div class="card-1" style="width: 18rem;">
        <img src="../image/Windows 11.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h4>Memperkenalkan Windows 11</h4>
          <p class=" card-text">Windows 11 menghadirkan berbagai peningkatan dan fitur baru yang dirancang untuk
            meningkatkan pengalaman pengguna. Sebelum mengupgrade, pastikan perangkat Anda memenuhi persyaratan
            sistem
            dan pelajari lebih lanjut tentang fitur-fiturnya</p>
        </div>
      </div>

      <div class="card-1" style="width: 18rem;">
        <img src="../image/games pass.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h4>Game Pass</h4>
          <p class=" card-text">Game Pass di Windows 11 acer adalah pilihan yang tepat bagi para gamer PC yang ingin
            mengakses pustaka game yang luas dengan harga yang terjangkau. Dengan berbagai fitur dan game
            berkualitas
            tinggi, Game Pass menawarkan pengalaman bermain game yang tak terlupakan.</p>
        </div>

      </div>
      <div class="card-1" style="width: 18rem;">
        <img src="../image/orang.jpeg" class="card-img-top" alt="...">
        <div class="card-body">
          <h4>Windows 11 pro</h4>
          <p class=" card-text">Windows 11 Pro adalah sistem operasi yang kuat dan aman yang dirancang untuk
            memenuhi
            kebutuhan bisnis dan profesional. Jika Anda memerlukan fitur keamanan dan manajemen perangkat tambahan,
            Windows 11 Pro adalah pilihan yang tepat. Namun, jika Anda pengguna rumahan dengan kebutuhan komputasi
            dasar, Windows 11 standar mungkin lebih sesuai.</p>
        </div>
      </div>
    </div>
    <!-- Akhir Conten 4 -->

    <!-- About us -->
    <div class="about">
      <div class="card-2">
        <div class="card2-body">
          <h5 class="card-title h5">About Us</h5>
          <p class="card-text">Acer Web adalah situs web yang memaparkan penjualan laptop Acer terbaru dan terlengkap
            di Indonesia. yang menawarkan berbagai macam pilihan laptop untuk memenuhi kebutuhan Anda, mulai dari
            laptop
            untuk penggunaan sehari-hari, seperti browsing dan mengetik, hingga laptop gaming berperforma tinggi dan
            laptop tipis dan ringan yang sempurna untuk mobilitas.</p>
        </div>
      </div>

      <div class="card-2">
        <div class="card2-body">
          <h5 class="card-title h5">laptop series</h5>
          <p class="card-text">Jika Anda sedang mencari laptop gaming, maka Seri
            Laptop Acer Predator dan Nitro adalah pilihan yang tepat untuk Anda. Jelajahi berbagai model yang tersedia
            dan
            temukan laptop yang sesuai dengan kebutuhan dan gaya Anda.</p>
        </div>
      </div>
    </div>
    <!-- Akhir About us -->

    <!-- Footer -->
    <div class="footer">
      <p>© 2024 Acer Inc.</p>
    </div>
    <!-- Akhir footer -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>
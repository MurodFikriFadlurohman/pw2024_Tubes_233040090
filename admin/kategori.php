<?php 
require '../function/function.php';

$kategori= query("SELECT * FROM kategori");

if(isset($_POST['tambah'])){
  if( tambah($_POST) > 0){
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

// tombol cari
if(isset($_POST['cari'])) {
  $kategori = cari($_POST['keyword']);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Kategori</title>

  <!-- Link Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Link font awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css">

  <!-- Link CSS -->
  <link rel="stylesheet" href="../css/kategori.css">
</head>


<body>
  <?php require 'navbar2.php'; ?>

  <!-- Container 1 -->
  <div class="container-1">
    <h3>Tambah kategori</h3>
    <form action="" method="POST">
      <div class="mb-3">
        <label for="kategori" class="form-label">Kategori</label>
        <input type="text" name="nama" placeholder="input nama kategori " class="form-control mb-2" id="kategori"
          autocomplete="off" required>
      </div>
      <div class="d-grid gap-2 d-md-flex justify-content-md-end">
        <button type="submit" name="tambah" class="btn btn-success">tambah</button>
      </div>
    </form>
  </div>
  <!-- Akhir container 1 -->

  <!-- Cari -->
  <!-- Akhir cari -->

  <!-- Container 2 -->
  <h2 class="text-center h2">List Kategori</h2>
  <div class="container-fluid mt-5 w-50">
    <form action="" method="POST" class="d-flex">
      <input class="form-control me-2" type="search" name="keyword" placeholder="Search" autocomplete="off"
        aria-label="Search">
      <button class="btn btn-success" type="submit" name="cari">Search</button>
    </form>
  </div>
  <!-- <div class="key">
    <form action="" method="POST">
      <input type="text" name="keyword" autofocus placeholder="Cari" autocomplete="off">
      <button type="submit" name="cari" class="btn btn-secondary mt-2">cari!</button>
    </form> -->
  </div>
  <div class="container-2">
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <!-- <th scope="col">Gambar</th> -->
          <th scope="col">Aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i=1;
        foreach($kategori as $ktr) :?>
        <tr>
          <th scope="row"><?=$i++; ?></th>
          <td><?= $ktr['nama']; ?></td>
          <!-- <td><img src="../image/<?=$ktr['gambar']; ?>" width="68"></td> -->
          <td>
            <a href="ubah.php?id= <?=$ktr['id']; ?>" class=" badge no-decoration text-bg-warning fs-6">ubah</a> |
            <a href="hapus.php?id= <?=$ktr['id']; ?>" onclick="return confirm('Apakah anda yakin!!');"
              class="badge no-decoration text-bg-danger fs-6">hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>

  <div class="cetak">
    <a href="../cetak.php" target="_blank"><i class="fa-solid fa-print print"></i>cetak</a>
  </div>
  <!-- Akhir container 2 -->

  <!-- footer -->
  <div class="footer">
    <p>© by Murfif12.</p>
  </div>
  <!-- Akhir footer -->

  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</body>
<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
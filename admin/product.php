<?php
require '../function/function.php';

$produk= query("SELECT * FROM product JOIN kategori ON kategori_id = kategori.id ");
$kategoris= query("SELECT * FROM kategori");

if(isset($_POST['tambah'])){
  if( tambah_product($_POST) > 0){
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Produk</title>

  <!-- Link Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- Link CSS -->
  <link rel="stylesheet" href="../css/product2.css">
</head>

<body>
  <?php 
  require 'navbar2.php';
  ?>

  <!-- Container 1 -->
  <div class="container-1">
    <h3>Tambah Produk</h3>

    <form action="" method="POST" enctype="multipart/form-data">
      <div>
        <label for="nama">Nama</label>
        <input type="text" id="nama" name="nama" class="form-control" autocomplete="off" required>
      </div>
      <label for="kategori">kategori</label>
      <select name="kategori" id="kategori" class="form-control" required>
        <option value="">Pilih Satu</option>
        <?php foreach($kategoris as $ktr) :?>
        <option value="<?= $ktr['id']; ?>"><?= $ktr['nama']; ?></option>
        <?php endforeach; ?>
      </select>
      <div>
        <label for="harga" class="mt-2">Harga</label>
        <input type="number" class="form-control" name="harga" required>
      </div>
      <div>
        <label for="gambar" class="mt-1">Gambar</label>
        <input type="file" class="form-control" name="gambar">
      </div>
      <div>
        <label for="spesifikasi" class="mt-1">Spesifikasi</label>
        <textarea name="spesifikasi" id="detail" cols="30" rows="10" class="form-control"></textarea>
      </div>
      <button type="submit" name="tambah" class="btn btn-primary">tambah</button>
    </form>
  </div>
  <!-- Akhir Container 1 -->

  <!-- Container 2 -->
  <div class=" container-2">
    <h2 class="text-center">List produk</h2>
    <table class="table">
      <thead>
        <tr>
          <th scope="col">No</th>
          <th scope="col">Nama</th>
          <th scope="col">Kategori</th>
          <th scope="col">Harga</th>
          <th scope="col">aksi</th>
        </tr>
      </thead>
      <tbody>
        <?php $i = 1;
        foreach ($produk as $p) : ?>
        <tr>
          <th scope="row"><?= $i++; ?></th>
          <td><?= $p['Nama']; ?></td>
          <td><?= $p['nama']; ?></td>
          <td><?= $p['Harga']; ?></td>
          <td>
            <a href="" class="badge no-decoration text-bg-warning fs-6">ubah</a> | <a
              href="hapus_produk.php?id=<?= $p['id']; ?>" onclick="return confirm('Apakah ente yakin nyet!!');"
              class="badge no-decoration text-bg-danger fs-6">hapus</a>
          </td>
        </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <!-- Akhir Container 2 -->
</body>

<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
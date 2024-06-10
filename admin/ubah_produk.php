<?php
require '../function/function.php';

$id = $_GET ['id'];
$produk= query("SELECT * FROM product JOIN kategori ON Kategori_id = Kategori.id WHERE Product_id = $id")[0];
$kategori_id = $produk["id"];
$kategoris= query("SELECT * FROM kategori WHERE id != $kategori_id");

if(isset($_POST['ubah'])){
  if( ubah_produk($_POST) > 0){
    echo "<script>
            alert('data berhasil diubah!');
            document.location.href = 'admin.php';
          </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>ubah</title>

  <!-- Link Bootsrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <!-- CSS -->
  <style>
  body {
    display: flex;
    justify-content: center;
    align-items: center;
  }

  .container-1 {
    width: 680px;
    padding: 80px;
    margin-top: 50px;
  }

  .container-1 .row {
    background-color: grey;
    border-radius: 20px;
    padding: 20px;
  }

  .container-1 .row form button {
    margin-top: 5px;
  }
  </style>
</head>

<body>
  <?php require 'navbar2.php'; ?>

  <div class="container-1">
    <div class="row">
      <h3>Ubah Produk</h3>

      <form action="" method="POST" enctype="multipart/form-data">
        <div>
          <label for="nama">Nama</label>
          <input type="text" id="nama" name="nama" value="<?= $produk['Nama']; ?>" class="form-control"
            autocomplete="off" required>
        </div>

        <label for="kategori">kategori</label>
        <select name="kategori" id="kategori" class="form-control" required>
          <option value="<?= $produk['id']; ?>"><?= $produk['nama']; ?></option>
          <?php foreach($kategoris as $ktr) :?>
          <option value=" <?= $ktr['id']; ?>"><?= $ktr['nama']; ?></option>
          <?php endforeach; ?>
        </select>

        <div>
          <label for="harga" class="mt-2">Harga</label>
          <input type="number" class="form-control" name="harga" value="<?= $produk['Harga']; ?>" required>
        </div>

        <div>
          <label for="gambar" class="mt-1">Gambar</label>
          <input type="file" class="form-control" name="gambar">
          <input type="hidden" name="gambar_lama" value="<?= $produk["gambar"] ?>">
        </div>

        <div>
          <label for="spesifikasi" class="mt-1">Spesifikasi</label>
          <textarea name="spesifikasi" id=" detail" cols="30" rows="10"
            class="form-control"><?= $produk['Spesifikasi']; ?></textarea>
        </div>
        <input type="hidden" name="produk_id" value="<?= $produk['Product_id']; ?>">
        <button type="submit" name="ubah" class="btn btn-warning">Ubah</button>
      </form>
    </div>
  </div>
</body>

<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
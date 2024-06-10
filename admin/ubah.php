<?php
require '../function/function.php';

$id = $_GET ['id'];
$kategori= query("SELECT * FROM kategori WHERE id = $id")[0];

if(isset($_POST['ubah'])){
  if( ubah($_POST) > 0){
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
  .container-1 {
    width: 100%;
    padding: 80px;
    margin-top: 140px;
    /* margin-left: 160px;
    margin-right: 160px; */
  }

  .container-1 .row {
    background-color: grey;
    border-radius: 20px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
    padding: 20px;
    margin: auto;
    width: 350px;
  }
  </style>
</head>

<body>
  <?php require 'navbar2.php'?>


  <div class="container-1">
    <div class="row">
      <h3>Ubah kategori</h3>
      <form action="" method="POST">
        <input type="hidden" name="id" value="<?=$kategori['id'];?>">
        <div class="mb-3">
          <label for="kategori" class="form-label">Kategori</label>
          <input type="text" name="nama" value="<?=$kategori['nama'] ?>" placeholder="input nama kategori "
            class="form-control mb-2" id="kategori" autocomplete="off" required>
          <!-- <input type="text" name="gambar" placeholder="input nama kategori " class="form-control" id="kategori"> -->
        </div>
        <button type="submit" name="ubah" class="btn btn-warning">ubah</button>
      </form>
    </div>
  </div>
</body>

<script src=" https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
</script>

</html>
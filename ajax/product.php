<?php 
require '../function/function.php';
$keyword = $_GET["keyword"];

$query = "SELECT * FROM product
            WHERE
              Nama LIKE '%$keyword%'
            ";
$product = query($query);
?>

<?php foreach($product as $prd) : ?>
<div class="card" style="width: 15rem;">
  <img src="../image/<?= $prd['Gambar']; ?>" class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title text-center"><?= $prd["Nama"];?></h5>
    <p class="card-text text-center"><?= $prd['Spesifikasi']; ?></p>
  </div>
</div>
<?php endforeach; ?>
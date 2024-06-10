<?php 
require '../function/function.php';

if(!isset($_GET['id'])){
  header("location: admin.php");
  exit;
}

$product_id = $_GET['id'];

if( hapus_produk($product_id) > 0){
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'admin.php';
        </script>";
} else {
  echo "data gagal dihapus!";
}
?>
<?php 
require '../function/function.php';

if(!isset($_GET['id'])){
  header("location: admin.php");
  exit;
}

$id = $_GET['id'];

if( hapus($id) > 0){
  echo "<script>
          alert('data berhasil dihapus');
          document.location.href = 'admin.php';
        </script>";
} else {
  echo "data gagal dihapus!";
}
?>
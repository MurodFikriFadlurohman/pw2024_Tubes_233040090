<?php

// Koneksi ke database
function koneksi (){
  $conn = mysqli_connect("localhost", "root","", "pw2024_tubes_233040090");
  return $conn;
}

// Ambil data dari tabel database / query data dari tabel database
function query($query) {
  $conn = koneksi();
  $result = mysqli_query($conn, $query);
  $rows = [];
  while($row = mysqli_fetch_assoc($result)){
    $rows[] = $row; 
  }
  return $rows;
}

// Login 
function login($data)
{
  $conn = koneksi();

  $username = htmlspecialchars ($data['username']);
  $password = htmlspecialchars ($data['password']);
  $result = mysqli_query($conn, "SELECT * FROM user WHERE username = '$username'");
  
  
  if (mysqli_num_rows($result)) 
  {  
    $row = mysqli_fetch_assoc($result);
    if(password_verify($password, $row["Password"])) {
      
      $role =  query("SELECT role FROM user WHERE username = '$username'")[0]["role"];
      $_SESSION["login"] = true;
      $_SESSION["username"] = $username;
      
      if ($role === "admin"){
        header ("location: ../admin/admin.php");
        exit;
      } else {
        header ("location: ../halaman/utama.php");
        exit;
      }
    }
  }
  return [
    'error' => true,
    'pesan' => 'Username / Password salah!' 
  ];
}
// Akhir Login 

// tambah data
function tambah($data)
{
  $conn = koneksi();

  $nama = htmlspecialchars ($data['nama']);
  // $gambar = $data['gambar'];

  $query="INSERT INTO
            kategori (id,nama)
          VALUES
          (null, '$nama');
        ";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
// akhir tambah data

// hapus
function hapus($id){
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM kategori WHERE id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
// Akhir hapus

// Ubah
function ubah($data)
{
  $conn = koneksi();

  $id = $data['id'];
  $nama = htmlspecialchars ($data['nama']);
  // $gambar = $data['gambar'];

  $query="UPDATE kategori SET
            nama='$nama' 
          WHERE id = $id
          ";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
// Akhir Ubah

// Registrasi
function register($data) {
  $conn = koneksi();

  $username = strtolower(stripslashes($data["username"]));
  $password = mysqli_real_escape_string($conn, $data["password"]);

  $result = mysqli_query($conn, "SELECT username FROM user WHERE username = '$username'");
  if(mysqli_fetch_assoc($result)) {
      echo "<script>alert( 'user sudah terdaftar')</script>";
      return false;
  }

  // $result = mysqli_query($conn, "SELECT * FROM users WHERE email = '$username'");
  // if(mysqli_fetch_assoc($result)) {
  //     echo "<script>alert('Username sudah terpakai')</script>";
  //     return false;
  // }

  $password = password_hash($password, PASSWORD_DEFAULT);

  // tambahkan userbaru ke database
  mysqli_query($conn, "INSERT INTO user(Username, Password) VALUES ('$username', '$password')");
  return mysqli_affected_rows($conn);
}
// Akhir Registrasi

// tambah data produk
function tambah_product($data)
{
  $conn = koneksi();

  $Nama = htmlspecialchars ($data['nama']);
  $Spesifikasi= htmlspecialchars ($data['spesifikasi']);
  $Harga = htmlspecialchars ($data['harga']);
  $Kategori_id = htmlspecialchars ($data['kategori']);


  //Upload gambar
  $Gambar = upload();
  if(!$Gambar) {
      return false;
  }
  
  $query="INSERT INTO
            product (Nama, Spesifikasi, Harga, Gambar, Kategori_id)
          VALUES
          ('$Nama', '$Spesifikasi', '$Harga', '$Gambar', '$Kategori_id');
        ";
  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
// akhir tambah data produk

// upload gambar
  function upload() {

    $namaFile = $_FILES['gambar']['name'];
    $ukuranFile = $_FILES['gambar']['size'];
    $error = $_FILES['gambar']['error'];
    $tmpName = $_FILES['gambar']['tmp_name'];

    // Cek apakah tidak ada gambar yang diupload
    if( $error === 4) {
        echo "<script>
                alert('Pilih gambar terlebih dahulu!');
            </script>";
        return false;
    }

    // Cek apakah yang diupload adalah gambar
    $ekstensiGambarValid = ['jpg', 'jpeg', 'png'];
    $ekstensiGambar = explode('.', $namaFile);
    $ekstensiGambar = strtolower(end($ekstensiGambar));
    if(!in_array($ekstensiGambar, $ekstensiGambarValid)) {
        echo "<script>
                alert('Yang anda upload bukan gambar!');
            </script>";
        return false;
    }

    // Cek jika ukurannya terlalu besar
    if( $ukuranFile > 1000000) {
        echo "<script>
                alert('Uuran gambar terlalu besar!');
            </script>";
        return false;
    }

    // Generate nama gambar baru
    $namaFileBaru = uniqid();
    $namaFileBaru .= '.';
    $namaFileBaru .= $ekstensiGambar;

    // Lolos pengecekan, gambar siap diupload
    move_uploaded_file($tmpName, '../image/' . $namaFileBaru);

    return $namaFileBaru;
  }
// akhir upload gambar

// Cari
function cari($keyword){
  $query = "SELECT * FROM kategori 
                WHERE
              nama = '$keyword'
            ";
  return query($query);
}
// Akhir cari

// cari 2
function cari2($keyword){
  $query = "SELECT * FROM product JOIN Kategori ON Kategori_id = Kategori.id
                WHERE
                product.Nama LIKE '%$keyword%'
            ";
  return query($query);
  // var_dump($query);
}
// Akhir cari 2

// Ubah_produk
function ubah_produk($data)
{
  $conn = koneksi();

  $id = $data['produk_id'];
  $nama = htmlspecialchars ($data['nama']);
  $kategori = htmlspecialchars ($data['kategori']);
  $harga = htmlspecialchars ($data['harga']);
  $gambar_lama = $data['gambar_lama'];
  $spesifikasi = $data['spesifikasi'];
  
  
  if( $_FILES['gambar']['error'] === 4) {
    $gambar = $gambar_lama;
} else {
    $gambar = upload();
} 

  $query="UPDATE product SET
            Nama='$nama', 
            Kategori_id ='$kategori', 
            Harga='$harga', 
            Gambar='$gambar', 
            Spesifikasi='$spesifikasi' 
          WHERE Product_id = $id
          ";

  mysqli_query($conn, $query);
  echo mysqli_error($conn);
  return mysqli_affected_rows($conn);
}
// Akhir Ubah_produk

// Hapus Produk
function hapus_produk($id){
  $conn = koneksi();
  mysqli_query($conn, "DELETE FROM product WHERE Product_id = $id") or die(mysqli_error($conn));
  return mysqli_affected_rows($conn);
}
// Akhir Hapus Produk
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Navbar</title>
  <!-- Css -->
  <link rel="stylesheet" href="../css/navbar.css" />

  <!-- Bootstrap -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Josefin+Sans&family=Oswald:wght@200;400&family=Whisper&display=swap"
    rel="stylesheet">

  <!-- Link AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">

  <!-- Boxicons -->
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>

<body>

  <!-- navbar -->
  <nav class="navbar navbar-expand-lg navbar-dark shadow-sm fixed-top" style="font-family: Josefin Sans, sans-serif;">
    <div class="container">
      <a href="" class="text-decoration-none acer">Acer</a>

      <!-- Search -->
      <!-- <form action="">
        <div class="search">
          <label class="search-icon" for="search"><i class='bx bx-search'></i></label>
          <input type="search" name="search" placeholder="search" id="search">
        </div>
      </form> -->
      <!-- Search -->

      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav ms-auto gap-3">
          <li class="nav-item">
            <a class="nav-link" href="utama.php">Home</a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="product.php">Product</a>
          </li>

          <li class="nav-item">
            <?php if(isset($_SESSION['login'])) :?>
            <a class="nav-link" href="logout.php">Logout</a>
            <?php else : ?>
            <a class="nav-link" href="login.php">Login</a>
            <?php endif; ?>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- akhir navbar -->
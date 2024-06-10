<?php
session_start();

require '../function/function.php';

if(isset($_POST['login'])){
  $login = login($_POST);
}

if(isset($_POST['register'])){
  if(register($_POST) > 0){
    echo "<script>
            alert('user baru berhasil ditambahkan');
            document.location.href = 'login.php';
          </script>";
  }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>

  <!-- Link CSS -->
  <link rel="stylesheet" href="../css/login2.css">
  <!-- Akhir Link CSS -->
</head>

<body>
  <div class="wrapper">
    <!-- Login -->
    <div class="form-box login">
      <h2>Login</h2>
      <?php if(isset($login['error'])) : ?>
      <p><?= $login['pesan']; ?></p>
      <?php endif; ?>
      <form action="#" method="POST">
        <div class="input-box">
          <span class="icon">
            <ion-icon name="person-outline"></ion-icon>
          </span>
          <input type="text" name="username" autocomplete="off" required>
          <label for="username">username</label>
        </div>

        <div class="input-box">
          <span class="icon">
            <ion-icon name="lock-closed-outline"></ion-icon>
          </span>
          <input type="password" name="password" required>
          <label for="password">password</label>
        </div>
        <button type="submit" class="btn" name="login">Login</button>
        <div class="login-register">
          <p>Don't have an account? <a href="#" class="register-link">Register</a></p>
        </div>
      </form>
    </div>
    <!-- Akhir Login -->

    <!-- Register -->
    <div class="form-box register">
      <h2>Registration</h2>
      <form action="#" method="POST">
        <div class="input-box">
          <span class="icon">
            <ion-icon name="person-outline"></ion-icon>
          </span>
          <input type="text" name="fullname" id="fullname" autocomplete="off" required>
          <label for="fullname">Fullname</label>
        </div>

        <div class="input-box">
          <span class="icon">
            <ion-icon name="person-outline"></ion-icon>
          </span>
          <input type="text" name="username" id="username" autocomplete="off" required>
          <label for="username">username</label>
        </div>

        <div class="input-box">
          <span class="icon">
            <ion-icon name="lock-closed-outline"></ion-icon>
          </span>
          <input type="password" name="password" id="password" autocomplete="off" required>
          <label for="password">password</label>
        </div>
        <button type="submit" class="btn" name="register">Register</button>
        <div class="login-register">
          <p>Already have an account? <a href="#" class="login-link">Login</a></p>
        </div>
      </form>
    </div>
  </div>
  <!-- Akhir register -->

  <script src="../js/script2.js"></script>
  <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
  <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
</body>

</html>
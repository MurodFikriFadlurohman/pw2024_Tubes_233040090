<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <!-- Google Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap" rel="stylesheet">

  <!-- Style CSS -->
  <link rel="stylesheet" href="../css/login.css">
  <title>login</title>
</head>

<body>

  <div class="container" id="container">
    <div class="form-container sign-up">
      <form>
        <h1>Create Account</h1>
        <div class="social-icons">
          <a href="#" class="icon"><i class="fa-brands fa-google-plus-g"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-facebook-f"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-github"></i></a>
          <a href="#" class="icon"><i class="fa-brands fa-linkedin-in"></i></a>
        </div>
        <span>Enter your fullname and username</span>
        <input type="text" placeholder="fullname">
        <input type="username" placeholder="username">
        <input type="password" placeholder="Password">
        <button>Sign Up</button>
      </form>
    </div>
    <div class="form-container sign-in">
      <form>
        <h1>Sign In</h1>
        <span>enter your username and password</span>
        <input type="username" placeholder="username">
        <input type="password" placeholder="Password">
        <button>Sign In</button>
      </form>
    </div>
    <div class="toggle-container">
      <div class="toggle">
        <div class="toggle-panel toggle-left">
          <h1>Welcome Back!</h1>
          <p>Masukkan detail pribadi Anda untuk melihat semua fitur situs</p>
          <button class="hidden" id="login">Sign In</button>
        </div>
        <div class="toggle-panel toggle-right">
          <h1>Hello, Friend</h1>
          <p>Daftarkan dengan detail pribadi Anda untuk melihat semua fitur situs</p>
          <button class="hidden" id="register">Sign Up</button>
        </div>
      </div>
    </div>
  </div>

  <script src="../js/script.js"></script>
</body>

</html>
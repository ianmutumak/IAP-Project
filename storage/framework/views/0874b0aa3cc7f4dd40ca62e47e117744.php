<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>login</title>
  <link rel="stylesheet" href="styles.css">
  <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
  <link rel="stylesheet" href="<?php echo e(asset('css/nav.css')); ?>">
</head>
<body>
<div class="container">
        <div class="navbar">
            <h2>CARWASH<span class="top">Pro</span></h2>
            <ul>
                <li><a href="home.blade.php">Home</a></li>
                <li><a href="signup.blade.php">Sign up</a></li>
                <li><a href="signin.blade.php">Sign in</a></li>
                <li><a href="prices.html">Prices</a></li>
                <li><a href="blaa.html">Blalaa</a></li>
            </ul>
        </div>
  <div class="wrapper">
    <form action="">
      <h1>Login</h1>
      <div class="input-box">
        <input type="text" placeholder="Username" required>
        <i class='bx bxs-user'></i>
      </div>
      <div class="input-box">
        <input type="password" placeholder="Password" required>
        <i class='bx bxs-lock-alt' ></i>
      </div>
      <div class="remember-forgot">
        <label><input type="checkbox">Remember Me</label>
        <a href="#">Forgot Password</a>
      </div>
      <button type="submit" class="btn">Login</button>
      <div class="register-link">
        <p>Dont have an account? <a href="signin.blade.php">Sign in</a></p>
      </div>
    </form>
  </div>
</div>
</body>
</html><?php /**PATH C:\xampp1\htdocs\lrvlcar\lrvlc\car\resources\views/signin.blade.php ENDPATH**/ ?>
<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://www.w3schools.com/php/">
  <link rel="stylesheet" href="https://www.cloudways.com/blog/best-php-frameworks/?__cf_chl_jschl_tk__=pmd_DAB4WrMDsJ1Z0td49cPoLflEyFrhqJihJ6BfGmBTIN8-1635284383-0-gqNtZGzNAiWjcnBszQil#choosing">
	<link rel="stylesheet" href="css/style.css" type="text/css">
  <title>Without Driver</title>
</head>
<body>
  <!-- Logo -->
  <div id="logo">
    <a>WITHOUT DRIVER AUTOMOBILES</a>
    <img src="img/logo.png" class="logo" alt="auto">
  </div>

  <!-- Navigation-->
  <div class="topnvg" id="myTopnvg">
    <a href="index.php">HOME </a>
    <a href="about.php">ABOUT </a>
    <a href="signup.php">SIGNUP </a>
    <a href="login.php" class="active">LOGIN </a>
    <a href="contact.php">CONTUCT-Us</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

  <!-- Login -->
  <div>
  <form action="dashboard.php" class="container" method="POST">
    <h1>LOG IN</h1>
    <label1 for="email"><b>Username</b></label1>
    <input type="text" placeholder="Enter Username" name="email" required>

    <label2 for="pass"><b>Password</b></label2>
    <input type="password" placeholder="Enter Password" name="password" title="Must contain at least 8 characters and one uppercase letter" required>

    <button type="submit" name="submit" class="loginBtn">LOGIN</button>
    <span class="forgot_pass">FORGET <a href="password.php" class="pass">PASSWORD?</a></span>
    
  </form>
  </div>
  <script>
  function myFunction() {
    var d = document.getElementById("myTopnav");
    if (d.className == "topnvg") {
      d.className += " responsive";
    } else {
      d.className = "topnvg";
    }
  }
  </script>
</body>
</html>

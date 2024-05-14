<?php
session_start();
require 'db.php';
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

  <div id="logo">
    <a>DRIVERLESS AUTOMOBILES</a>
    <img src="img/logo.png" class="logo" alt="auto">
  </div>

    <!--Navigation-->
  <div class="topnvg" id="myTopnvg">
    <a href="index.php">HOME </a>
    <a href="about.php">ABOUT </a>
    <a href="signup.php" class="active">SIGNUP </a> <!-- same as Sign Up -->
    <a href="login.php">LOGIN </a>
    <a href="contact.php">CONTUCT-Us</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>



  <!-- Sign up Form -->
  <form action="create.php" method="POST" enctype="multipart/form-data">
  <div class="sign">
    <h1>SIGN UP</h1>
    <p>Fill in the form to create a new account.</p>
    <hr>

    <label1 for="name"><b>Full Name</b></label1>
    <input type="text" placeholder="Enter Full Name" name="name" required>

    <label2 for="email"><b>Email</b></label2>
    <input type="text" placeholder="Enter Email" name="email" id="email" required>

    <label3 for="dtb"><b>Date Of Birth</b></label3>
    <input type="text" name="dtb" id="dtb"  required>

    <label4 for="gen"><b>Gender</b></label4>
		<input name="gen" type="radio" value="M"> Male
		<input name="gen" type="radio" value="F"> Female<br><br>

    <label5 for="code"><b>Postcode</b></label5>
    <input type="text" placeholder="Enter Postcode" name="code" id="code" required>

    <label6 for="paddress"><b>Postal Address</b></label6>
    <input type="text" placeholder="Enter Address" name="paddress" id="paddress" required>


    <label7 for="username"><b>Username</b></label7>

    <input type="text" placeholder="Enter Username" name="username" id="name" required>

    <label9 for="pass"><b>Password</b></label9>
    <input type="password" placeholder="Enter Password" name="password" id="pass1" title="Must contain at least 8 characters and at least one uppercase letter" required>

    <label for="pass"><b>Confirm Password</b></label>
    <input type="password" placeholder="Confirm Password" name="confirm_password" id="pass2" required>

    <p>You agree to create an account<a href="img/t&c.png">Terms & Privacy</a>.</p>
    <button type="reset" class="resetBtn">RESET</button>
    <button type="submit" class="signupBtn">Sign Up</button>
      <!-- <form action="read.php" method="post"> -->

  <div class="container_login">
    <p>Already have an account? <a href="login.php">Log in</a>.</p>
  </div>
</div>
</form>

</footer>
  <div class="social">
    <h4>Follow Us On</h4>

   <ul> <!-- Social Media Buttons -->
    <a href="https://www.facebook.com/" title="Facebook"><li class="facebook"><i class="fab fa-facebook-f"></i></li></a>
    <a href="https://www.instagram.com" title="Instagram"><li class="insta"><i class="fab fa-instagram"></i></li></a>
    <a href="https://www.youtube.com/" title="Youtube"><li class="youtube"><i class="fab fa-youtube"></i></li></a><br>
  </ul>

  <div class="copyright">
    Copyright © 2021. All rights; For self driving
  </div>

 </div>
</footer>
<script>
function myFunction() {
  var d = document.getElementById("myTopnvg");
  if (d.className === "topnvg") {
    d.className += " responsive";
  } else {
    d.className = "topnvg";
  }
}
</script>
</body>
</html>

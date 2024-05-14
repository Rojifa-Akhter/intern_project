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
  <!-- Logo Name & Image -->
  <div id="logo">
    <a>WITHOUT DRIVER AUTOMOBILES</a>
    <img src="img/logo.png" class="logo" alt="auto">
  </div>

  <!--Top Navigation Menu-->
  <div class="topnvg" id="myTopnvg">
    <a href="index.php">HOME </a>
    <a href="about.php" class="active">ABOUT </a>
    <a href="signup.php">SIGNUP </a>
    <a href="login.php">LOGIN </a>
    <a href="contact.php">CONTUCT-Us</a>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
      <i class="fa fa-bars"></i>
    </a>
  </div>

    <div class="about_video"></div>
  <img class="about_img" src="img/about.jpg" alt="About">

  <div class="about">
    <h2 class="heading2">About Us</h2><br>
    <p>
      Self-driving car technology is advancing every day, and it's only a matter of time before fully driverless vehicles appear on public streets.Almost daily, there's a new development in the driverless car space, and nearly every major car manufacturer, ride-sharing service and tech company from Apple to Google has bought into the driverless car industry. And, if you take all the driverless car chatter at face value, we’re only a couple years away from a utopian society where cars will navigate and park by themselves, and accidents become a rarity.
    </p><br><br>

    <p>
     The continuing evolution of automotive technology aims to deliver even greater safety benefits and automated driving systems (ADS) that -
     one day — can handle the whole task of driving when we don’t want to or can’t do it ourselves. Fully automated cars and trucks that drive us,
     instead of us driving them, will become a reality. These self-driving vehicles ultimately will integrate onto U.S. roadways by progressing through
     <a href="index.php" class="six_levels"><b>six levels of driver assistance technology</b></a> advancements in the coming years.
   </p><br><br>

   <p>
     Self driving cars, and flying cars would be this century’s biggest innovations for the automobile industry. Aeromobil has recently introduced its flying car version 3.0 that is fully functional and allows drivers to take flight and land at any airport in the world and drive, park and do whatever a traditional vehicle can do. In fact, the first flying car is going for sale this year, in 2015. Google introduced its autonomous car back in 2007 and continues developing its technology to make their driverless cars more reliable and safer. So, the days of seeing new car technologies are just beginning. However, the main focus of this article would be completely on driverless car technology.
   </p><br><br>
   <form action="video.php" method="POST">
   <button name="btn" type="video" value="video">Video</button>
  </div>
  
<footer>
<div class="social">
  <h4>Follow Us On</h4>

 <ul> <!-- Social Media Buttons -->
  <a href="https://www.facebook.com/" title="Facebook"><li class="facebook"><i class="fab fa-facebook"></i></li></a>
  <a href="https://www.instagram.com" title="Instagram"><li class="insta"><i class="fab fa-instagram"></i></li></a>
  <a href="https://www.youtube.com/" title="Youtube"><li class="youtube"><i class="fab fa-youtube"></i></li></a><br>
</ul>

<div class="copyright">
  © 2021 Without Driver
</div>

</div>
</footer>
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

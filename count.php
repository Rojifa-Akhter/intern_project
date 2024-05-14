<?
session_start();

if (isset($_SESSION['count'])) {
  $_SESSION['count']++;
  header('location:login.php');
  if($_SESSION['count'] >= 2){
    $_SESSION['msg3']="Logged In &#128512;";*
    setcookie('logFail', 'false', time()+ 900);  // 900 (60*15) = 15 Mins
    header('location:signin.php');
  }
}else{
  $_SESSION['count']=1;
}
?>

<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Without Driver</title>
</head>
<body>

  <a href="read.php"><button type="submit" name="View Account" class="">View Account</button></a>
  <a href="contact_Task3.php"><button type="submit" name="Contact" class="">Contact Us</button></a>

</body>
</html>

<?php
session_start();
if(isset($_COOKIE['logFail'])){
  $_SESSION['ms']="Account Locked !!!";
  header('location:login.php');
} else{
  require 'db.php';

  $username = $_POST['username'];
  $password = md5($_POST['upassword']);

  $signin = "SELECT * FROM users WHERE username='$username' AND password='$password' ";
  $result = mysqli_query($db_con, $signin);

  $num = mysqli_num_rows($result);

  if ($num == 1) {
  $info = mysqli_fetch_array($result);

  $_SESSION['u_id'] = $info['id'];
  $_SESSION['u_name'] = $info['name'];
  $_SESSION['u_email'] = $info['email'];
  $_SESSION['u_dtb'] = $info['dtb'];
  $_SESSION['u_gender'] = $info['gender'];
  $_SESSION['u_code'] = $info['code'];
  $_SESSION['u_address'] = $info['address'];

  setcookie('login', 'true', time() + 86400);
  header('location:dashboard.php');
}else {
  $_SESSION['ms']="Wrong Email or Password";
  header('location:count.php');
}

}
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>

  </body>
</html>

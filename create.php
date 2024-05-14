<?php
$location="localhost";
$user_name="root";
$user_pass="";
$db_name="student_info";
session_start();
require 'db.php';

$uname=$_POST['name'];
$uemail=$_POST['email'];
$udtb=$_POST['dtb'];
$ugen=$_POST['gen'];
$ucode=$_POST['code'];
$uaddress=$_POST['paddress'];
$username=$_POST['username'];
$upassword=md5($_POST['password']);

$uname_check = "SELECT * FROM users WHERE username='$username'";
$result = mysqli_query($db_con, $uname_check);
$num = mysqli_num_rows($result);

if ($num == 1) {
  $_SESSION['msg']="[Username Already In Use]";

  echo $_SESSION['msg'];
}else {
  $create="INSERT INTO users (name, email,	date_of_birth, gender, postcode, address,	username,	password)
           VALUES ('$uname', '$uemail', '$udtb', '$ugen', '$ucode', '$uaddress', '$username', '$upassword')";

  mysqli_query($db_con, $create);

  header('location:login.php');

}

?>

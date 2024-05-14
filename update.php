<?php
require 'db.php';

$id=$_POST['id'];
$uname=$_POST['name'];
$uemail=$_POST['email'];
$udtb=$_POST['dtb'];
$ugender=$_POST['gender'];
$upostcode=$_POST['postcode'];
$uaddress=$_POST['paddress'];
$username=$_POST['username'];
$username=$_POST['username'];
$upassword=md5($_POST['password']);




$update="UPDATE users SET name='$uname',email='$uemail',date_of_birth='$udtb'gender='$ugender', postcode='$upostcode', address='$uaddress',username='$username',password='$upassword' WHERE id='$id'";

mysqli_query($db_con,$update);

//header('location:read.php');

?>

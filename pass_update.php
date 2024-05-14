<?php
require 'db.php';
$id=$_POST['id'];

$read="SELECT * FROM users WHERE id='$id'";
$output=mysqli_query($db_con,$read);
$result=mysqli_fetch_array($output);
$old_pass=$result['password'];

$old=$_POST['old_pass'];
$new=md5($_POST['old_pass']);

if ($old_pass==$old) {
  $update="UPDATE users SET  password='$new' WHERE id='$id'";

  mysqli_query($db_con,$update);

  header('location:read.php');
}else {
  echo "Old Password Did Not Match";
}

?>

<?php

$id=$_GET['id'];
require 'db.php';
$del="DELETE FROM users WHERE id='$id'";

$output=mysqli_query($db_con,$del);
mysqli_close($db_con);
header('location:read.php');

?>

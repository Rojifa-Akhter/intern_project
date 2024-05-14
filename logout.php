<?php
session_start();
setcookie('log_failed','',time());
header('location:login.php');
session_unset();
session_destroy();


 ?>

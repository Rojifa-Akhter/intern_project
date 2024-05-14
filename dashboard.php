<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://www.w3schools.com/php/">
    <link rel="stylesheet" href="https://www.cloudways.com/blog/best-php-frameworks/?__cf_chl_jschl_tk__=pmd_DAB4WrMDsJ1Z0td49cPoLflEyFrhqJihJ6BfGmBTIN8-1635284383-0-gqNtZGzNAiWjcnBszQil#choosing">
    
    <title>Without Driver</title>
  </head>
  <body>
    <header>
      <div class="image">
      <img src="img/dashboard.jpg" alt="Image"><br><br>
    </header>
    <a href="read.php">List of Users Information</a>
    <a href="logout.php">logout</a>
    <form action="action.php" method="post" enctype="multipart/form-data">
      Enter Your File
      <input name="banner" type="file" location="file">
      <button type="submit" name="btn">Upload</button>
    </form>
  </body>
</html>
<hr>
<?php
if (isset($_COOKIE['login'])) {
  echo "Welcome ".$_SESSION['name'];

  echo"<br><a href='edit.php?id=".$_SESSION['id']."'>User Info Update</a>";
}
 ?>

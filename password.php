
  <!DOCTYPE html>
  <html lang="en" dir="ltr">
    <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="https://www.w3schools.com/php/">
      <link rel="stylesheet" href="https://www.cloudways.com/blog/best-php-frameworks/?__cf_chl_jschl_tk__=pmd_DAB4WrMDsJ1Z0td49cPoLflEyFrhqJihJ6BfGmBTIN8-1635284383-0-gqNtZGzNAiWjcnBszQil#choosing">
	  <link rel="stylesheet" href="css/bootstrap.css" type="text/css">
      <title>Without Driver</title>
    </head>
    <body>
      <form action="pass_update.php" method="post">
        <table>
          <input type="number" name="id" value="<?=$id?>" hidden>
          <tr><td>Old Password:</td><td><input type="text" name="old_pass" required></td></tr>
          <tr><td>New Password:</td><td><input type="text" name="new_pass" required></td></tr>
          <tr><td></td><td><input type="submit" name="btn" value="Update"></td></tr>
        </table>
      </form>
      <a href="read.php"> View all users information</a>
    </body>
  </html>
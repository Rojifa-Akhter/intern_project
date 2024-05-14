<?php
$id=$_GET['id'];
require 'db.php';

$read="SELECT * FROM users WHERE id='$id'";

$output=mysqli_query($db_con,$read);

$result=mysqli_fetch_array($output);

?>
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
<div>
  <form action="update.php" method="POST" enctype="form-data" >

    <table class="editfrm">
      <tr><td><input name="id" value="<?php echo $_GET['id']?>" hidden></td></tr>
      <tr><td>Enter Full Name: </td><td><input name="name" type="text" placeholder="Enter Your Name" value="<?=$result['name'] ?>"></td></tr>
	    <tr><td>Enter Email: </td><td><input name="email" type="email" value="<?=$result['email'] ?>"></td></tr>
      <tr><td>Date Of Birth: </td><td><input  name="dtb" type="date"  value="<?=$result['date_of_birth'] ?>"></td></tr>
      <tr><td>Enter Gender: </td>
  	  <td>
  		<input name="gender" type="radio"  value="<?=$result['gender'] ?>"> Male
  		<input name="gender" type="radio"  value="<?=$result['gender'] ?>"> Female
  	  </td></tr>
      <tr><td>Enter Postcode: </td><td><input name="postcode" type="text" value="<?=$result['postcode'] ?>"></td></tr>
      <tr><td>Enter Address: </td><td><input name="paddress" type="text" value="<?=$result['address'] ?>"></td></tr>
      <tr><td>Enter Username: </td><td><input name="username" type="text" value="<?=$result['username'] ?>"></td></tr>
      <tr><td>Enter Password: </td><td><input name="password" type="password" value="<?=$result['password'] ?>"></td></tr>
      <tr>
	  <td>
		<button name="btn" type="submit" value="submit">Update</button>
	  </td>
	</tr>

	</table>
	</form>
</div>
</body>
</html>

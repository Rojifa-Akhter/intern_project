<?php
require 'db.php';

$read="SELECT * FROM users";

$output = mysqli_query($db_con, $read);
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
  <title>Driverless</title>
</head>
<body>
<table border="1px solid black" class="table table-bordered table-hover">
	<tr>
	  <td>ID</td>
	  <td>Full Name</td>
	  <td>Email</td>
		<td>Date Of Birth</td>
  	<td>Gender</td>
		<td>Postcode</td>
		<td>Address</td>
  	<td>Username</td>
	  <td>Password</td>
	  <td>Update</td>
	  <td>Edit</td>
	  <td>Delete</td>
	</tr>


<?php
while($result = mysqli_fetch_array($output)){
	echo "<tr><td>". $result['id']. "</td><td>" .$result['name']."</td><td>". $result['email']. "</td><td>". $result['date_of_birth']. "</td><td>". $result['gender']. "</td><td>". $result['postcode']. "</td><td>". $result['address']. "</td><td>". $result['username']. "</td><td>". $result['password']."</td><td><a href='password.php?id=".$result['id']."'>Update</a></td><td><a href='edit.php?id=".$result['id']."'>Edit</a></td><td><a href='delete.php?id=".$result['id']."'>Delete</a></td></tr>";

}
?>
</table>
</body>
</html>
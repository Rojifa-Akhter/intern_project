<?php
session_start();
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
  <!-- Logo-->
  <div id="logo">
      <a>WITHOUT DRIVER AUTOMOBILES</a>
      <img src="img/logo.png" class="logo" alt="Logo">
    </div>

  <div class="con">
  <form action="faq.php" target="_blank">

    <h2>Contact Us</h2>

    <label for="category">Type</label>
    <select id="category" name="category">
      <option>Question</option>
				<option>Complaints</option>
				<option>FAQ</option>
				<option>Suggestions</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Write some Question ???" style="height:200px"></textarea>

    <div class="submit"><input type="submit" value="Submit" onclick="myFunction()"></div>

  </form>
</div>

  <script>
  function myFunction() {
    alert("Before submitted to visit our FAQ page because there have some answers...");
  }
  </script>

</body>
</html>

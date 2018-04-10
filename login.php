<?php include 'server.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>pikawish</title>
	<link rel="stylesheet" type="text/css" href="sign.css">
	<script type="text/javascript" src="sign.js"></script>
</head>
<body onload="melcow()">
<h1>PikaWish</h1>
<h3>Sign in</h3>
 <form name="signin"  method="post" action="login.php"> 
  User Name:<br>
  <input type="text" name="username"><br><br>
  Password:<br>
  <input type="password" name="password"><br><br>
  <input type="submit" value="Submit" name="login_user" onclick="validateForm()">
</form> 
<a href ="register.php">Register</a>

</body>
</html>
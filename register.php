<?php include 'server.php'; ?>
<!DOCTYPE html>
<html>
<head>
	<title>pikawish</title>
	<link rel="stylesheet" type="text/css" href="sign.css">
	<script type="text/javascript" src="sign.js"></script>
</head>
<body onload="melcow()">
<h1>Pika wish</h1>

 <form  style="border:1px solid #ccc" method="post" action="register.php">
 	<?php include('error.php'); ?>
  <div class="container">
    <h3>Sign Up</h3>
    <p>Please fill in this form to create an account.</p>
    <hr>
    <label for="fname">Name</label>
    <input type="text" id="fname" name="username" placeholder="Your name.."  value="<?php echo $username; ?>">



 


    <label for="email"><b>Email</b></label>
    <input type="text" placeholder="Enter Email" name="email" required >

    <label for="psw"><b>Password</b></label>
    <input type="password" placeholder="Enter Password" name="password_1" required>

    <label for="psw-repeat"><b>Repeat Password</b></label>
    <input type="password" placeholder="Repeat Password" name="password_2" required>

    

    <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
    <label>
      <input type="checkbox" checked="checked" name="remember" style="margin-bottom:15px"> I agree 
    </label>

    <div class="clearfix">
      
      <button type="submit" class="signupbtn" onclick="validateForm()" name="reg_user">Sign Up</button>
    </div>
  </div>
</form> 
<p>
Already a member? <a href="login.php">Sign in</a></p>
</body>
</html>
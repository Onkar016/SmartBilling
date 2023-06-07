<!--
Author: W3layouts
Author URL: http://w3layouts.com
-->
<!DOCTYPE html>
<html lang="zxx">

<head>
	<title>Snow Signup form Responsive Widget Template : W3Layouts</title>

	<!-- Meta tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">

	<!-- Style -->
	<link rel="stylesheet" href="style14.css" type="text/css" media="all" />
</head>

<body>
	<!-- Signup form -->
	<section class="w3l-signup">
		<div class="overlay">
			<div class="wrapper">
				<div class="logo">
					<a class="brand-logo" href="login.php">Sign Up</a>
				</div>
				<div class="form-section">
					<h3>Sign Up</h3>
					<form  method="post" class="signin-form">
						<div class="form-input">
							<input type="text" name="name" placeholder="Enter Name" required="" autofocus>
						</div>

						<div class="form-input">
							<input type="text" name="username" placeholder="Enter Email" required="" autofocus>
						</div>
						<div class="form-input">
							<input type="email" name="email" placeholder="Enter Username @ex Email" required="" autofocus>
						</div>
						<div class="form-input">
							<input type="password" name="password" placeholder="Enter Password" required="">
						</div>
						<div class="form-input">
							<input type="password" name="confirmpassword" placeholder="Enter Confirm Password" required="">
						</div>
						<button type="submit" class="btn btn-primary theme-button mt-4" name="signup">Sign Up</button>
					</form><p class="signup">Already a customer? <a href="login.php" class="signuplink">Login</a></p>
				</div>
			</div>
		</div>
		<div id='stars'></div>
		<div id='stars2'></div>
		<div id='stars3'></div>

	</section>

	<!-- /Signup form -->
</body>

</html>

<?php 
include('config.php');
if (isset($_POST['signup'])) 
{
  extract($_POST);

  echo $asd= "insert into login(name,username,email,password) value ('$name','$username','$email','$password')";
  $add=mysqli_query($connect,$asd) or die(mysqli_error($connect));
  if ($asd) 
  {
    echo "<script>;";
    echo "window.alert('You Have Register successfully');";
    echo "</script>";
    }
    else
    {
      echo "<script>;";
      echo "window.alert('Data Error..!');";
    echo "</script>";
    }
   }
?>
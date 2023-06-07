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
					<a class="brand-logo" href="login.php">Login</a>
				</div>
				<div class="form-section">
					<h3>Login</h3>
					<form  method="post" class="signin-form">
						<div class="form-input">
							<input type="email" name="username" placeholder="Enter Email" required="" autofocus>
						</div>
						<div class="form-input">
							<input type="password" name="password" placeholder="Enter Password" required="">
						</div>
						<button type="submit" class="btn btn-primary theme-button mt-4" name="login">Login</button>
					</form><p class="signup">Don't Have Account? <a href="signup.php" class="signuplink">Sign Up</a></p>
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
if (isset($_POST['login'])) {
	$username=$_POST['username'];
	$password=$_POST['password'];

	$sql="select * from login where username='$username' and password='$password'";
	$result=mysqli_query($connect,$sql);
	$row=mysqli_fetch_array($result,MYSQLI_ASSOC);
	$count=mysqli_num_rows($result);
	if ($count==1) {
		header("Location:index.php");
	}
	else{
		echo '<script>
			   window.location.href="login.php";
			   alert("Login Failed. Invalid username or password!!")
			   </script>';
	}
}
?>


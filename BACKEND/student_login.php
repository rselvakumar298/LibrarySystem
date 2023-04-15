<?php
	include "connection.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> Student login form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

	<style type="text/css">
		section
		{
			margin-top: -20px;
		}
	</style>
</head>
<body>
	
	<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand active">Library System</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="index.php">HOME</a></li>
						<li><a href="book.php">BOOKS</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
						<li><a href="reg_form.php"><span class="glyphicon glyphicon-user"> SIGNUP</span></a></li>
					</ul>
    </div>
			</nav>
		
	<section>
		<div class="login_img">
			<br><br><br><br><br><br>
			<div  class="box1">
				<br>
				<h1 style="font-size: 30px; text-align: center;"> Student Login Form</h1>
				
				
				<form name="login" action="login.php" method="post">
					
					<div class="login">
						<input class="form-control" type="text" name="username" placeholder="Username" required="">
						<br>
						<input class="form-control" type="password" name="password" placeholder="Password" required="">
						<br>
						<input class="btn btn-default" type="submit" name="submit" value="Login" style="width: 70px;height: 30px;">
						
						
					</div>
				</form>
				<p style="color: white; padding-left: 20px;">
					<br><br>
					<a style="color: white;text-decoration: none;"href="">Forgot password</a>
				</p>
			</div>
		</div>
	</section>



</body>
</html>

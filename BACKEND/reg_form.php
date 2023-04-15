<?php

include "connection.php";
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title> student registration form</title>
	<link rel="stylesheet" type="text/css" href="style.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width-device-width, initial-scale-1">
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
				<li><a href="student-login.php"><span class="glyphicon glyphicon-user"> SIGNIN</span></a></li>
			</ul>
		</div>
		
	</nav>


<section>
		<div class="reg_img">
			&nbsp&nbsp
			<div  class="box2">
				<h1 style="font-size: 30px; text-align: center;"> Student SignUp Form</h1>
				&nbsp
				<form name="registration" action="" method="post">
					<div class="login">
						<input class="form-control" type="text" name="firstname" placeholder="Firstname" required="">
						<br><br>
						<input class="form-control" type="text" name="Lastname" placeholder="Lastname" required="">
						&nbsp
						<input class="form-control" type="text" name="rollno" placeholder="Rollno" required="">
						&nbsp
						<input class="form-control" type="text" name="username" placeholder="Username" required="">
						&nbsp
						<input class="form-control" type="password" name="password" placeholder="Password" required="">
						<br><br>
						<input class="btn btn-default" type="submit" name="submit" value="SignUp" style="width: 70px;height: 30px;">
					</div>

				</form>
				
			</div>
		</div>
	</section>

	<?php
	if(isset($_POST['submit']))
	{
		mysql_query($con,"INSERT INTO 'student' VALUES('$_POST[firstname]','$_POST[lastname]','$_POST[rollno]','$_POST[username]','$_POST[password]');");
	?>
	<script type="text/javascript">
		alert("registration successfully");
	</script>
	<?php
	}

	?>
</body>	
</html>

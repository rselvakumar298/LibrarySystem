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
		.search{
			padding-left: 1000px;
		}
	</style>
</head>
<body>

	<!--                              search bar                                        -->

	<div class="search">
		<form class="navbar-form" method="post" name="form1">
			
				<input class="form-control"type="text" name="search" placeholder="search books">
				<button type="submit" name="submit" class="btn btn-default">
					<span class="glyphicon glyphicon-search"></span>
				</button>
			
		</form>
	</div>

	
	<nav class="navbar navbar-inverse">
				<div class="container-fluid">
					<div class="navbar-header">
						<a class="navbar-brand active">Library System</a>
					</div>
					<ul class="nav navbar-nav">
						<li><a href="index.php">HOME</a></li>
						<li><a href="">BOOKS</a></li>
					</ul>
					<ul class="nav navbar-nav navbar-right">
						<li><a href="index.php"><span class="glyphicon glyphicon-log-out"> LOGOUT</span></a></li>
						
					</ul>
				</div>
			</nav>
			<?php

				if(isset($_POST['submit']))
				{
					$q=mysqli_query($con,"SELECT * FROM books where name like '%$_POST[search]%'");
				}

				if(mysql_num_rows($q)==0){
					echo "sorry no book available in database";
				}
				$res=mysqli_query($con,"SELECT * FROM 'books';");
				echo "<table class='table table-bordered table-hover'>";
				echo "<tr style='background-color: white;'>";
					echo "<th>"; echo "ID"; echo "</th>";
					echo "<th>"; echo "NAME"; echo "</th>";
					echo "<th>"; echo "AUTHOR"; echo "</th>";
					echo "<th>"; echo "EDITION"; echo "</th>";
					echo "<th>"; echo "STATUS"; echo "</th>";
					echo "<th>"; echo "QUANTITY"; echo "</th>";
					echo "<th>"; echo "DEPARTMENT"; echo "</th>";
				echo "</tr>";

				while($row=mysqli_fetch_assoc($res))
				{
					echo "<tr>";
					echo "<td>"; echo $row['id']; echo "</td>";
					echo "<td>"; echo $row['name']; echo "</td>";
					echo "<td>"; echo $row['author']; echo "</td>";
					echo "<td>"; echo $row['edition']; echo "</td>";
					echo "<td>"; echo $row['status']; echo "</td>";
					echo "<td>"; echo $row['quantity']; echo "</td>";
					echo "<td>"; echo $row['department']; echo "</td>";

					echo "</tr>";

				}
			?>
</body>
</html>

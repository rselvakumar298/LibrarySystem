<?php
$username=$_POST['username'];
$password=$_POST['password'];
$con=new mysql_connect("localhost","root","","library system");
if ($con->connect_error) {
	die("Failed to connect".$con->connect_error);
}
else{
	$stmt=$con->prepare("select * from student where email = ?");
	$stmt->bind_param("s",$username);
	$stmt->execute();
	$stmt_result=$stmt->get_result();
	if($stmt_result->num_rows>0)
	{
		$data=$stmt_result->fetch_assoc();
		if($data['password'] === $password){
			echo "<h1>Login Successfully</h1>";
		}
		else{
			echo "<h2>Invalid user name and password</h2>";
		}
	}
	else{
		echo "<h2>Invalid user name and password</h2>";
	}
}
?>

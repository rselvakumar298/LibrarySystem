<?php
$con=new mysqli_connect('localhost','root','','library system');
if(!$con)
{
	die("failed to connect".mysqli_connect_error());
}
echo "Connected successfully";
?>

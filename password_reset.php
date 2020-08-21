<?php
	$con =mysqli_connect('localhost','root','root');
	$dbcon =mysqli_select_db($con,'Login_Data')
	if(!$con)
	{
	echo "Connection Failed";
	}
	$email=$_POST['email'];
	$password=$_POST['password'];
	$select=mysql_query("UPDATE user set password='$password' WHERE email='$email'");
	if(!$select)
	{
	echo "Password updated succesfully";
	}
	else
	{
	echo "Try Again!";
	}
?>

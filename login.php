<?php
	$con =mysqli_connect('localhost','root','root');
	if(!$con)
	{
		echo "Server Not Connected";
	}
	
	$dbcon=mysqli_select_db($con,'Login_Data');
	if(!$dbcon)
	{
	echo "Database Not Selected";
	}
	
	if(isset($_POST['submit'])){
		$name=$_POST['username'];
		$password=$_POST['password'];
		if($name!="" && $password!=""){
		$query= "SELECT count(*) as UserDet FROM users WHERE username='".$name."'and password='".$password."'";
		$res=mysqli_query($dbcon,$query);
		$arra=mysqli_fetch_array($result);
		$count = mysqli_num_rows($res);
		if($count>0){
			$_SESSION['name'] = $name;
			header('Location: index.html');
		}
		else{
			echo "Invalid Login Credentials";
		}
		}
	}
?>

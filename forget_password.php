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
		$mail=$_POST['email'];
		if($mail!=""){
			$query="SELECT count(*) as mailDet FROM users WHERE email='".$mail."';
			$res=mysqli_query($dbcon,$query);
			$arra=mysqli_fetch_array($res);
			$count=$row['mailDet'];
			if($count>0){
			$msg = "Follow this Link to reset\nhttp://anything.com/reset.html";
			mail($mail,"Password Reset",$msg);
			echo "reset email sent";
			}
			else{
			echo "This email address is not registered.";
			}
		}
	}
?>

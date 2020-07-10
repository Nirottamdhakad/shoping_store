<?php 
	require 'common.php';
	$email = mysqli_real_escape_string($con,$_POST['email']); // use escape_security
	$pass = mysqli_real_escape_string($con,$_POST['pass']);  // use escape_security
	$selQry="select * from users where email='$email' and password='$pass';";
	$selQryReslt=mysqli_query($con,$selQry) or die(mysqli_error($con));
	
	if(strlen($email)==0 or strlen($pass)==0)
	{
		echo "<h3>Fields cannt be empty!!</h3>";
		echo "After 7 seconds You will be redirected back to Login Page";
		header('refresh:7;url = login.php');
	}
	else
	{
		if(mysqli_num_rows($selQryReslt)==0)
		{
			echo "<h3>User not found!!</h3>";
			echo "After 7 seconds You will be redirected back to Login Page";
			header('refresh:7;url = login.php');
		}
		else
		{	
			$row = mysqli_fetch_array($selQryReslt);
			$_SESSION['email'] = $row['email'];
			$_SESSION['id'] = $row['ID'];
			header('location: product.php');
		}
	}
?>

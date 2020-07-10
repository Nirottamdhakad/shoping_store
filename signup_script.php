<?php
	require 'common.php';
	//$con = mysqli_connect("localhost", "root", "root@123", "store") or die(mysqli_error($con));
	$email = mysqli_real_escape_string($con,$_POST['email']);
	$selectQry="select email from users where email='$email';";
	$selectQryReslt=mysqli_query($con,$selectQry) or die(mysqli_error($con));
	$x = mysqli_num_rows($selectQryReslt);
	if($x>0)
	{
		echo "<h3>email id already exists</h3>";
		echo "After 7 seconds you will be redirected back to SignUp Page";
		header('refresh:7;url = signup.php');
	}
	else 
	{
		$name = mysqli_real_escape_string($con,$_POST['name']);
		$pass = mysqli_real_escape_string($con,$_POST['pass']);
		$cntNo = mysqli_real_escape_string($con,$_POST['cntNo']);
		$city = mysqli_real_escape_string($con,$_POST['city']);
		$addr = mysqli_real_escape_string($con,$_POST['addr']);
		//echo $addr;
		if(strlen($name) and strlen($pass) and strlen($cntNo) and strlen($city) and strlen($addr))
		{
			$sinQry = "insert into users(name,email,password,contact,city,address) values('$name','$email', '$pass', '$cntNo', '$city','$addr');";
   			$user_reg_submit = mysqli_query($con, $sinQry) or die(mysqli_error($con));
			$_SESSION['email'] = $email;
			$_SESSION['id'] = mysqli_insert_id($con);
			echo "<h3>Successfully Done!</h3>";
			echo "After 7 seconds you will be redirected back to Store Page";
			header('refresh:7;url = product.php');
		}
		else
		{
			echo "<h3>Fields cannot be empty</h3>";
			echo "After 7 seconds You will be redirected back to SignUp Page";
			header('refresh:7;url = signup.php');
		}
	} 
?>
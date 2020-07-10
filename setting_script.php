<!DOCTYPE html>
<html>
<head>
</head>
<body>
	<?php
		require 'common.php';
		$oldPass = $_POST['oldPass']; 
		$newPass1 = $_POST['newPass1'];
		$newPass2 = $_POST['newPass2'];
		$user_id = $_SESSION['id'];
		$selQry = "select password from users where id = '$user_id';";
		$selQryReslt = mysqli_query($con,$selQry) or die(mysqli_error($con));
		$row = mysqli_fetch_array($selQryReslt);
		if(strcmp($newPass1, $newPass2) or $row['password']!=$oldPass or !strlen($oldPass) or !strlen($newPass1) or !strlen($newPass2))
		{
			echo "<h3>Something went wrong!!<br>Enter it again</h3>";
			echo "After 7 seconds you will be redirected to Setting Page";
			header( "refresh:7;url = setting.php" );
		}
		else 
		{
			$user_id = $_SESSION['id'];
			$selQry = "update users set password = '$newPass1' where id = '$user_id';";
			$selQryReslt = mysqli_query($con,$selQry) or die(mysqli_error($con));
			echo "<h3>Your Password was successfully updated<br></h3>";
			echo "After 7 seconds you will be redirected to Product Page";
			header( "refresh:7;url = product.php" );
		}
	?>
</body>
</html>
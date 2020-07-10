<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Jquery-->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<?php 
		require 'common.php';
		include 'header.php'; 
	?>
	<?php 
		if(!isset($_SESSION['email']))
		{
			header('locatino: index.php');
		}
		$user_id = $_SESSION['id'];
		$selQry1 = "update users_items set status = 'confirmed' where user_id = '$user_id';";
		$selQry2 = "delete from users_items where status = 'confirmed';";
		$selQryReslt1 = mysqli_query($con,$selQry1) or die(mysqli_error($con));
		$selQryReslt2 = mysqli_query($con,$selQry2) or die(mysqli_error($con));

	?>
	<pre>
		
	</pre>
	<div class="container">
		<h2>Your Order is Confirmed!!<br>
			Thank you for shopping with us.<br>
			<a href="product.php">Click here</a> to purchase any other item.
		</h2>
	</div>
	<?php require 'footer.php'; ?>
</body>
</html>

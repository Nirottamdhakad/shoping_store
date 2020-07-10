<!DOCTYPE html>
<html>
<head>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title> Bootstrap By Nayan Kumar</title>
    <link rel="stylesheet" href="style.css" type="text/css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    <style type="text/css">
    	div.h1
    	{
    		margin-top: 40px;
    	}
    </style>
</head>
<body>
	<div>
		<?php 
			require 'common.php';
			include 'header.php'; 
		?>
	</div>
	<pre>
		
	</pre>
	<div class="container">
		<h1>Add items to the cart first!</h1>
	</div>
	<div class="container">
		<a href="product.php"><button class="btn btn-primary">Back</button></a>
	</div>
	<?php include 'footer.php';;?>
</body>
</html>
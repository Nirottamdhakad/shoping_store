<!-- Coded by Nayan Kumar-->
<?php
    require 'common.php';
    if (isset($_SESSION['email'])) 
    {
        header('location: product.php');
    } 
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Bootstrap By Nayan Kumar</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
<body style="background-color: #C0C0C0;">
    <?php include 'header.php';?>
    <div id="banner-img">
        <div class="container">
            <div id="banner_content">
                <h1>We Sell Lifestyle</h1>
                <p>Flat 40% OFF on premium brands</p>
                <a href="login.php" class="btn btn-danger btn-lg active">Shop Now</a>
            </div>
        </div>
    </div>
    <?php include 'footer.php';?>
</body>
</html>
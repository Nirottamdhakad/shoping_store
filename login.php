<!-- Login page by Nayan Kumar-->
<!-- Coded by Nayan Kumar-->
<?php 
    require 'common.php' ;
    if (isset($_SESSION['email'])) 
    {
        header('location: product.php');
    }
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Bootstrap By Nayan Kumar</title>
        <link rel="stylesheet" href="style.css" type="text/css"/>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
    <?php include 'header.php'; ?>
    <pre>
        
    </pre>
        <div class="container">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h4> Login here</h4>
                </div>
                <div class="panel-body">
                    <p class="text-warning">Login for Purchase</p>
                    <form method="POST" action="login_submit.php">
                        <div class="form-group">
                            <label for="email">Email</label>
                            <input type="email" class="form-control" name="email" placeholder="Enter your email">
                        </div>
                        <div class="form-group">
                            <label for="pass"> Password </label>
                            <input type="password" class="form-control" name="pass" placeholder="Enter your password">
                        </div>
                        <input type="submit" class="btn btn-primary" value="Login">
                    </form>
                </div>
                <div class="panel-footer"><a href="signup.php">Don't have an account? Register</a></div>
            </div>
        </div>
    <?php include 'footer.php';?>
</body>
</html>
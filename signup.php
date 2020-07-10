<!-- Sign up page by Nayan Kumar-->
<!-- Coded by Nayan Kumar-->
<?php 
    require 'common.php'; 
    echo($_SESSION['email']);
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
                    <h4>New Account Registration</h4>
                </div>
                <div class="panel-body">
                <p class="text-warning">Sign up for Shopping</p>
                <form method="POST" action="signup_script.php">
                    <div class="form-group">
                        <label for="name">Name</label>
                        <input type="text" class="form-control" name="name" placeholder="Your Name" pattern="[A-Za-z0-9]{1,20}" title="cant be empty">
                    </div>
                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" class="form-control" name="email" placeholder="Enter your email" title="Hint: rajkr@gmail.com" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2, 3}$">
                    </div>
                    <div class="form-group">
                        <label for="pass"> Password </label>
                            <input type="password" class="form-control" name="pass" placeholder="Enter your password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{3,}" title="Hint: 1aB">
                    </div>
                    <div class="form-group">
                            <label for="cntNo">Contact Number</label>
                            <input type="text" class="form-control" name="cntNo" placeholder="Your contact number" pattern="[7-9]{1}[0-9]{9}" title="Hint: 9110935564">
                    </div>
                    <div class="form-group">
                            <label for="city">City</label>
                            <input type="text" class="form-control" name="city" placeholder="Your City" pattern="[A-Za-z0-9]{1,20}" title="cant be empty">
                    </div>
                    <div class="form-group">
                            <label for="addr">Address</label>
                            <input type="text" class="form-control" name="addr" placeholder="Your Address" pattern="[A-Za-z0-9]{1,20}" title="cant be empty">
                    </div>
                    <center><input type="submit" class="btn btn-primary" value="Submit"></center>
                </form>
            </div>
            <div class="panel-footer"><center><a href="login.php">Already having Account?</a></center></div>
    </div>
    </div>
   <?php include 'footer.php';?>
</body>
</html>
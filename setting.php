<!-- Coded by Nayan Kumar-->
<!-- setting.html-->
<?php
    require 'common.php';
    if(!isset($_SESSION['email']))
    {
        header('location: index.php');
    } 
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Bootstrap By Nayan Kumar</title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
    </head>
<body>
    <?php include 'header.php';?>
    <pre>
        
    </pre>
    <div class="container">
        <div class="panel panel-primary">
            <div class="panel-heading">
                <h4> Reset your Password</h4>
            </div>
            <div class="panel-body">
                <p class="text-warning">Change your Password</p>
                <form method="POST" action="setting_script.php">
                    <div class="form-group">
                        <label for="oldPass">Old Password</label>
                        <input type="password" class="form-control" name="oldPass" placeholder="Enter your Old password">
                    </div>
                    <div class="form-group">
                        <label for="newPass1"> New Password</label>
                        <input type="password" class="form-control" name="newPass1" placeholder="Enter your password">
                    </div>
                    <div class="form-group">
                        <label for="newPass2"> Confirm Password</label>
                        <input type="password" class="form-control" name="newPass2" placeholder="Re-Enter your password">
                    </div>
                    <input type="submit" class="btn btn-success" value ="Change It">
                </form>
            </div>
            <div class="panel-footer"><a href="signup.php">Happy Shopping</a></div>
        </div>
    </div>
    <?php include 'footer.php';?>  
</body>
</html>
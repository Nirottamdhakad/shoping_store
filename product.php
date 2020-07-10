<!-- Coded by Nayan Kumar-->
<!-- Product.html-->
<?php 
    require 'common.php'; 
?>
<!DOCTYPE html>
<html>
    <head>
        <title> Bootstrap By Nayan Kumar</title>
        <meta name="viewport" content="width=device-width, initial-scale=1"> 
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <!-- Jquery-->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script> 
        <script type="text/javascript">
            function myFun() 
            {
                var x = document.getElementById('chng');
                x.innerHTML = "Added to cart";
                x.classList.toggle('disabled');
                x.style.color = "white";
            }
        </script>
    </head>
<body>
    <?php require 'header.php';?>
    <?php require 'check_if_added_to_cart.php';?>
    <pre>
        
    </pre>
    <div class="container">
        <div class="jumbotron">
            <h1>Welcome to the Lifestyle store!</h1>
            <p>We have the best cameras, watches and shirts for you. No need to hunt around, we have all in one place.</p>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h3 class="text-center">Cameras</h3>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="5.jpg" alt="camera1">
                    <div class="caption">
                        <h4 align="center">Canon EOS</h4>
                        <p align="center">₹ 36000</p>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { 
                        ?>
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p>
                        <?php
                        } 
                        else 
                        {
                            if (check_if_added_to_crt(1)) {
                        ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php
                        }
                            else { 
                        ?>
                            <a href="itms_added_to_cart.php?id=1" class="btn btn-block btn-primary" onclick="myFun()" id="chng">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="2.jpg" alt="camera3">
                    <div class="caption">
                        <h4 align="center">Nikon DSLR</h4>
                        <p align="center">₹ 40000</p>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { 
                        ?>
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p>
                        <?php
                        } 
                        else 
                        {
                            if (check_if_added_to_crt(2)) {
                        ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php
                        }
                            else { 
                        ?>
                            <a href="itms_added_to_cart.php?id=2" class="btn btn-block btn-primary" onclick="myFun()" id="chng">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="3.jpg" alt="camera3">
                    <div class="caption">
                        <h4 align="center">Sony DSLR D530</h4>
                        <p align="center">₹ 45000</p>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { 
                        ?>
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p>
                        <?php
                        } 
                        else 
                        {
                            if (check_if_added_to_crt(3)) {
                        ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php
                        }
                            else { 
                        ?>
                            <a href="itms_added_to_cart.php?id=3" class="btn btn-block btn-primary" onclick="myFun()" id="chng">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                     </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="3.jpg" alt="camera3">
                    <div class="caption">
                        <h4 align="center">Sony DSLR D530</h4>
                        <p align="center">₹ 50000</p>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { 
                        ?>
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p>
                        <?php
                        } 
                        else 
                        {
                            if (check_if_added_to_crt(4)) {
                        ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php
                        }
                            else { 
                        ?>
                            <a href="itms_added_to_cart.php?id=4" class="btn btn-block btn-primary" onclick="myFun()" id="chng">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                     </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h3 class="text-center">Watches</h3>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="9.jpg" alt="watch9">
                    <div class="caption">
                        <h4 align="center">Titian Pure+</h4>
                        <p align="center">₹ 16500</p>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { 
                        ?>
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p>
                        <?php
                        } 
                        else 
                        {
                            if (check_if_added_to_crt(5)) {
                        ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php
                        }
                            else { 
                        ?>
                            <a href="itms_added_to_cart.php?id=5" class="btn btn-block btn-primary" onclick="myFun()" id="chng">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </div>  
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="10.jpg" alt="watch10">
                    <div class="caption">
                        <h4 align="center">Fastrack multi Plus</h4>
                        <p align="center">₹ 7630</p>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { 
                        ?>
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p>
                        <?php
                        } 
                        else 
                        {
                            if (check_if_added_to_crt(6)) {
                        ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php
                        }
                            else { 
                        ?>
                            <a href="itms_added_to_cart.php?id=6" class="btn btn-block btn-primary" onclick="myFun()" id="chng">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="11.jpg" alt="watch11">
                    <div class="caption">
                        <h4 align="center">Eminance Luke watch</h4>
                        <p align="center">₹ 5100</p>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { 
                        ?>
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p>
                        <?php
                        } 
                        else 
                        {
                            if (check_if_added_to_crt(7)) {
                        ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php
                        }
                            else { 
                        ?>
                            <a href="itms_added_to_cart.php?id=7" class="btn btn-block btn-primary" onclick="myFun()" id="chng">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </div>  
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="12.jpg" alt="watch12">
                    <div class="caption">
                        <h4 align="center">Titian R898</h4>
                        <p align="center">₹ 9990</p>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { 
                        ?>
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p>
                        <?php
                        } 
                        else 
                        {
                            if (check_if_added_to_crt(8)) {
                        ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php
                        }
                            else { 
                        ?>
                            <a href="itms_added_to_cart.php?id=8" class="btn btn-block btn-primary" onclick="myFun()" id="chng">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </div> 
        </div>
    </div>
    <div class="container">
        <div class="row">
            <h3 class="text-center">T shirts</h3>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="8.jpg" alt="shirt6">
                    <div class="caption">
                        <h4 align="center">H&W</h4>
                        <p align="center">₹ 800</p>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { 
                        ?>
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p>
                        <?php
                        } 
                        else 
                        {
                            if (check_if_added_to_crt(9)) {
                        ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php
                        }
                            else { 
                        ?>
                            <a href="itms_added_to_cart.php?id=9" class="btn btn-block btn-primary" onclick="myFun()" id="chng">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="6.jpg" alt="shirt8">
                    <div class="caption">
                        <h4 align="center">Luis Phil</h4>
                        <p align="center">₹ 1000</p>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { 
                        ?>
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p>
                        <?php
                        } 
                        else 
                        {
                            if (check_if_added_to_crt(10)) {
                        ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php
                        }
                            else { 
                        ?>
                            <a href="itms_added_to_cart.php?id=10" class="btn btn-block btn-primary" onclick="myFun()" id="chng">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                        </center>
                    </div>
                </div>
            </div>  
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="13.jpg" alt="shirt13">
                    <div class="caption">
                        <h4 align="center">John Zok</h4>
                        <p align="center">₹ 1500</p>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { 
                        ?>
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p>
                        <?php
                        } 
                        else 
                        {
                            if (check_if_added_to_crt(11)) {
                        ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php
                        }
                            else { 
                        ?>
                            <a href="itms_added_to_cart.php?id=11" class="btn btn-block btn-primary" onclick="myFun()" id="chng">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6">
                <div class="thumbnail">
                    <img src="14.jpg" alt="shirt14">
                    <div class="caption">
                        <h4 align="center">Jhalsani</h4>
                        <p align="center">₹ 1300</p>
                        <?php 
                        if (!isset($_SESSION['email'])) 
                        { 
                        ?>
                        <p>
                            <a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
                        </p>
                        <?php
                        } 
                        else 
                        {
                            if (check_if_added_to_crt(12)) {
                        ?>
                             <a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>
                        <?php
                        }
                            else { 
                        ?>
                            <a href="itms_added_to_cart.php?id=12" class="btn btn-block btn-primary" onclick="myFun()" id="chng">Add to cart</a>
                        <?php
                        }
                        }
                        ?>
                        </center>
                    </div>
                </div>
            </div>  
        </div>
    </div>
    <footer style="color: #C0C0C0; padding-top: 10px; background-color: black;">
        <div class="container">
            <center><p>Copyright &copy; Lifestyle Store. All Rights Reserved | Contact Us: +91 9110935568 | owned by Aryan Kumar</p></center>
        </div>
    </footer>
</body>
</html>
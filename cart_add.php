<!-- Coded by Nayan Kumar-->
<!-- Product.html-->
<?php 
    require 'common.php'; 
    if(!isset($_SESSION['email']))
    {
        header('location: login.php');
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
    <?php include 'header.php';?>
    <pre>
        
    </pre>
    <div class="container">
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Product Name</th>
                    <th>Remove</th>
                    <th>Product Id</th>
                    <th>Price(₹)</th>
                </tr>
            </thead>
            <tbody>
                    <?php
                        $user_id=$_SESSION['id'];
                        $selQry="select items.name, items.pid , items.price from items inner join users_items where items.pid = users_items.item_id and users_items.user_id = '$user_id' and status = 'added to cart';";
                        $selQryReslt=mysqli_query($con,$selQry) or die(mysqli_error($con));
                        if(!mysqli_num_rows($selQryReslt))
                        {
                            header('location: emptyCart.php');
                        }
                        else
                        {
                            $ttlPrice = 0;
                            $cnt = 0;
                            while($row = mysqli_fetch_array($selQryReslt))
                            {
                                $ttlPrice = $ttlPrice+$row['price'];
                                $cnt = $cnt+1;
                    ?>
                                <tr>
                                    <td>
                                        <?php echo $row['name'];?>
                                    </td>
                                    <td><a href="cart_remove.php?id=<?php echo $row['pid'];?>">Remove</a></td>
                                    <td><?php echo $row['pid'];?></td>
                                    <td><?php echo $row['price'];?></td>            
                                </tr>
                    <?php
                            }
                    ?>          <tr>
                                    <td>Total Items: <?php echo($cnt); ?></td>
                                    <td><a href="cart_remove.php?id=0" class="remove_item_link">Remove all</a></td>
                                    <td>Total(₹)</td>
                                    <td><?php echo($ttlPrice); ?></td>
                                </tr>
                    <?php
                        }
                    ?>
                <tr>
                </tr>
            </tbody>
        </table>
        <center><a href="success.php"><button class="btn btn-primary">Confirm Order</button></a></center>
    </div>
        <?php  include 'footer.php'; ?> 
</body>
</html>
<?php
 	function add_itm($item_id)
 	{
 		//echo gettype($item_id);
 		//echo($item_id);
		require 'common.php';
 		$user_id = $_SESSION['id'];
        $insrtQry  = "insert into users_items(user_id,item_id,status) values($user_id, $item_id, 'Added to cart');";
        $insrtQryRes = mysqli_query($con,$insrtQry) or die(mysqli_error($con));
        header('location: product.php');
 	}
 	add_itm($_GET['id']);					                       
?>
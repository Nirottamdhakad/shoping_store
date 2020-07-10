<?php
	function remove_cart($item_id)
	{
		require 'common.php';
		$user_id=$_SESSION['id'];
		if($item_id)
		{
			$selQry = "delete from users_items where item_id = '$item_id' and user_id = '$user_id';";
		}
		else
		{
			$selQry = "delete from users_items where user_id = '$user_id';";
		}
		$selQryRes = mysqli_query($con, $selQry) or die(mysqli_error($con));
		header('location: cart_add.php');
	}
	remove_cart($_GET['id']);
?>
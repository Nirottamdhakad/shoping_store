<?php
	function check_if_added_to_crt($item_id)
	{
		$user_id=$_SESSION['id'];
		//echo $user_id;
		require 'common.php';
		//$con = mysqli_connect("localhost","root","root@123","store") or die(mysqli_error($con));
		$selQry = "select * from users_items where item_id='$item_id' and user_id='$user_id' and status='added to cart';";
		$selQryRes = mysqli_query($con,$selQry) or die(mysqli_error($con));
		$row = mysqli_fetch_array($selQryRes);
		if(mysqli_num_rows($selQryRes)>0)
			return 1;
		else 
			return 0;
	}
?>
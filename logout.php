<?php
	session_start();
	if(!isset($_SESSION['email']))
	{
		header('location: index.php');	
	}
	session_unset();   // to destroy the session variables eg. email,id;
	session_destroy();
	header('location: index.php');
?>
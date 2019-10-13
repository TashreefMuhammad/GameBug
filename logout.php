<?php
	session_start();
if(isset($_SESSION['user_id'])){

	session_destroy();
	unset($_SESSION['username']);
	unset($_SESSION['message']);
	unset($_SESSION['email']);
	unset($_SESSION['user_id']);
	unset($_SESSION['phone']);
	$_SESSION['status'] = 0; 
	unset($_SESSION['status']);

	header("location: homepage.php");
} else{
	header("location: login.php");
}

?>
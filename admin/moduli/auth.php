<?php
	session_start();
	if(!isset($_SESSION['username'])){
		echo 'Zabranjen pristup';
		header("Location: login.php");
		die();
}
?>
<?php
	session_start();
	if (isset($_SESSION['user'])) {
		session_destroy();
		header('location: indexxx.php');
		die();
	}
	else{
		session_destroy();
		header('location: indexxx.php');
		die();
	}
?>
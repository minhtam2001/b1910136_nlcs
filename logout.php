<?php
	session_start();
	if (isset($_SESSION['admin'])) {
		session_destroy();
		header('location: Admin/admin.php');
		die();
	}
	else{
		session_destroy();
		header('location: indexxx.php');
		die();
	}
?>
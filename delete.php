<?php
session_start();
if (isset($_GET['delete'])) {
	$id=$_GET['delete'];
	unset($_SESSION['cart'][$id]);
	header("location: viewxulymuahang.php");
}
  ?>
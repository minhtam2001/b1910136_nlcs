<?php 
include 'connect.php';
session_start();
$cart = $_SESSION['cart'];
if (isset($_POST['sm'])) {
	$sdh = rand(0,999999);
    $mskh = $_POST['mskh'];
		$ngayd = date('Y-m-d');
		$ngayg = date('Y-m-d',strtotime(' + 4 day'));
		$order = mysqli_query($conn,"INSERT INTO Dat_Hang VALUES ($sdh,'$mskh','002','$ngayd','$ngayg') ");

		if ($order) {
			$id = mysqli_insert_id($conn);
			foreach ($cart as $value) {
				mysqli_query($conn,"INSERT INTO CT_Dat_Hang VALUES ('$sdh','$value[id]','$value[quantity]','$value[price]',0)");
			}
		}

	}
	unset($_SESSION['cart']);
		header('location: viewxulymuahang.php');
 ?>

<?php
	session_start();
	require_once('connect.php');

	if (isset($_POST['sm'])) {
		$username = $_POST['dt'];
		$password = $_POST['mk'];
		//khách hàng
		$sql = "SELECT * FROM Khach_Hang WHERE Sodienthoai = '$username' AND Matkhau = '$password' ";
		$query = mysqli_query($conn,$sql);
		//admin
		$ad = "SELECT * FROM Nhan_Vien WHERE Sodienthoai = '$username' AND Matkhau = '$password' ";
		$admin = mysqli_query($conn,$ad);

		if(mysqli_num_rows($query)){
			$_SESSION['user'] = $username;
			header("location: indexxx.php");
			die();
		}
		elseif (mysqli_num_rows($admin)) {
			$_SESSION['admin'] = $username;
			header("location: Admin/admin.php");
			die();
		}
		else{

			echo 'Tài khoản hoặc mật khẩu chưa chính xác<br><a href="login.php">Quay lại</a> ';
		}
	}

	if (isset($_POST['dk'])) {
		$mskh = $_POST['mskh'];
		$ten = $_POST['ten'];
		$dc = $_POST['dc'];
		$sdt = $_POST['sdt'];
		$matkhau = $_POST['matkhau'];
		$cfmatkhau = $_POST['cfmatkhau'];

		$sql1 = "SELECT * FROM Khach_Hang WHERE Sodienthoai = '$sdt' ";
		$query1 = mysqli_query($conn,$sql1);
		if(mysqli_num_rows($query1) > 0){
			echo 'Tài khoản đã tồn tại<br><a href="login.php">Quay lại</a> ';	
		} else if($matkhau != $cfmatkhau){
			echo 'Mật khẩu không khớp<br><a href="login.php">Quay lại</a> ';
		}
		else {
			$sql2 = "INSERT INTO Khach_Hang VALUES ('$mskh','$ten','$dc','$sdt','$matkhau')";

			mysqli_query($conn,$sql2);
			echo 'Đăng ký thành công<br><a href="login.php">Quay lại</a> ';
		}

	}

?>
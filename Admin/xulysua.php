<?php 
include '../connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM San_Pham WHERE ma_sp = '$id'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
if (isset($_POST['capnhat'])) {
	$ms = $_POST['ms'];
	$ten = $_POST['ten'];
	$qc = $_POST['quycach'];
	$gia = $_POST['gia'];
	$sl = $_POST['sluong'];
	$lh = $_POST['malh'];
	// $gc = $_POST['ghichu'];
	if ($_FILES['anh']['name']=='') {
		$img = $row['anh'];
		
	}else{
		$img = $_FILES['anh']['name'];
		$img_tmp = $_FILES['anh']['tmp_name'];
		move_uploaded_file($img_tmp, '../img/sanpham/'.$img);
	}
	$sql_up = "UPDATE San_Pham SET ma_sp = '$ms',ten_sp = '$ten', noi_dung = '$qc', soluong = '$sl', gia = '$gia', soluong = '$sl', ma_TH = '$lh', anh = '$img'
	 WHERE ma_sp ='$id'";
	mysqli_query($conn,$sql_up);
	header('Location: admin.php');
}
 ?>
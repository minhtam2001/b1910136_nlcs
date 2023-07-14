<?php 
include '../connect.php';
$id = $_GET['id'];
$sql = "SELECT * FROM Nhan_Vien WHERE MSNV = '$id'";
$query = mysqli_query($conn,$sql);
$row = mysqli_fetch_array($query);
if (isset($_POST['update'])) {
	$ms = $_POST['ms'];
	$ten = $_POST['ten'];
	$chucvu = $_POST['chucvu'];
	$diachi = $_POST['diachi'];
	$sdt = $_POST['sdt'];
	$matkhau = $_POST['mk'];
	$sql_up = "UPDATE Nhan_Vien SET MSNV = '$ms',HotenNV = '$ten', Chucvu = '$chucvu', Diachi = '$diachi', Sodienthoai = '$sdt', Matkhau = '$matkhau' WHERE MSNV ='$id'";
	mysqli_query($conn,$sql_up);
	header('Location: viewnhanvien.php');
}
 ?>
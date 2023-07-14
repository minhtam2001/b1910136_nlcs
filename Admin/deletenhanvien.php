<?php
include '../connect.php'; 
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$delete="DELETE FROM Nhan_Vien WHERE MSNV='$id'";
	mysqli_query($conn,$delete);
	header("location: viewnhanvien.php");

}
 ?>

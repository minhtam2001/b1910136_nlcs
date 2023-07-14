<?php
include '../connect.php'; 
if (isset($_GET['id'])) {
	$id=$_GET['id'];
	$sql="DELETE FROM CT_Dat_Hang WHERE ma_sp='$id' ";
	mysqli_query($conn,$sql);
	$delete="DELETE FROM San_Pham WHERE ma_sp='$id'";
	mysqli_query($conn,$delete);
	header("location: admin.php");

}
 ?>

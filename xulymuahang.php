<?php 
session_start();
include 'connect.php';
 if(isset($_GET['id'])){
 	$id = $_GET['id'];
	$sql = "SELECT * FROM San_Pham WHERE ma_sp = '$id'";
 }
$query = mysqli_query($conn,$sql);
$product = mysqli_fetch_array($query);

echo $product['ten_sp'];


 $item = [
 	'id'=>$product['ma_sp'],
 	'name'=>$product['ten_sp'],
 	'image'=>$product['anh'],
 	'price'=>$product['gia'],
 	'quantity'=>1
 ];
 if (isset($_SESSION['cart'][$id])) {
 		$_SESSION['cart'][$id]['quantity']+=1;
 }
 else{
 	$_SESSION['cart'][$id]=$item;
 }
 if(isset($_GET['update'])){
 	$_SESSION['cart'][$id]['quantity'] = $_GET['quantity'];
 }
 if ($_SESSION['cart'][$id]['quantity']<0) {
 	 $_SESSION['cart'][$id]['quantity'] =1;
 }

 header('location: viewxulymuahang.php');
 echo "<pre>";
 print_r($_SESSION['cart']);
 ?>
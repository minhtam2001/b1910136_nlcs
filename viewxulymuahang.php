<?php
	include 'connect.php';
	session_start();
	$cart = (isset($_SESSION['cart']))? $_SESSION['cart']:[]; 
	if (!isset($_SESSION['user'])) {
		header('location: login.php');
		die();
	}
		$user = $_SESSION['user'];
		$sql = "SELECT * FROM Khach_Hang WHERE SoDienThoai = '$user'";
		$query=mysqli_query($conn,$sql);
		$row = mysqli_fetch_array($query);
	 ?>
<!DOCTYPE html>
<html>
<head>
	<title>TNT | Store</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="krt.css">
	
</head>
<body>
<div class="container">
 	<div class="row">
 		<div class="col-md-2"></div>
 		<div class="col-md-10">
 			<div class="panel panel-info">
 				<div class="panel-body">
 					<table class ="table table-bordered table-hover">
 						<thead>
 							<tr>
 								<th style="text-align: center">STT</th>
 								<th style="text-align: center">Ảnh Sản Phẩm</th>
 								<th style="text-align: center">Tên Sản Phẩm</th>
 								<th style="text-align: center">Số Lượng</th>
 								<th style="text-align: center">Đơn Giá</th>
 								<th style="text-align: center">Thành Tiền</th>
 								<th></th>
 							</tr>
 						</thead>
 						<tbody>
 							<?php $total_price = 0;  ?>
 							<?php foreach ($cart as $key => $value): 
 								$total_price +=(($value['quantity'] *$value['price']));
 								?>

 							<tr>
 								<td> <?php echo $key ++ ?></td>
 								<td><img src="img/sanpham/<?php echo $value['image'] ?>" height ="100px"></td>
 								<td><?php echo $value['name']  ?></td>
 								<td><form action="xulymuahang.php" method="get">
 									<input type="hidden" name="id" value="<?php echo $value['id']?>">
 									<input type="text" name="quantity" value="<?php echo $value['quantity']  ?>" style = "width: 50px">
 									<button type="submit" name="update">Cập Nhật</button></form>
 								</td>
 								<td><?php echo number_format($value['price'] )  ?></td>
 								<td><?php echo number_format($value['quantity'] *$value['price'])  ?></td>
 								<td><a href="delete.php?delete=<?php echo $value['id']?>"  class="btn btn-danger" style="text-align: center">Xóa</a></td>
 							</tr>
 							<?php endforeach ?>
 							<tr>
 								<td style="text-align: center"><b>Tổng Tiền</b></td>
 								<td colspan="6" class="text-center"><?php echo number_format($total_price) ?>VND</td>
 							</tr>
 							
 						</tbody>
 						
 					</table>
 					
 				</div>
 				
 			<div class="panel panel-info">
 				<div class="panel-heading">
 					<h3 class="panel-title" style="text-align: center">Thông Tin Chi Tiết Đặt Hàng</h3>
 					<div style="width: 25rem; margin: 0 auto; margin-top: 20px">
 						<form action="Insert.php" method="post">
 							<div class="mb-3">
 								<label for="exampleInputEmail1" class="form-label"><b>Mã Số Khách Hàng</b></label>
 								<input type="text" class="form-control form-control-sm" value="<?=$row ['MSKH']?>" name="mskh">
 							</div>
 							<div class="mb-3">
 								<label for="exampleInputPassword1" class="form-label"><b>Họ Tên Khách Hàng</b></label>
 								<input type="text" class="form-control form-control-sm" value="<?=$row ['HoTenKH']?>"name="ht">
 							</div>
 							<div class="mb-3">
 								<label for="exampleInputPassword1" class="form-label"><b>Địa Chỉ Khách Hàng</b></label>
 								<input type="text" class="form-control form-control-sm" value="<?=$row ['DiaChi']?>" name="dc">
 							</div>
 							<div class="mb-3">
 								<label for="exampleInputPassword1" class="form-label"><b>Số Điện Thoại</b></label>
 								<input type="text" class="form-control form-control-sm" value="<?=$row ['SoDienThoai']?>" name="dt">
 							</div>
 							<div class="mb-3 form-check">
 								<input type="checkbox" class="form-check-input" id="exampleCheck1">
 								<label class="form-check-label" for="exampleCheck1"><b>Đồng Ý Mua Hàng</b></label>
 							</div>
 							<button type="submit" class="btn btn-primary" name="sm"><b>Đặt Hàng</b></button>
 							<button class="btn btn-primary"><a href="indexxx.php" class="text-light text-decoration-none fw-bold">Tiếp Tục Mua Hàng</a></button>
 						</form>
 						
 					</div>
 				</div>
 				<div class="panel-body deess">
 					
 				</div>
 				
 			</div>
 		</div>
 	</div>
 </div>
</body>
</html>

 
<?php 
include '../connect.php';
$sql="SELECT * FROM San_Pham ";
$query=mysqli_query($conn,$sql);
if (isset($_POST['them'])) {
	$mshh = $_POST['ms'];
	$tenhh = $_POST['ten'];
	$quycach = $_POST['quycach'];
	$gia = $_POST['gia'];
	$sluong = $_POST['sluong'];
	$loai = $_POST['malh'];
	$img = $_FILES['anh']['name'];
	$img_tmp = $_FILES['anh']['tmp_name'];
  $sql = "INSERT INTO San_Pham VALUES ('$mshh' , '$tenhh' , '$quycach' , $gia , $sluong , '$loai' , '$img')" ;
	mysqli_query($conn,$sql);
	move_uploaded_file($img_tmp,'../../img/sanpham/'.$img);
	header('Location: admin.php');
}
 ?>

<!DOCTYPE html>
<html>
<head>
	<title>TNT | Store</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="../bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../bootstrap/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="../krt.css">
</head>
<body>
<div style="width: 25rem; margin: 0 auto; margin-top: 20px">
<form action="themsp.php" method="post" enctype="multipart/form-data">
    <legend><b>Thêm Sản Phẩm</b></legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Mã Sản Phẩm</b></label>
      <input type="text"  class="form-control form-control-sm" name="ms">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label"><b>Tên Sản Phẩm</b></label>
      <input type="text" class="form-control form-control-sm" name="ten"></input>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Hình Ảnh</b></label>
      <input type="file"  class="form-control form-control-sm" name="anh" >
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Thông Tin Sản Phẩm</b></label>
      <input type="text"  class="form-control form-control-sm" name="quycach">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Giá Bán</b></label>
      <input type="text"  class="form-control form-control-sm" name="gia">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Số Lượng</b></label>
      <input type="text" class="form-control form-control-sm" name="sluong">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Mã Thương Hiệu</b></label>
      <input type="text"  class="form-control form-control-sm" name="malh">
    </div>
    <button type="submit" class="btn btn-primary" name="them"><b>Thêm Sản Phẩm</b></button>
    <a href="admin.php"class="btn btn-primary" name="them"><b>Quay Lại Trang Chủ</b></a>
</form>
</div>
</body>
</html>


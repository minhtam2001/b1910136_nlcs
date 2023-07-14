<?php 
include '../connect.php';
$sql="SELECT * FROM Nhan_Vien";
$query=mysqli_query($conn,$sql);
if (isset($_POST['insert'])) {
	$msnv = $_POST['ms'];
	$tennv = $_POST['ten'];
  $chucvu = $_POST['chucvu'];
	$diachi = $_POST['diachi'];
	$sdt = $_POST['sdt'];
	$matkhau = $_POST['mk'];
	$sql1 = "INSERT INTO Nhan_Vien VALUES ('$msnv','$tennv','$chucvu','$diachi','$sdt','$matkhau')";
	mysqli_query($conn,$sql1);
	header('Location: viewnhanvien.php');
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
<form action="themnhanvien.php" method="post" enctype="multipart/form-data">
    <legend><b>Thêm Nhân Viên</b></legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Mã Số Nhân Viên</b></label>
      <input type="text"  class="form-control form-control-sm" name="ms">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label"><b>Tên Nhân Viên</b></label>
      <input type="text" class="form-control form-control-sm" name="ten"></input>
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Chức Vụ</b></label>
      <input type="text"  class="form-control form-control-sm" name="chucvu">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Địa Chỉ</b></label>
      <input type="text"  class="form-control form-control-sm" name="diachi">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Số Điện Thoại</b></label>
      <input type="text"  class="form-control form-control-sm" name="sdt">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Mật Khẩu Đăng Nhập</b></label>
      <input type="text" class="form-control form-control-sm" name="mk">
    </div>
    <button type="submit" class="btn btn-primary" name="insert"><b>Thêm Nhân Viên</b></button>
</form>
</div>
</body>
</html>
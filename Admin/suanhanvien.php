<?php 
include '../connect.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM Nhan_Vien WHERE MSNV = '$id'";
	$query=mysqli_query($conn,$sql);
	$row = mysqli_fetch_array($query);
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
<form action="xulysuanhanvien.php?id=<?= $row['MSNV'] ?>" method="post" enctype="multipart/form-data" >
    <legend><b>Thêm Nhân Viên</b></legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Mã Số Nhân Viên</b></label>
      <input type="text"  class="form-control form-control-sm" name="ms" value="<?=$row['MSNV'] ?>">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label"><b>Tên Nhân Viên</b></label>
      <input type="text" class="form-control form-control-sm" name="ten" value="<?=$row['HotenNV'] ?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Chức Vụ</b></label>
      <input type="text"  class="form-control form-control-sm" name="chucvu" value="<?=$row['Chucvu'] ?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Địa Chỉ</b></label>
      <input type="text"  class="form-control form-control-sm" name="diachi" value="<?=$row['Diachi'] ?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Số Điện Thoại</b></label>
      <input type="text" class="form-control form-control-sm" name="sdt" value="<?=$row['Sodienthoai'] ?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Mật Khẩu</b></label>
      <input type="text"  class="form-control form-control-sm" name="mk" value="<?=$row['Matkhau'] ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="update"><b>Cập Nhật</b></button>
</form>
</div>
</body>
</html>
<?php 
include '../connect.php';
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	$sql = "SELECT * FROM San_Pham WHERE ma_sp = '$id'";
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
<form action="xulysua.php?id=<?= $row['ma_sp'] ?>" method="post" enctype="multipart/form-data" >
    <legend><b>Thêm Sản Phẩm</b></legend>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>MSHH</b></label>
      <input type="text"  class="form-control form-control-sm" name="ms" value="<?=$row['ma_sp'] ?>">
    </div>
    <div class="mb-3">
      <label for="disabledSelect" class="form-label"><b>Tên Hàng Hóa</b></label>
      <input type="text" class="form-control form-control-sm" name="ten" value="<?=$row['ten_sp'] ?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Hình Ảnh</b></label>
      <input type="file"  class="form-control form-control-sm" name="anh" >
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Thông Tin Sản Phẩm</b></label>
      <input type="text"  class="form-control form-control-sm" name="quycach" value="<?=$row['noi_dung'] ?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Giá Bán</b></label>
      <input type="text"  class="form-control form-control-sm" name="gia" value="<?=$row['gia'] ?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Số Lượng</b></label>
      <input type="text" class="form-control form-control-sm" name="sluong" value="<?=$row['soluong'] ?>">
    </div>
    <div class="mb-3">
      <label for="disabledTextInput" class="form-label"><b>Mã Loại Hàng</b></label>
      <input type="text"  class="form-control form-control-sm" name="malh" value="<?=$row['ma_TH'] ?>">
    </div>
    <button type="submit" class="btn btn-primary" name="capnhat"><b>Cập Nhật</b></button>
</form>
</div>
</body>
</html>
<?php 
include '../connect.php';
$sql="SELECT * FROM Khach_Hang ";
$query=mysqli_query($conn,$sql);

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
<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid " style="background-color: #00BFFF ">
			<a class="navbar-brand" href="#"><img id="logo" src="../img/logo.png"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse  " id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link text-light active"  aria-current st="page" href="admin.php"><i class="fas fa-tasks"></i>&nbsp;Quản Lý Sản Phẩm</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light active" aria-current="page" href="themsp.php"><i class="fas fa-cart-plus"></i>&nbsp;Thêm Sản Phẩm</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light active" aria-current="page" href="#"><i class="fas fa-users"></i>&nbsp;Danh Sách Khách Hàng</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light active" aria-current="page" href="viewnhanvien.php"><i class="fas fa-user"></i>&nbsp;Danh Sách Nhân Viên</a>         
					</li>
					
				</ul>
			</div>
		</div>
	</nav>
	<table class="table" >
  <thead>
    <tr>
      <th scope="col" width="5%">MSKH</th>
      <th scope="col" width="15%">Họ Tên Khách Hàng</th>
      <th scope="col" width="20%">Địa Chỉ Giao Hàng</th>
      <th scope="col" width="10%">Số Điện Thoại</th>
      <th scope="col" width="15%">Mật Khẩu</th>



    </tr>
  </thead>
  <tbody>
  	<?php
  	while ( $row = mysqli_fetch_array($query)) { ?>
  		<tr>
      <th scope="row"><?= $row['MSKH'] ?></th>
      <td><?= $row['HoTenKH'] ?></td>
      <td><?= $row['DiaChi'] ?></td>
      <td><?= $row['SoDienThoai'] ?></td>
      <td><?= $row['MatKhau'] ?></td>
    </tr>
  <?php	}
  	  ?>
    
  </tbody>
</table>
</body>
</html>
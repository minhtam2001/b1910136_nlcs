<?php 
include '../connect.php';
$sql="SELECT * FROM San_Pham ";
$query=mysqli_query($conn,$sql);
session_start();
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
<nav class="navbar navbar-expand-lg navbar-light bg-info">
		<div class="container-fluid ">
			<a class="navbar-brand" href="#"><img id="logo" src="../img/logo.png"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<div class="collapse navbar-collapse  " id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0">
					<li class="nav-item">
						<a class="nav-link text-light" href="#"><i class="fas fa-tasks"></i>&nbsp;Quản Lý Sản Phẩm</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light" href="themsp.php"><i class="fas fa-cart-plus"></i>&nbsp;Thêm Sản Phẩm</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light"  href="viewkhachhang.php"><i class="fas fa-users"></i>&nbsp;Danh Sách Khách Hàng</a>
					</li>
					<li class="nav-item">
						<a class="nav-link text-light"  href="viewnhanvien.php"><i class="fas fa-user"></i>&nbsp;Danh Sách Nhân Viên</a>         
					</li>
					
				</ul>
				<div class=" d-flex flex-row-reverse" style="height: 35px">
					<?php if (isset($_SESSION['admin'])) {
                        $admin = $_SESSION['admin'];
                        echo '<div class="dropdown">';
                        echo '<a class="btn btn-info btn-outline-light fw-bold dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">'.$admin.'</a>';
                        echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                        echo '<li><a class="dropdown-item" href="../logout.php">Đăng xuất</a></li>';
                        echo '</ul>';
                        echo '</div>';
                        } else{?>
					<a href="../login.php" class="btn btn-outline-light btn-sm float-sm-right fw-bold" style="line-height:25px">ĐĂNG NHẬP</a>
					<?php } ?>
				</div>
			</div>
		</div>
	</nav>
	<table class="table" >
  <thead>
    <tr>
      <th scope="col" width="10%">Mã Sản Phẩm</th>
      <th scope="col" width="10%">Tên Sản Phẩm</th>
      <th scope="col" width="20%">Hình Ảnh</th>
      <th scope="col" width="20%">Thông Tin Sản Phẩm</th>
      <th scope="col" width="10%">Giá Bán</th>
      <th scope="col" width="10%">Số Lượng</th>
      <th scope="col" width="10%">Mã Thương Hiệu</th>
      <th scope="col" width="5%">Sửa</th>
      <th scope="col" width="5%">Xóa</th>



    </tr>
  </thead>
  <tbody>
  	<?php
  	while ( $row = mysqli_fetch_array($query)) { ?>
  		<tr>
      <th scope="row"><?= $row['ma_sp'] ?></th>
      <td><?= $row['ten_sp'] ?></td>
      <td><img height="100px" src="../img/sanpham/<?=$row['anh']?>"></td>
      <td><?= $row['noi_dung'] ?></td>
      <td><?= $row['gia'] ?></td>
      <td><?= $row['soluong'] ?></td>
      <td><?= $row['ma_TH'] ?></td>
      <td><a href="sua.php?id=<?= $row['ma_sp'] ?>"  class="btn btn-success"><i class="fas fa-edit"></i></a></td>
      <td><a href="deleteadmin.php?id=<?= $row['ma_sp'] ?>"  class="btn btn-danger"><i class="fas fa-trash-alt"></i></a></td>
      
    </tr>

  <?php	}
  	  ?>
    
  </tbody>
</table>
<script type="text/javascript" src="../bootstrap/jquery.js"></script>
<script type="text/javascript" src="../bootstrap/js/bootstrap.js"></script>
</body>
</html>
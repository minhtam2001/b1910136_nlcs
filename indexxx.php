<?php
include 'connect.php';
$sql="SELECT * FROM San_Pham ";
$query=mysqli_query($conn,$sql);
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>TNT | Store</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="bootstrap/fontawesome/css/all.css">
	<link rel="stylesheet" type="text/css" href="shop.css">
  <script src="bootstrap/js/bootstrap.bundle.js"></script>
</head>
<body>
	<nav class="navbar navbar-expand-lg navbar-light bg-light">
		<div class="container-fluid" style="background-color: #00BFFF">
			<a class="navbar-brand" href="#" style="width: 120px;"><img id="logo" src="img/logo.png"></a>
			<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			<form class="d-flex">
				<input class="form-control me-2" type="search" placeholder="Nhập tên sản phẩm" aria-label="Search">
				<button class="btn bg-light" type="submit"><i class="fas fa-search" style="color: gray"></i></button>
			</form>
			<div class="collapse navbar-collapse" id="navbarSupportedContent">
				<ul class="navbar-nav me-auto mb-2 mb-lg-0 navbar-nav-scroll" style="--bs-scroll-height: 100px;">
					<li class="nav-item">
						<a class="nav-link text-light active" aria-current="page" href="#"><i class="fas fa-home"></i> Trang chủ</a>
					</li>
				</ul>
        <?php
                    if (isset($_SESSION['user'])) {
                        $user = $_SESSION['user'];
                        $query_tk = mysqli_query($conn,"SELECT * FROM Khach_Hang WHERE Sodienthoai = '$user' ");
                        $row = mysqli_fetch_array($query_tk);
                            
                        echo '<div class="dropdown">';
                        echo '<a class="btn btn-info btn-outline-light fw-bold dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-bs-toggle="dropdown" aria-expanded="false">'.$row['SoDienThoai'].'</a>';
                        echo '<ul class="dropdown-menu" aria-labelledby="dropdownMenuLink">';
                        echo '<li><a class="dropdown-item" href="logouthome.php">Đăng xuất</a></li>';
                        echo '</ul>';
                        echo '</div>';
                        }
                        else {
                            echo'<a href="login.php" class="ml-1 btn btn-outline-light btn-sm float-sm-right fw-bold" style="line-height:30px">ĐĂNG NHẬP</a>'; 
                            echo'&nbsp&nbsp';
                            echo'<a href="register.php" class="ml-1 btn btn-outline-light btn-sm float-sm-right fw-bold" style="line-height:30px">ĐĂNG KÝ</a>'; 
                        }
                    ?>
				<div class="nav-item pe-lg-3 ms-1">
					<a href="viewxulymuahang.php" class="nav-link text-light active" ><i class="fas fa-shopping-cart"></i> Giỏ Hàng</a>
				</div>
			</div>
		</div>
	</nav>
	
	<div class="container">
	<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 4"></button>
    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="4" aria-label="Slide 5"></button>
  </div>
  <div class="carousel-inner" style="margin-top: 8px">
    <div class="carousel-item active">
      <img src="img/h1.png" class="d-block w-100" style="height: 275px " alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/h2.png" class="d-block w-100" style="height: 275px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/h3.png" class="d-block w-100" style="height: 275px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/h4.png" class="d-block w-100" style="height: 275px" alt="...">
    </div>
    <div class="carousel-item">
      <img src="img/h5.png" class="d-block w-100" style="height: 275px" alt="...">
    </div>
  </div>
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Previous</span>
  </button>
  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="visually-hidden">Next</span>
  </button>
</div>
</div>
<div class="container-fluid padding">
	<div class="row welcome text-center">
		<div class="col-12">
			<h1 class="display-5" style="font-weight: bold">Sản Phẩm Tại Cửa Hàng</h1>
			<div class= "container-fluid">
   <div class= "row">
   	<?php 
   		while ( $row = mysqli_fetch_array($query)) {?>
			<div class ="col-12 col-sm-6 col-md-4 border">
         	<img height="200px" src="img/sanpham/<?=$row['anh']?>">
         	<h5><?=$row['ten_sp']?></h5>
         	<h6><?= number_format($row['gia'])?></h6>
         	<a href="xulymuahang.php?id=<?=$row['ma_sp']?>" class="btn btn-success">Mua Hàng</a>
      		</div>
     <?php }
     ?>
      
   </div>
</div>
		</div>
		<hr style="color: green"> 
		<div class="col-12">
		</div>
	</div>
</div>

	<footer class="bg-info text-center text-white">
  <!-- Grid container -->
  <div class="container p-4 pb-0">
    <!-- Section: Social media -->
    <section class="mb-4">
      <!-- Facebook -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-facebook-f"></i
      ></a>

      <!-- Twitter -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-twitter"></i
      ></a>

      <!-- Google -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-google"></i
      ></a>

      <!-- Instagram -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-instagram"></i
      ></a>

      <!-- Linkedin -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-linkedin-in"></i
      ></a>

      <!-- Github -->
      <a class="btn btn-outline-light btn-floating m-1" href="#!" role="button"
        ><i class="fab fa-github"></i
      ></a>
    </section>
    <!-- Section: Social media -->
  </div>
  <!-- Grid container -->

  <!-- Copyright -->
  <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
    © 2020 Copyright:
    <a class="text-white" href="https://mdbootstrap.com/">MDBootstrap.com</a>
  </div>
</footer>
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Thông tin khách hàng</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <form>
            <?php
              if (isset($_SESSION['user'])){
                $info = $_SESSION['user'];
                $query_info = mysqli_query($conn,"SELECT * FROM Khachhang WHERE Sodienthoai = '$info' ");
                            $row4 = mysqli_fetch_array($query_info);  
            ?>
            <div class="input-group my-3">
              <span class="input-group-text" style="width: 20%">Tài khoản</span>
              <input type="text" class="form-control" value="<?= $row4['MSKH'] ?>">
            </div>
            <div class="input-group my-3">
              <span class="input-group-text" style="width: 20%">Họ tên</span>
              <input type="text" class="form-control" value="<?= $row4['HoTenKH'] ?>">
            </div>
            <div class="input-group my-3">
              <span class="input-group-text" style="width: 20%">Địa chỉ</span>
              <input type="text" class="form-control" value="<?= $row4['DiaChi'] ?>">
            </div>
            <div class="input-group my-3">
              <span class="input-group-text" style="width: 20%">Công ty</span>
              <input type="text" class="form-control" value="<?= $row4['TenCongTy'] ?>">
            </div>
            <div class="input-group my-3">
              <span class="input-group-text" style="width: 20%">Phone</span>
              <input type="text" class="form-control" value="<?= $row4['SoDienThoai'] ?>">
            </div>
            
            <div class="modal-footer">
              <button type="button" class="btn btn-primary" data-bs-dismiss="modal">Đóng</button>
            </div>

            <?php
            }
            ?>
          </form>

        </div>
        
      </div>
    </div>
  </div>

<script type="text/javascript" src="bootstrap/jquery.js"></script>
<script type="text/javascript" src="bootstrap/js/bootstrap.js"></script>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
	<title>Đăng Nhập</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8" />
	<link rel="stylesheet" type="text/css" href="Bootstrap/fontawesome/css/all.min.css">
	<link rel="stylesheet" href="login-style.css">
</head>
<body>
	<div class="login-form">
		<div class="login">
			<h2 class="login-header">ĐĂNG NHẬP</h2>
			<div class="grid">
				<form class="login-container" action="xuli_login.php" method="post">
					<input type="text" placeholder="Số Điện Thoại" name="dt" maxlength="10" required="" >
					<input type="password" placeholder="Mật Khẩu" Name="mk" maxlength="20" required="">
					<input type="submit" name="sm" value="ĐĂNG NHẬP">
				</form>
				<div class="second-section">
					<div class="bottom-header">
						<h3>HOẶC</h3>
					</div>
					<div class="social-links">
						<ul>
							<li> <a class="facebook" href="#" target="blank"><i class="fab fa-facebook-f"></i></a></li>
							<li> <a class="twitter" href="#" target="blank"><i class="fab fa-twitter"></i></a></li>
							<li> <a class="googleplus" href="#" target="blank"><i class="fab fa-google-plus-g"></i></a></li>
						</ul>
					</div>
				</div>
				
				<div class="bottom-text">
					<p>Chưa có tài khoản?<a href="register.php">Đăng ký</a></p>
				</div>
			</div>
		</div>
		
	</div>
  
  
</body>
</html>
<!DOCTYPE html>
<html>
<head>
  <title>Đăng ký</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta charset="utf-8" />
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
  <link rel="stylesheet" href="login-style.css">
</head>
<body>
  <div class="login-form">
   <div class="login">
    <h2 class="login-header">ĐĂNG KÝ</h2>
    <div class="grid">
      <form class="login-container" action="xuli_login.php" method="post">
       <input type="text" name="mskh" placeholder="Nhập mã số khách hàng" maxlength="8" required="" style="margin-top: 5px">
       <input type="text" name="ten" placeholder="Nhập họ và tên" required="">
       <input type="text" name="dc" placeholder="Nhập địa chỉ" required="">
       <input type="text" name="sdt" placeholder="Nhập số điện thoại" maxlength="10" required="">
       <input type="text" name="matkhau" placeholder="Nhập mật khẩu" required="">
       <input type="text" name="cfmatkhau" placeholder="Nhập lại mật khẩu" required="">
       <input type="submit" name="dk" value="ĐĂNG KÝ">
     </form>
</div>
</div>

</div>


</body>
</html>
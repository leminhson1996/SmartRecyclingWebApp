<?php 
  session_start();
  if (isset($_SESSION['username']))
  	session_unset($_SESSION['username']);
?>
<!DOCTYPE html>
<html >
<head>
  <meta charset="UTF-8">
  <title>Flat HTML5/CSS3 Login Form</title>
  
  
  
      <link rel="stylesheet" href="css/style.css">
  <style>
  body {
    background-image: url("green.jpg");
}
</style>
</head>

<body>
  <h1><center><font color="#FFF">SMART RECYCLING</font></center></h1>
  <div class="login-page">
  <div class="form">
     <form class="login-form">
      <input type="text" name="usernameLogin" placeholder="Tên đăng nhập"/>
      <p class="error name"></p>
      <input type="password" name="passwordLogin" placeholder="mật khẩu"/>
      <p class="error password"></p>
      <button type="submit">Đăng nhập</button>
      <button id="facebook">Đăng nhập bằng facebook</button>
      <button id="google">Đăng nhập bằng google</button>
      <p class="message"><strong>Chưa đăng kí?</strong> <a href="RegisterView.php"><strong>Tạo tài khoản</strong></a></p>
    </form>

  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/Login.js"></script>

</body>
</html>

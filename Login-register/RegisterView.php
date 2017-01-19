<?php 
  session_start();
  if (isset($_SESSION['username']))
  	header('location:../index.php');
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
      <input type="text" name = "username" placeholder="tên"/>
      <p class="error name"></p>
      <input type="password" name = "password" placeholder="mật khẩu"/>
      <p class="error password"></p>
      <input type="text" name = "email" placeholder="email"/>
      <p class="error email"></p>
      <button type="submit">Tạo</button>
      <p class="message"><strong>Đã đăng kí rồi?</strong><a href="LoginView.php"><strong> Đăng nhập</strong></a></p>
    </form>
   
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/Register.js"></script>

</body>
</html>

<?php 
  session_start();
?>
<html>
	<head>
  		 <title>Smart Recycling</title>
         <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
    <!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
    <!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
    <!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
    <!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
    <!-- post -->
        <script src="Suggest.js"></script>

    <!-- CSS
    ================================================== -->
    <!-- Fontawesome Icon font -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
    <!-- Twitter Bootstrap css -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- jquery.fancybox  -->
        <link rel="stylesheet" href="css/jquery.fancybox.css">
    <!-- animate -->
        <link rel="stylesheet" href="css/animate.css">
    <!-- Main Stylesheet -->
        <link rel="stylesheet" href="css/main.css">
    <!-- media-queries -->
        <link rel="stylesheet" href="css/media-queries.css">

    <!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>
	</head>
	<body id="body" style="background-color:#4CAF50">
	<!-- preloader -->
    <div id="preloader">
      <img src="img/preloader.gif" alt="Preloader">
    </div>
    <!-- end preloader -->

        <!--
        Fixed Navigation
        ==================================== -->
        <header id="navigation" class="navbar-fixed-top navbar">
            <div class="container">
                <div class="navbar-header">
                    <!-- responsive nav button -->
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <i class="fa fa-bars fa-2x"></i>
                    </button>
          <!-- /responsive nav button -->

          <!-- logo -->
                    <a class="navbar-brand" href="#body">
            <h1 id="logo">
              <img src="img/logo-smart_recycling.png" alt="smart_recyling">
            </h1>
          </a>
          <!-- /logo -->
                </div>

        <!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="current"><a href="index.php">Trang chủ</a></li>
                        <li><a href="DisplayPost.php">Danh sách bài đăng</a></li>
                        <li><a href=<?php if (isset($_SESSION['username'])) echo '"SuggestView.php"'; else echo '"#""' ?>>Đề xuất cách tái chế</a></li>
                        <li><a href="ProductView.php">Cửa hàng</a></li>
                        <li><a href=<?php if (isset($_SESSION['username'])) echo '"AddProductView.php"'; else echo '"#"' ?>>Thêm sản phẩm</a></li>
                        <li><a href="CharityView.php">Danh sách từ thiện</a></li>
                        <li><a href=<?php if (isset($_SESSION['username'])) echo '"AddCharityView.php"'; else echo '"#"' ?>>Thêm từ thiện</a></li>
                        <li><a href="SearchFormView.php">Tìm kiếm</a></li>
                         <?php if (isset($_SESSION['username']))
             { 
              echo '<li><a href="ProfileView.php">Xin chào! ' . $_SESSION['username'] .'</a></li>'; 
                            
                         } ?>
            <?php if (isset($_SESSION['username'])) echo '<li><a href="Login-register/LoginView.php">Đăng xuất </a></li>';
            else echo '<li><a href="Login-register/LoginView.php">Đăng nhập </a></li>
                   <li><a href="Login-register/RegisterView.php">Đăng kí </a></li>';
            ?>
                    </ul>
                </nav>
        <!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		<section>
        <div style="height:100px">
			<div class="container">
				<h3><center><strong><font color="#FFF">ĐỀ XUẤT CÁCH TÁI CHẾ</font></strong></center></h3>
                <div style="height:50px"></div>
				<form class="suggest">
					<input name="name" type="text" value="Tên vật thể" onFocus="this.value='';" onBlur="if (this.value == '') {this.value ='Tên vật thể';}">
					<br><br>
					<input name="material" type="text" value="Chất liệu" onFocus="this.value='';" onBlur="if (this.value == '') {this.value ='Chất liệu';}">
					<br><br>
					<input name="purpose" type="text" value="Mục đích" onFocus="this.value='';" onBlur="if (this.value == '') {this.value ='Mục đích';}">
					<br><br>
					<input name="description" type="text" value="Mô tả" onFocus="this.value='';" onBlur="if (this.value == '') {this.value ='Mô tả';}">
					<br><br>
                    <input name="video" type="text" value="Video Link" onFocus="this.value='';" onBlur="if (this.value == '') {this.value ='Video Link';}">
                    <br><br>
					<textarea name="content" cols="90" rows="20" value=" " onFocus="this.value='';" onBlur="if (this.value == '') {this.value = 'Nội dung';}">Nội dung</textarea>
					<br>
                    <input type="file" value="Chọn hình ảnh" name="file">
                    <br>
					<input type="submit" value="Gửi">
				</form>
	       </div>
        </div>
		</section>

	</body>

 <!-- Essential jQuery Plugins
    ================================================== -->
    <!-- Main jQuery -->
        <script src="js/jquery-1.11.1.min.js"></script>
    <!-- Single Page Nav -->
        <script src="js/jquery.singlePageNav.min.js"></script>
    <!-- Twitter Bootstrap -->
        <script src="js/bootstrap.min.js"></script>
    <!-- jquery.fancybox.pack -->
        <script src="js/jquery.fancybox.pack.js"></script>
    <!-- jquery.mixitup.min -->
        <script src="js/jquery.mixitup.min.js"></script>
    <!-- jquery.parallax -->
        <script src="js/jquery.parallax-1.1.3.js"></script>
    <!-- jquery.countTo -->
        <script src="js/jquery-countTo.js"></script>
    <!-- jquery.appear -->
        <script src="js/jquery.appear.js"></script>
    <!-- Contact form validation -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery.form/3.32/jquery.form.js"></script>
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-validate/1.11.1/jquery.validate.min.js"></script>
    <!-- Google Map -->
        <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
    <!-- jquery easing -->
        <script src="js/wow.min.js"></script>
    <script>
      var wow = new WOW ({
        boxClass:     'wow',      // animated element css class (default is wow)
        animateClass: 'animated', // animation css class (default is animated)
        offset:       120,          // distance to the element when triggering the animation (default is 0)
        mobile:       false,       // trigger animations on mobile devices (default is true)
        live:         true        // act on asynchronously loaded content (default is true)
        }
      );
      wow.init();
    </script>
    <!-- Custom Functions -->
        <script src="js/custom.js"></script>
</html>

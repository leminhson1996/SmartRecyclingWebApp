<?php 
    session_start();
?>
<html>
	<head>

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
    <!-- add charity -->
        <script src="AddCharity.js"></script>
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
                        <li><a href="SuggestView.php">Đề xuất cách tái chế</a></li>
                        <li><a href="ProductView.php">Cửa hàng</a></li>
                        <li><a href="DisplayPost.php">Từ thiện</a></li>
                        <li><a href="SearchFormView.php">Tìm kiếm</a></li>
                        <li><a href="ProfileView.php">Xin chào! <?php if (isset($_SESSION['username'])) echo $_SESSION['username'];?></a></li>
                        <li><a href="Login-register/LoginView.php">Đăng xuất<?php session_destroy(); ?></a></li>
                    </ul>
                </nav>
                <!-- /main nav -->

            </div>
        </header>
        <!--
        End Fixed Navigation
        ==================================== -->
		<section>
			<div class="container">
				<h3><center><strong><font color="#FFF">THÊM SẢN PHẨM TỪ THIỆN</font></strong></center></h3>
				<form class="add-charity">
					<input name="name" type="text" value="Tên vật thể" onfocus="this.value='';" onblur="if (this.value == '') {this.value ='Tên vật the';}">
					<br><br>
					<textarea name="description" cols="90" rows="20" value=" " onfocus="this.value='';" onblur="if (this.value == '') {this.value = '';}">Nội dung</textarea>
					<br>
					<input type="submit" value="Gửi">
				</form>
		<br>
		<form action="upload-script-url" method="post" enctype="multipart/form-data">
    		<input type="file" value="Chọn hình ảnh" name="file">
			<br>
    		<input type="submit" value="Xong">
		</form>
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
    <!-- jquery easing -->
        <script src="js/jquery.easing.min.js"></script>
    <!-- jquery easing -->
        <script src="js/wow.min.js"></script>
     <!-- jquery add charity -->
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

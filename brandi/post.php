<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html>
<head>
<title>Smart Recycling | Trang chủ :: Bài viết</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coffee Break Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<script src="js/jquery.min.js"></script>
<!---- start-smoth-scrolling---->
<script type="text/javascript" src="js/move-top.js"></script>
<script type="text/javascript" src="js/easing.js"></script>
<script type="text/javascript">
			jQuery(document).ready(function($) {
				$(".scroll").click(function(event){		
					event.preventDefault();
					$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
				});
			});
		</script>
<!-- Google Font -->
		
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>

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
<!--start-smoth-scrolling-->

</head>
<body>

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
							<img src="img/logo.png" alt="Brandi">
						</h1>
					</a>
					<!-- /logo -->
                </div>
<?php echo "sdfsdfdsfs"; ?>
				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul id="nav" class="nav navbar-nav">
                        <li class="current"><a href="#body">Trang chủ</a></li>
                        <li><a href="#features">Thêm bài viết</a></li>
                        <li><a href="#works">Trưng bày sản phẩm</a></li>
                        <li><a href="#team">Làm từ thiện</a></li>
						
                        <li><a href="#search">Tìm kiếm</a></li>
						
                        <li> <img src='img/team/member-1.png' width='50' height='50'></li>
                        <li><a href='#TrangCaNhan'> quangher100 </a> </li>
                         <li><a href='#DangNhap'> Đăng xuất </a> </li>

                    </ul>
                </nav>
				<!-- /main nav -->
				
            </div>
        </header>
		<?php
		$client = new SoapClient("http://smartrecyclingservice.somee.com/DataService.asmx");
	
		
		$jsonString = $client->GetAllUser();
		echo "abc";
		?>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="index.html"><img src="<!-- images/logo-1.png -->" alt="" /></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		
	<!-- script-for-menu -->
	<!-- script-for-menu -->
		<script>
			$("span.menu").click(function(){
				$(" ul.navig").slideToggle("slow" , function(){
				});
			});
		</script>
	<!-- script-for-menu -->
	<!--banner-starts-->
	<div class="banner">
		<div class="container">
			<div class="banner-top">
				<!-- <div class="banner-text">
					<h2>Aliquam erat</h2>
					<h1>Suspendisse potenti</h1>
					<div class="banner-btn">
						<a href="single.html">Xem thêm</a>
					</div>
				</div> -->
			</div>
		</div>
	</div>
	<!--banner-end-->
	<!--about-starts-->
	<div class="about">
		<div class="container">
			<div class="about-main">
				<div class="col-md-8 about-left">
					<div class="about-one">
						<p>Find The Most</p>
						<h3>Coffee of the month</h3>
					</div>
					<div class="about-two">
						<a href="single.html"><img src="images/c-1.jpg" alt="" /></a>
						<p>Được đăng bởi <a href="#">Johnson</a> on 10 feb, 2015 <a href="#">bình luận(2)</a></p>
						<p>Phasellus fringilla enim nibh, ac pharetra nulla vestibulum ac. Donec tempor fermentum felis, non placerat sem ultrices ut. Nam molestie nunc nec felis hendrerit, in pulvinar arcu mollis. Quisque eget purus nec velit venenatis tincidunt vitae ac massa. Proin vel ornare tellus. Duis consectetur gravida tellus ut varius. Aenean tellus massa, laoreet ut euismod et, pretium id ex. Mauris hendrerit suscipit hendrerit.</p>
						<p>Quisque ultrices ligula a nisl porttitor, vitae porta tortor eleifend. Nulla nec imperdiet ipsum, ut cursus mauris. Proin ut sodales sem, quis vestibulum libero. Proin tempor venenatis congue. Phasellus mollis massa sit amet pharetra consequat. Aliquam quis lacus at sapien tempor semper. Sed ultrices et metus et elementum. Nunc sed justo at erat consequat mollis et eu lectus.</p>
						<div class="about-btn">
							<a href="single.html">Xem thêm</a>
						</div>
						<ul>
							<li><p>Chia sẻ : </p></li>
							<li><a href="#"><span class="fb"> </span></a></li>
							<li><a href="#"><span class="twit"> </span></a></li>
							<li><a href="#"><span class="pin"> </span></a></li>
							<li><a href="#"><span class="rss"> </span></a></li>
							<li><a href="#"><span class="drbl"> </span></a></li>
						</ul>
					</div>	
					<div class="about-tre">
						<div class="a-1">
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="images/c-3.jpg" alt="" /></a>
								<!-- <h6>Find The Most</h6> -->
								<h3><a href="single.html">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="images/c-4.jpg" alt="" /></a>
								<!-- <h6>Find The Most</h6> -->
								<h3><a href="single.html">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="a-1">
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="images/c-5.jpg" alt="" /></a>
								<!-- <h6>Find The Most</h6> -->
								<h3><a href="single.html">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="images/c-6.jpg" alt="" /></a>
								<!-- <h6>Find The Most</h6> -->
								<h3><a href="single.html">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="clearfix"></div>
						</div>
						<div class="a-1">
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="images/c-7.jpg" alt="" /></a>
								<!-- <h6>Find The Most</h6> -->
								<h3><a href="single.html">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="col-md-6 abt-left">
								<a href="single.html"><img src="images/c-8.jpg" alt="" /></a>
								<!-- <h6>Find The Most</h6> -->
								<h3><a href="single.html">Tasty Coffee</a></h3>
								<p>Vivamus interdum diam diam, non faucibus tortor consequat vitae. Proin sit amet augue sed massa pellentesque viverra. Suspendisse iaculis purus eget est pretium aliquam ut sed diam.</p>
								<label>May 29, 2015</label>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>	
				</div>
				<div class="col-md-4 about-right heading">
					<div class="abt-1">
						<h3>VỀ CHÚNG TÔI</h3>
						<div class="abt-one">
							<img src="images/c-2.jpg" alt="" />
							<p>Quisque non tellus vitae mauris luctus aliquam sit amet id velit. Mauris ut dapibus nulla, a dictum neque.</p>
							<div class="a-btn">
								<a href="single.html">Xem thêm</a>
							</div>
						</div>
					</div>
					<div class="abt-2">
						<h3>CÁC BÀI VIẾT KHÁC</h3>
							<div class="might-grid">
								<div class="grid-might">
									<a href="single.html"><img src="images/c-12.jpg" class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="single.html">Duis consectetur gravida</a></h4>
									<p>Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh odio.</p> 
								</div>
								<div class="clearfix"></div>
							</div>	
							<div class="might-grid">
								<div class="grid-might">
									<a href="single.html"><img src="images/c-10.jpg" class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="single.html">Duis consectetur gravida</a></h4>
									<p> Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh odio.</p> 
								</div>
								<div class="clearfix"></div>
							</div>
							<div class="might-grid">
								<div class="grid-might">
									<a href="single.html"><img src="images/c-11.jpg" class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="single.html">Duis consectetur gravida</a></h4>
									<p> Nullam non magna lobortis, faucibus erat eu, consequat justo. Suspendisse commodo nibh odio.</p> 
								</div>
								<div class="clearfix"></div>
							</div>							
					</div>
					
				</div>
				<div class="clearfix"></div>			
			</div>		
		</div>
	</div>
	<!--about-end-->
	<!--slide-starts-->
		
	<!--slide-end-->
	<!--footer-starts-->
	<div class="footer">
		<div class="container">
			<div class="footer-text">
				<!-- <p>© 2015 Coffee Break. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p> -->
			</div>
		</div>
	</div>
	<!--footer-end-->
</body>
</html>
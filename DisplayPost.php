<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
 <?php

  session_start();
	$client = new SoapClient("http://smartrecyclingservice.somee.com/DataService.asmx?WSDL");	
	$jsonString = $client->GetAllPost()->GetAllPostResult;
	$listPost = json_decode($jsonString);
	
	$jsonString = $client->GetTop10NewestPost()->GetTop10NewestPostResult;
	$listNewPost = json_decode($jsonString);
	
	function CreateDate($stringJsonDate)
	{
		return Date("H:m:s d-m-Y", floatval(substr($stringJsonDate, 6, strlen($stringJsonDate)-8))/1000);
		
	}
	
	function GetUsername($Id, $client)
	{
		$param = array('Id' => $Id);
		$jsonString = $client->GetUserById($param)->GetUserByIdResult;
		$user = json_decode($jsonString);
		return $user->TenDangNhap;
	}
?>

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
							<img src="img/logo-smart_recycling.png" alt="Smart Recycling">
						</h1>
					</a>
					<!-- /logo -->
                </div>

				<!-- main nav -->
                <nav class="collapse navbar-collapse navbar-right" role="navigation">
                    <ul class="nav navbar-nav">
                        <li class="current"><a href="index.php">Trang chủ</a></li>
                        <li><a href="DisplayPost.php">Danh sách bài đăng</a></li>
                        <li><a href="SuggestView.php">Đề xuất cách tái chế</a></li>
                        <li><a href="ProductView.php">Cửa hàng</a></li>
                        <li><a href="CharityView.php">Danh sách từ thiện</a></li>
                        <li><a href="AddCharityView.php">Thêm từ thiện</a></li>
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
		
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				
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
                   
						<h3>Bài đăng ưa thích nhất</h3>
						
                        
					</div>
                    
					<div class="about-two">
                    	
                        <h3><?php echo $listPost[0]->MoTa ?></h3>
                    	<p> Đăng lúc:    <?php echo CreateDate($listPost[0]->ThoiGianKhoiTao) ?> </p>
						<a href="single.php?Id=<?php echo $listPost[0]->Id ?>"><img src="<?php echo $listPost[0]->HinhAnh  ?>" alt="" /></a>
						<a href="TrangCaNhan.php">Được đăng bởi: <?php  echo GetUserName($listPost[0]->IdThanhVien, $client) ?> </a> <a href="#"> Thích(<?php echo $listPost[0]->SoLuotThich?>) </a>
                        
						<p></p>
						<p><?php echo substr($listPost[0]->NoiDung, 0, 500)?>...</p>
						<div class="about-btn">
							<a href="DisplaySingle.php?Id=<?php echo $listPost[0]->Id ?>">Xem thêm</a>
						</div>
						<ul>
							<li><p>Chia sẻ: </p></li>
							<li><a href="#"><span class="fb"> </span></a></li>
							<li><a href="#"><span class="twit"> </span></a></li>
							<li><a href="#"><span class="pin"> </span></a></li>
							<li><a href="#"><span class="rss"> </span></a></li>
							<li><a href="#"><span class="drbl"> </span></a></li>
						</ul>
					</div>	
					<div class="about-tre">
                    <?php
					$stringHtml = '
		 				<div class="a-1">';
					for ($i = 1; $i < count($listPost); $i++)
					{
					$stringHtml .=
							'<div class="col-md-6 abt-left">
							<h3>
							<a href="displaySingle.php?Id=' .$listPost[$i]->Id. '">' . $listPost[$i]->MoTa . '</a>
							</h3>
								<p> Đăng bởi <a hef="TrangCaNhan.php">' . GetUsername($listPost[$i]->IdThanhVien, $client) . ' </a> lúc:    ' . CreateDate($listPost[0]->ThoiGianKhoiTao) . ' </p>
								<a href="displaySingle.php?Id=' .$listPost[$i]->Id. '"><img src="' . $listPost[$i]->HinhAnh . '" alt="" /></a>
								<a href="displaySingle.php?Id=' .$listPost[$i]->Id. '"> </a>
								
								<p>' . substr($listPost[$i]->NoiDung, 0, 200) . '...</p>';
								if ($listPost[$i]->Video != "")
									$stringHtml .='<div class="about-btn">
										<a href="' .$listPost[$i]->Video . ' ">Xem video hướng dẫn</a>
									</div> <br/>
							</div>';
							
							
						if ($i % 2 == 0)
								$stringHtml .='<div class="clearfix"></div>';
					}
						$stringHtml .=
						
						'</div>';
					echo $stringHtml;
					?>
					</div>	
				</div>
				<div class="col-md-4 about-right heading">
					
					<div class="abt-2">
						<h3>BÀI VIẾT MỚI</h3>
                        <?php 
						for ($i = 0; $i < count($listNewPost); $i++)
						{
							$stringHtml = '
							<div class="might-grid">
								<div class="grid-might">
									<a href="displaySingle.php?Id=' . $listNewPost[$i]->Id . '"><img src="' . $listNewPost[$i]->HinhAnh . '" width=500 height=400 class="img-responsive" alt=""> </a>
								</div>
								<div class="might-top">
									<h4><a href="displaySingle.php?Id=' . $listNewPost[$i]->Id . '">' . $listNewPost[$i]->MoTa . '</a></h4>
									<p>' . substr($listNewPost[$i]->NoiDung, 0, 200) . '</p> 
								</div>
								<div class="clearfix"></div>
							</div>';
							echo $stringHtml;
						}
						?>
											
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
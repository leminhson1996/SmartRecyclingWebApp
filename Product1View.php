<!DOCTYPE html>
<!--[if lt IE 7]>      <html lang="en" class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html lang="en" class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html lang="en" class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html lang="en" class="no-js"> <!--<![endif]--><head>
    	<!-- meta charec set -->
        <meta charset="utf-8">
		<!-- Always force latest IE rendering engine or request Chrome Frame -->
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
		<!-- Page Title -->
        <title>Smart recycling</title>		
		<!-- Meta Description -->
        <meta name="description" content="Blue One Page Creative HTML5 Template">
        <meta name="keywords" content="one page, single page, onepage, responsive, parallax, creative, business, html5, css3, css3 animation">
        <meta name="author" content="Muhammad Morshed">
		<!-- Mobile Specific Meta -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
      
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
        
        <link rel="stylesheet" href="css/product.css">
       

		<!-- Modernizer Script for old Browsers -->
        <script src="js/modernizr-2.6.2.min.js"></script>

    </head>
	
    <body id="body">
	
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
							<img src="img/logo.png" alt="Brandi">
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
                            session_destroy();
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
	
		

		
		
        <!--
        Our Works
        ==================================== -->
		<div class="products">
            <ul>
                <li>
                    <div class="product">
                        <a href="#" class="img"><img src="img/works/item-1.jpg"/></a>
                        <a href="#" class="name"> abcdfdfdfd</a>
                        <div> 0989334387483</div>
                        <a href="#" class="cart">Đặt hàng</a>
                        <div class="fb-like" data-href="https://developers.facebook.com/docs/plugins/" data-width="100" data-layout="standard" data-action="like" data-size="small" data-show-faces="true" data-share="true"></div>
                     </div>
                </li>
                <li>
                    <div class="product">
                        <a href="#" class="img"><img src="img/works/item-2.jpg"/></a>
                        <a href="#" class="name"> abcdfdfdfd</a>
                        <div> 0989334387483</div>
                        <a href="#" class="cart">Đặt hàng</a>
                     </div>
                </li>
                <li>
                    <div class="product">
                        <a href="#" class="img"><img src="img/works/item-3.jpg"/></a>
                        <a href="#" class="name"> abcdfdfdfd</a>
                        <div> 0989334387483</div>
                        <a href="#" class="cart">Đặt hàng</a>
                     </div>
                </li>
                <li>
                    <div class="product">
                        <a href="#" class="img"><img src="img/works/item-4.jpg"/></a>
                        <a href="#" class="name"> abcdfdfdfd</a>
                        <div> 0989334387483</div>
                        <a href="#" class="cart">Đặt hàng</a>
                     </div>
                </li>
            </ul>
            <ul>
                 <li>
                    <div class="product">
                        <a href="#" class="img"><img src="img/works/item-5.jpg"/></a>
                        <a href="#" class="name"> abcdfdfdfd</a>
                        <div> 0989334387483</div>
                        <a href="#" class="cart">Đặt hàng</a>
                     </div>
                </li>
                <li>
                    <div class="product">
                        <a href="#" class="img"><img src="img/works/item-6.jpg"/></a>
                        <a href="#" class="name"> abcdfdfdfd</a>
                        <div> 0989334387483</div>
                        <a href="#" class="cart">Đặt hàng</a>
                     </div>
                </li>
                <li>
                    <div class="product">
                        <a href="#" class="img"><img src="img/works/item-7.jpg"/></a>
                        <a href="#" class="name"> abcdfdfdfd</a>
                        <div> 0989334387483</div>
                        <a href="#" class="cart">Đặt hàng</a>
                     </div>
                </li>
                <li>
                    <div class="product">
                        <a href="#" class="img"><img src="img/works/item-8.jpg"/></a>
                        <a href="#" class="name"> abcdfdfdfd</a>
                        <div> 0989334387483</div>
                        <a href="#" class="cart">Đặt hàng</a>
                     </div>
                </li>
            
            </ul>
            
        </div>
		
        <!--
        End Our Works
        ==================================== -->
		
      
		</footer>
		
		

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
		
		<script type="text/javascript">
			$(function(){
				/* ========================================================================= */
				/*	Contact Form
				/* ========================================================================= */
				
				$('#contact-form').validate({
					rules: {
						name: {
							required: true,
							minlength: 2
						},
						email: {
							required: true,
							email: true
						},
						message: {
							required: true
						}
					},
					messages: {
						name: {
							required: "come on, you have a name don't you?",
							minlength: "your name must consist of at least 2 characters"
						},
						email: {
							required: "no email, no message"
						},
						message: {
							required: "um...yea, you have to write something to send this form.",
							minlength: "thats all? really?"
						}
					},
					submitHandler: function(form) {
						$(form).ajaxSubmit({
							type:"POST",
							data: $(form).serialize(),
							url:"process.php",
							success: function() {
								$('#contact-form :input').attr('disabled', 'disabled');
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$(this).find(':input').attr('disabled', 'disabled');
									$(this).find('label').css('cursor','default');
									$('#success').fadeIn();
								});
							},
							error: function() {
								$('#contact-form').fadeTo( "slow", 0.15, function() {
									$('#error').fadeIn();
								});
							}
						});
					}
				});
			});
		</script>
    </body>
</html>

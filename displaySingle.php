<!--A Design by W3layouts
Author: W3layout
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?php
session_start();

	$client = new SoapClient("http://smartrecyclingservice.somee.com/DataService.asmx?WSDL");	
	$IdPost = 0;
	if (isset($_GET['Id']))
		$_SESSION['IdPost'] = $_GET['Id'];
	
	$IdPost = $_SESSION['IdPost'];
	$Id = array('Id'=>intval($IdPost));
	$jsonString = $client->GetPostById($Id)->GetPostByIdResult;
	$post = json_decode($jsonString);
	
	$Id = array('IdPost'=>intval($IdPost));
	$jsonString = $client->GetAllCommentOfPost($Id)->GetAllCommentOfPostResult;
	$listComment = json_decode($jsonString);
	
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
<title>Smart Recycling | <!-- Single :: w3layouts --></title>
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
<!--start-smoth-scrolling-->
</head>
<body>
	<!--header-top-starts-->
	<div class="header-top">
		<div class="container">
			<div class="head-main">
				<a href="index.html"><!-- <img src="images/logo-1.png" alt="" /> --></a>
			</div>
		</div>
	</div>
	<!--header-top-end-->
	<!--start-header-->
	<div class="header">
		<div class="container">
			<div class="head">
			<div class="navigation">
				 <span class="menu"></span> 
					<ul class="navig">
						<li><a href="index.php">Trang chủ</a></li>
						<li><a href="about.php">Về chúng tôi</a></li>
					</ul>
			</div>
			<div class="header-right">
				
				<ul>
					<li><a href="#"><span class="fb"> </span></a></li>
					<li><a href="#"><span class="twit"> </span></a></li>
					<li><a href="#"><span class="pin"> </span></a></li>
					<li><a href="#"><span class="rss"> </span></a></li>
					<li><a href="#"><span class="drbl"> </span></a></li>
				</ul>
			</div>
				<div class="clearfix"></div>
			</div>
			</div>
		</div>	
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
			</div>
		</div>
	</div>
	<!--banner-end-->
	<!--start-single-->
	<div class="single">
		<div class="container">
				<div class="single-top">
						<a href=""><img class="img-responsive" src="<?php echo $post->HinhAnh ?>" alt=" "></a>
					<div class=" single-grid">
										
							<ul class="blog-ic">
								<li><a href="TrangCaNhan.php"><span> <i  class="glyphicon glyphicon-user"> </i><?php echo GetUsername($post->IdThanhVien, $client) ?></span> </a> </li>
		  						 <li><span><i class="glyphicon glyphicon-time"> </i><?php echo CreateDate($post->ThoiGianKhoiTao)?></span></li>		  						 	
		  						 <li><span><i class="glyphicon glyphicon-eye-open"> </i>Thích(<?php echo $post->SoLuotThich ?>)</span></li>
		  					</ul>	
                        <h4><?php echo $post->MoTa ?></h4>	  						
						<p> <?php echo $post->NoiDung ?></p>
						
					</div>
                    
                    <div class="comment-bottom heading">
    					<h3>Viết bình luận</h3>
    					<form>	
							<textarea cols="77" rows="6" value=" " onfocus="this.value='';"  id="content">Lời nhắn</textarea>
							<input type="submit" value="Gửi" id="submit"/>
						</form>
    				</div>
                    
					<div class="comments heading">
                    <?php 
					if (count($listComment) > 0)
					{
						echo '<h3>Bình luận</h3>';
						for ($i = 0; $i < count($listComment); $i++)
						{
							$stringHtml ='
						<div class="media">
							<div class="media-left">
					        	<a href="#">
					        		<img src="images/si.png" alt=""/>
					        	</a>
					      	</div>
					      	<div class="media-body">
						        <h4 class="media-heading"> <a href="TrangCaNhan.php" >' . GetUsername($listComment[$i]->IdThanhVien, $client) . '</a> </h4>
						        <p>' . $listComment[$i]->NoiDung . ' </p>
					      	</div>
					 </div>';
					 	echo $stringHtml;
						}
					}
					
					
					if (isset($_POST['submit']) && $_POST['content'] != "")
					{
						echo "sdfsdfd";
						$content = array('IdBaiDang'=>$_GET['Id'], 'NoiDung'=>$_POST['content'], 'IdThanhVien'=>1);
						$stringJson = json_encode($content);
						$client->AddComment(array('jsonString'=>$stringJson));
						location.reload(true);
					}
						
						?>
                        
                    <script type="text/javascript">
					$('#submit').submit(function(e) {
					e.preventDefault();
					<?php
					
						$content = array('IdBaiDang'=>$_GET['Id'], 'NoiDung'=>$_POST['content'], 'IdThanhVien'=>1);
						$stringJson = json_encode($content);
						$client->AddComment(array('jsonString'=>$stringJson));
						
						$stringHtml ='
						<div class="media">
							<div class="media-left">
					        	<a href="#">
					        		<img src="images/si.png" alt=""/>
					        	</a>
					      	</div>
					      	<div class="media-body">
						        <h4 class="media-heading"> <a href="TrangCaNhan.php" >' . GetUsername(1, $client) . '</a> </h4>
						        <p>' . $content . ' </p>
					      	</div>
					 </div>';
					 	echo $stringHtml;
						var_dump($stringHtml);
						?>
						
							
						window.location.href = '../single.php?Id=3';
							
						})
					}
				})
					
					</script>
    				
				</div>	
			</div>					
	</div>
	<!--end-single-->
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
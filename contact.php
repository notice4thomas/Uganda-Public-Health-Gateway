<?php
/*
Free Bootstrap Themes : http://www.365bootstrap.com
Free Responsive Html5 Templates : http://www.zerotheme.com
 */

$text = "<span style='color:red; font-size: 35px; line-height: 40px; magin: 10px;'>Error! Please try again.</span>";

if(isset($_POST['name']))
{
	$name=$_POST['name'];
	$email=$_POST['email'];
	$message=$_POST['message'];

	$to = "notice4thomas@gmail.com";
	$subject = "1SMILE Initiative - Contact Form";
	$message = " Name: " . $name ."\r\n Email: " . $email . "\r\n Message:\r\n" . $message;
	 
	$from = "1SMILE Website";
	$headers = "From:" . $from . "\r\n";
	$headers .= "Content-type: text/plain; charset=UTF-8" . "\r\n"; 
	 
	if(@mail($to,$subject,$message,$headers))
	{
	  $text = "<span style='color:blue; font-size: 35px; line-height: 40px; margin: 10px;'>Your Message was sent successfully !</span>";
	}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
  	<title>Contact 1SMILE</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="boda boda mobility motorcycle public health">
    <meta name="author" content="www.1smile.org">

	<!-- styles -->
	<link rel="shortcut icon" href="favicon.ico">
    <link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="css/font-awesome.min.css" rel="stylesheet" type="text/css" />
	<link href="css/pe-icon-7-stroke.css" rel="stylesheet" type="text/css"  />
	
    <link href="css/camera.css" rel="stylesheet" type="text/css" >
	<link href="css/style.css" rel="stylesheet" type="text/css" >
	<link href="css/menu.min.css" rel="stylesheet" type="text/css" >
	<link href="css/roboto.css" rel="stylesheet" type="text/css" >
	<link href="css/small-n-flat.css" rel="stylesheet" type="text/css" >
	
	<!-- FAB Button 1,2 -->
    <link href="css/fab1.css" rel="stylesheet" type="text/css" >
	<link rel="stylesheet" href="css/kc.fab.css"/>
	<!-- js -->
	<script src="js/modernizr.custom.97074.js"></script>
	
    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body id="wrapper">

	<!-- /////////////////////////////////////////Navigation -->
	<button id="mm-menu-toggle" class="mm-menu-toggle">Toggle Menu</button>
	<nav id="mm-menu" class="mm-menu">
		<div class="mm-menu__header">
			<h2 class="mm-menu__title">1SMILE</h2>
		</div>
		<ul class="mm-menu__items">
			<li class="mm-menu__item">
			  <a class="mm-menu__link" href="index.html">
				<span class="mm-menu__link-text"><i class="md md-home"></i> Home</span>
			  </a>
			</li>
			<li class="mm-menu__item">
			  <a class="mm-menu__link" href="single.html">
				<span class="mm-menu__link-text"><i class="md md-person"></i> Folio</span>
			  </a>
			</li>
			<li class="mm-menu__item">
			  <a class="mm-menu__link" href="archive.html">
				<span class="mm-menu__link-text"><i class="md md-inbox"></i> Blog</span>
			  </a>
			</li>
			<li class="mm-menu__item">
			  <a class="mm-menu__link" href="contact.html">
				<span class="mm-menu__link-text"><i class="md md-favorite"></i> Contact</span>
			  </a>
			</li>
		</ul>
	</nav><!-- /nav -->
	
	
	<!-- /////////////////////////////////////////Content -->
	<div id="page-content" class="sub-page">
		<div class="container">
			<div class="row">
				<div id="main-content" class="col-md-8">
					<article>
						<div class="art-header">
							<h2>Contact Us</h2>
						</div>
						<div class="art-content">
							
							<!---->
							<div id="contact_form">
								<form name="form1" id="ff" method="post" action="contact.php">
									<label>
									<span>Enter your name:</span>
									<input type="text"  name="name" id="name" required>
									</label>
									<label>
									<span>Enter your email:</span>
									<input type="email"  name="email" id="email" required>
									</label>
									<label>
									<span>Your message here:</span>
									<textarea name="message" id="message"></textarea>
									</label>
									<center><input class="sendButton" type="submit" name="Submit" value="Submit"></center>
								</form>
							</div>
						</div>
					</article>
					
				</div>
				<div id="sidebar" class="col-md-4">
					<div class="widget wid-about">
						<div class="heading"><h4>Shortly About 1SMILE</h4></div>
						<div class="content">
							<img src="images/thomas.png" />
							<p>.</p>
						</div>
					</div>
					<div class="widget wid-gallery">
						<div class="heading"><h4>Gallery</h4></div>
						<div class="content">
							<div class="row">
								<div class="col-xs-4">
									<a href="#"><img src="images/1.jpg"></a>
									<a href="#"><img src="images/2.jpg"></a>
									<a href="#"><img src="images/3.jpg"></a>
								</div>
								<div class="col-xs-4">
									<a href="#"><img src="images/6.jpg"></a>
									<a href="#"><img src="images/7.jpg"></a>
									<a href="#"><img src="images/8.jpg"></a>
								</div>
								<div class="col-xs-4">
									<a href="#"><img src="images/5.jpg"></a>
									<a href="#"><img src="images/9.jpg"></a>
									<a href="#"><img src="images/4.jpg"></a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<!-- /////////////////////////////////////////Footer -->
	<footer>
		<div class="wrap-footer">
			<div class="container">
				<div class="row">
					<div class="col-md-6">
						<span class="copyright">Copyright &copy; 2017, 
						<a href="http://ugphg.sci-gaia.eu" target="_blank" rel="nofollow">Uganda Public Health Gateway.</a> <br>
						<a href="http://www.sci-gaia.eu" target="_blank" rel="nofollow">Africa Science Gateway</a>,
						<a href="http://www.tlc.ug" target="_blank" rel="nofollow">
						TLCGM</a>,
						<a href="http://www.ecaitours.com" target="_blank" rel="nofollow">ECAI</a>,
						<a href="http://www.mak.ac" target="_blank" rel="nofollow">Makerere University RK-WHERE Centre</a>
						</span>
					</div>
					<div class="col-md-3">
						<ul class="list-inline social-buttons">
							<li>Sign in with:</a></li><br>
							<li><a href="#"><i class="fa fa-twitter fa-2x"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-facebook-square fa-2x"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-linkedin-square fa-2x"></i></a>
							</li>
							<li><a href="#"><i class="fa fa-google-plus-square fa-2x"></i></a>
							</li>
						</ul>
					</div>
					<div class="col-md-3">
						<ul class="list-inline quicklinks">
							<li><a href="#">Honor Code</a>
							</li>
							<li><a href="#">Privacy</a>
							</li>
							<li><a href="#">Terms of Use</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</footer>
	<!-- Footer -->
	
	
	<!-- Top Slider -->
    <script src="js/jquery.js"></script>
    <script src='js/jquery.easing.1.3.js'></script> 
    <script src='js/camera.min.js'></script>
    <script>
		jQuery(function(){
		 
		  jQuery('#camera_wrap_1').camera({
			height: '600px',
			loader: 'bar',
			pagination: true,
			thumbnails: false
		  });
		});
	</script>
	<!-- Menu Js -->
	<script src="js/materialMenu.js"></script>
	<script>
	  var menu = new Menu;
	</script>
	<!-- Imges-hover-content -->
	<script type="text/javascript" src="js/jquery.hoverdir.js"></script>	
	<script type="text/javascript">
		$(function() {
			$(' #da-thumbs > li ').each( function() { $(this).hoverdir(); } );
		});
	</script>
	<!-- Bootstrap Core JavaScript -->
	<script src="js/bootstrap.min.js"></script>
	
</body>
</html>
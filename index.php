<!DOCTYPE html>
<html>
<head>
<title>Hall Booking System</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/chocolat.css" rel="stylesheet">
<!-- js -->
<script src="js/jquery-1.11.1.min.js"></script>
<!-- //js -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<!-- start-smoth-scrolling -->
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
	<!-- start-smoth-scrolling -->
</head>
<body>
<!-- banner -->
<div class="banner">
	<div class="container">
		<div class="header-nav">
			<div class="logo">
				<h1><a href="index.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>HBS</a></h1>
			</div>
			<div class="navigation">
				<span class="menu"><img src="images/menu.png" alt=""/></span>
				<nav class="cl-effect-11" id="cl-effect-11">
					<ul class="nav1">
						<li><a class="active" href="index.php" data-hover="HOME">HOME</a></li>
						<li><a href="instruction.php" data-hover="INSTRUCTION">INSTRUCTION</a></li>
						<li><a href="services.php" data-hover="SERVICES">SERVICES</a></li>
						<li><a href="login/index.php" data-hover="LOGIN">LOGIN</a></li>
					</ul>
				</nav>
				<!-- script for menu -->
					<script> 
						$( "span.menu" ).click(function() {
						$( "ul.nav1" ).slideToggle( 300, function() {
						 // Animation complete.
						});
						});
					</script>
				<!-- //script for menu -->
				
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="banner-info">
			<script src="js/responsiveslides.min.js"></script>
			<script>
									// You can also use "$(window).load(function() {"
									$(function () {
									 // Slideshow 4
									$("#slider3").responsiveSlides({
										auto: true,
										pager: false,
										nav: false,
										speed: 500,
										namespace: "callbacks",
										before: function () {
									$('.events').append("<li>before event fired.</li>");
									},
									after: function () {
										$('.events').append("<li>after event fired.</li>");
										}
										});
										});
			</script>
			<div  id="top" class="callbacks_container">
				<ul class="rslides" id="slider3">
					<li>
						<div class="banner-text">
							<h3>WELCOME</h3>
							<h4>EXCELLENT SERVICES</h4>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>WELCOME</h3>
							<h4>RELAX AND EXPERIENCE SOMETHING NEW</h4>
						</div>
					</li>
					<li>
						<div class="banner-text">
							<h3>WELCOME</h3>
							<h4>FIND YOUR IDEAL HALL ON THIS SITE</h4>
						</div>
					</li>
				</ul>
			</div>
		</div>
	</div>
</div>
<!-- //banner -->
<!-- banner-pos -->
<div class="banner-pos">
	<div class="container">
		<div class="banner-pos-grids">
			<div class="ban-pos-gridone">
				<h3>Featured Hall</h3>
				<div class="ban-pos-info l-grids">
					<figure class="effect-bubba">
							<img src="images/4.jpg" alt=""/>
							<figcaption>
								<h4>HALL</h4>															
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="ban-pos-gridtwo l-grids">
				<div class="ban-pos-info l-grids">
					<figure class="effect-bubba">
							<img src="images/6.jpg" alt=""/>
							<figcaption>
								<h4>HALL</h4>												
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="ban-pos-gridtwo l-grids">
				<div class="ban-pos-info l-grids">
					<figure class="effect-bubba">
							<img src="images/5.jpg" alt=""/>
							<figcaption>
								<h4>HALL</h4>														
							</figcaption>			
					</figure>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>
<!-- //banner-pos -->
<!-- welcome -->
<div class="welcome">
	<div class="container">
		<h2 class="tittle-one">ABOUT US</h2>
		<p><Strong>In this web application we focused on one thing is to provide you a chaos free hall booking system.We help the user(student/faculty) of NIT Calicut to 
		book a specific hall that the available at the time of booking.We overcome the problem of running through the CSED department to book a hall.
		This application makes all the process hassle free for the user.This system replaces the existing system with much more features the system provides 
		security to user documents.Here this application comes as a savior and manages to maintain all the confidentiality 
		and provides an ease by making this process simpler and quicker.</Strong></p>
	</div>
</div>
<!-- //welcome -->
<!-- facilities -->
<!-- //facilities -->
<!-- services -->
<div class="feature-serv">
	<div class="container">
		<h3 class="tittle">FEATURED SERVICES</h3>
		<div class="services-bottom-grids">
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>secure</h4>
						<p><strong>This web app is highly secure,keeps users confidential data securely.</strong></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>user-friendly</h4>
						<p><strong>This app is user friendly and easy to use.</strong></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>speed</h4>
						<p><strong>Perform operations quickly without having any error.</strong></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>hassle free</h4>
						<p><strong>This application makes all the process hassle free for the user.</strong></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>service</h4>
						<p><strong>24*7 online service is provided in this app.</strong></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 services-bottom-grid">
					<div class="services-bottom-grd-left wel-grid">
						<div class="time-service">
							<figure class="icon">
								<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
							</figure>
						</div>
					</div>
					<div class="services-bottom-grd-right">
						<h4>booking hall</h4>
						<p><strong>Selecting a hall and cancelling when not required is never been so easy.</strong></p>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
		</div>
	</div>
</div>
<!-- //services -->
<!-- gallery -->
<!-- //gallery -->
<!--footer-->
	<div class="footer">
		<div class="container">				 	
			<div class="col-md-4 ftr_navi ftr">
				<h3>NAVIGATION</h3>
				<ul>
					<li><a class="active" href="index.php" data-hover="HOME">HOME</a></li>
					<li><a href="instruction.php" data-hover="INSTRUCTION">INSTRUCTION</a></li>
					<li><a href="services.php" data-hover="SERVICES">SERVICES</a></li>
					<li><a href="login/index.php" data-hover="LOGIN">LOGIN</a></li>
				</ul>
			</div>
			
			&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;<div class="col-md-4 ftr_navi ftr" align=""center>
				<h3>GET IN TOUCH</h3>
				<ul>
					<li>NATIONAL INSTITUTE OF TECHNOLOGY,CALICUT</li>
					<li>CALICUT,KERELA</li>
					<li>PINCODE-673601</li>
				</ul>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!--footer-->
<!-- copy -->
<div class="copy-right">
	<div class="container">
			<p> &copy; 2018 Hall Booking System. All Rights Reserved | Design by Abhishek Sumeet Toppo</a></p>
	</div>
</div>
<!-- //copy -->
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
<!-- smooth scrolling -->
	<script type="text/javascript">
		$(document).ready(function() {
		/*
			var defaults = {
			containerID: 'toTop', // fading element id
			containerHoverID: 'toTopHover', // fading element hover id
			scrollSpeed: 1200,
			easingType: 'linear' 
			};
		*/								
		$().UItoTop({ easingType: 'easeOutQuart' });
		});
	</script>
	<a href="#" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<!-- //smooth scrolling -->
</body>
</html>
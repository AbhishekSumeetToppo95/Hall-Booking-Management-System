<!DOCTYPE html>
<html>
<head>
<title>HALL BOOKING SYSTEM</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Classic Hotel Responsive web template, Bootstrap Web Templates, Flat Web Templates, Andriod Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyErricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
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
<div class="banner page-head">
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
	</div>
</div>
<!-- //banner -->
<!--about-->
	<!--start-about-->
	<div class="about">
		<div class="container">
			<div class="about-top heading">
				<h2 class="tittle-one"><u>GUIDELINES FOR HALL BOOKING </u></h2>
			</div>
			<div class="about-bottom text-center" align="center">
				<ul>
				<p align="left"><strong>This web application is for booking hall online which can be used only by the authorised user(student/faculty) of NIT Calicut.No outsider can book a Hall.</strong></p><br>
				<p align="left"><strong>Before Booking Hall user(Student/Faculty) must have to registered themselves to the system.</strong></p><br>
				<p align="left"><strong>For booking interface user(student/faculty) need to check the availability of hall.Based on hall name,projector type,room type or through date and time of booking.</strong></p><br>
				<p align="left"><strong>Form the list of available halls user(student/faculty) can select a hall based on his/her requirements and can book a hall by providing the purpose,check-in and check-out time.</strong></p><br>
				<p align="left"><strong>At any point of the time user(student/faculty) can cancel the booked hall if its no longer required.</strong></p>
				</ul>
			</div>
		</div>
	</div>
<!--//about-->
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
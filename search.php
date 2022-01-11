<?php
session_start();

if(!isset($_SESSION['email'])){
	header("Location:login/index.php");
}
?>
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
<link rel="stylesheet" type="text/css" href="css/jquery-ui1.css">
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
				<h1><a href="bookcancelview/ask.php"><span class="glyphicon glyphicon-home" aria-hidden="true"></span>HBS</a></h1>
			</div>
			<div class="navigation">
				<span class="menu"><img src="images/menu.png" alt=""/></span>
				<nav class="cl-effect-11" id="cl-effect-11">
					<ul class="nav1">
						<li><a href="bookcancelview/ask.php">BACK</a></li>
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
<!--search-->
<?php
include_once("dbconn.php");
$sql="select * from hall";
$res=$conn->query($sql);
while($row=mysqli_fetch_assoc($res))
{
?>
	<div class="container">	
			<div class="col-md-9 search-grid-right">
				<div class="hotel-rooms">
					<div class="hotel-left">
						<strong style="color:red;"><?php echo $row['hall_name'] ;?></strong>
						<div class="hotel-left-grids">
							<div class="hotel-left-one">
								<img src="images/6.jpg" alt="" />
							</div>
							<div class="hotel-left-two">
								<h4 style="color:red;">Projector Type:<?php echo $row['projector'];?></h4>
							</div>
							<div class="hotel-left-two">
								<h4 style="color:red;">Hall Capacity:<?php echo $row['no_of_desk'];?></h4>
							</div>
							<div class="hotel-left-two">
								<h4 style="color:red;">Room Type:<?php echo $row['room_type'];?></h4>
							</div>
							<div class="hotel-left-two">
								<h4 style="color:red;">Hall Location:<?php echo $row['location'];?></h4>
							</div>
							<div class="clearfix"></div>
						</div>
					</div>
					<div class="hotel-right text-center"><br><br><br><br>
						<a href="confirmbooking.php?hall=<?php echo $row['hall_name'];?>">BOOK</a>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
	</div>
<?php } ?>
<!--//search-->
<!--footer-->
<div class="footer">
		<div class="container">				 	
			<div class="col-md-4 ftr_navi ftr">
				<h3>NAVIGATION</h3>
				<ul>
					<li><a href="index.php">HOME</a></li>
					<li><a href="about.php">INSTRUCTION</a></li>
					<li><a href="typography.php">SERVICES</a></li>						
					<li><a href="booking.php">HALL DETAILS</a></li>
					<li><a href="contact.php">CONTACT</a></li>
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
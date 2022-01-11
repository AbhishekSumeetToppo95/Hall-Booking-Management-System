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
<link rel="stylesheet" href="css/jquery-ui.css" />
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
<!--about-->
<?php
include_once("dbconn.php");
$email=$_SESSION['email'];
$sqlshow="select * from booked_hall where user_gmail='$email'";
$resshow=$conn->query($sqlshow);
?><br><br>
<div class='container'>
    <div class='panel panel-primary dialog-panel'>
	
      
        <h2 class="tittle-one">CANCEL BOOKED HALLS</h2>
      
	  <div class='panel-body'>
		          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' </label>
            <div class='col-md-2'>
              
            </div>
          </div>
		  		 <div class='form-group'><center>
				 <table cellpadding="10px" width="100%">
				 <tr>
				 <th>SNO.</th>
				 <th>BOOKING ID</th>
				 <th>HALL NAME</th>
				 <th>PURPOSE</th>
				 <th>TIME DURATION</th>
				 <th>DATE Of COMMENCEMENT</th>
				 <th>CANCEL HALL</th>
				 </tr>
				 <?php
				 $i=1;
				 while($rowshow=mysqli_fetch_assoc($resshow))
				 {
				 ?>
				 <form action="cancelhall.php" method="POST">
					 <tr>
						<td><?php echo $i; ?></td>
						<td><?php echo $rowshow['booking_id']; ?></td>
						<td><?php echo $rowshow['hall_name'];?></td>
						<td><?php echo $rowshow['purpose'];?></td>
						<td><?php echo $rowshow['slot'];?>:00 to <?php echo ++$rowshow['slot'];?>:00</td>
						<td><?php echo $rowshow['check_in_date'];?></td>
						<?php
							$slot=$rowshow['slot'];
							$bookeddate=$rowshow['check_in_date'];
							$date=date('Y-m-d', time());
							$hour=date('H', time());
							if($bookeddate>$date)
							{?>
								<td><input type="submit" name="cancel" value="Cancel"></td>
								<input type= "hidden" name = "booking_id" value="<?php echo $rowshow['booking_id'];?>">
								<?php
							}
							
							else if($bookeddate==$date && $slot-1>$hour)
							{?>
						
						    <td><input type="submit" name="cancel" value="Cancel"></td>
								<input type= "hidden" name = "booking_id" value="<?php echo $rowshow['booking_id'];?>">
							<?php }	
							
								
						?>
					</tr>
				</form>
				<?php $i++; } ?> 
				 <?php
	include_once("dbconn.php");
	if(isset($_POST['cancel']))
	{
		$booking_id=$_POST['booking_id'];
		$sql="delete from booked_hall where booking_id='$booking_id'";
		/*$sql1="select hall_name,check_in_date,slot from booked_hall where booking_id='$booking_id'";
		$res=$conn->query($sql1);
		$rowshow=mysqli_fetch_assoc($res)
		{
			 $rowshow['hall_name']; 
			 $rowshow['check_in_date'];
			 $rowshow['slot'];
		}*/
		if($conn->query($sql))
		{
			echo"<script>alert('Hall has been removed succefully')</script>";
			/*$to_email = '$email';
			$subject = 'BOOKING CANCELATIONs';
			$message = 'Your Hall has been removed  '$rowshow['hall_name']'; '$rowshow['check_in_date']'; $rowshow['slot'];';
			$headers = 'From: hbs@nitc.com';
			mail($to_email,$subject,$message,$headers);*/
		}
		else
		{
			echo"<script>alert('something wrong')</script>";
		}
	}
	
?>
				 </table></center>
			</div>
	  </div>
	  </div>
</div>
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
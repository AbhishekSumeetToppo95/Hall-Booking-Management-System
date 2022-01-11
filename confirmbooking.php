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
						<li><a href="search.php">BACK</a></li>
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
if(isset($_GET['hall']))
{
$hall=$_GET['hall'];
$_SESSION['hall']=$hall;
}
$hall=$_SESSION['hall'];
$email=$_SESSION['email'];
$sqlshow="select * from booked_hall where hall_name='$hall'";
$resshow=$conn->query($sqlshow);
?><br><br>
<div class='container'>
    <div class='panel panel-primary dialog-panel'>
	
      
        <h2 class="tittle-one">BOOKED SLOTS</h2>
      
	  <div class='panel-body'>
		          <div class='form-group'>
            <label class='control-label col-md-2 col-md-offset-2' </label>
            <div class='col-md-2'>
              
            </div>
          </div>
		  		 <div class='form-group'><center>
				 <table cellpadding="10px" width="100%">
				 <tr>
				 <th>HALL NAME</th>
				 <th>PURPOSE</th>
				 <th>TIME DURATION</th>
				 <th>NAME</th>
				 <th>TYPE</th>
				 <th>DATE</th>
				 </tr>
				 <?php
				 while($rowshow=mysqli_fetch_assoc($resshow))
				 {
					$e1=$rowshow['user_gmail'];
					$sql="select name,type from hall_user as h,booked_hall as b where h.gmail=b.user_gmail and b.user_gmail='$e1'";
					$row=$conn->query($sql);
					$row1=mysqli_fetch_assoc($row);
				 ?>
				 
				 <tr>
					<td><?php echo $rowshow['hall_name'];?></td>
					<td><?php echo $rowshow['purpose'];?></td>
					<td><?php echo $rowshow['slot'];?>:00 to <?php echo ++$rowshow['slot'];?>:00</td>
					<td><?php echo $row1['name'];?></td>
					<td><?php echo $row1['type'];?></td>
					<td><?php echo $rowshow['check_in_date'];?></td>
				</tr>
				 <?php } ?>
				 </table></center>
			</div>
	  </div>
	  </div>
	  </div>
	<div class="booking">
		<div class="container">
			<h2 class="tittle-one">BOOKING</h2>
				<div class="reservation-form">
					<div class="col-md-3 reservation-left">
					</div>
					<div class="col-md-9 reservation-right">
						<form action="confirmbooking.php" method="POST">
							<h4>Hall Name</h4>
							<input type="text" name="hname" required="" value="<?php echo $hall;?>" readonly >
							<h4>User Email-ID</h4>
							<input type="text" name="email" required="" value="<?php echo $email;?>" readonly >
							<h4>Purpose</h4>
							<input type="text" name="purpose" required="">
							<h4>Date</h4>
							<div class="book-pag">
								<div class="book-pag-frm">
									<input class="date" id="datepicker1" name="sdate1" type="text" value="Date" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = '';}" required="">
								</div>
								<div class="clearfix"></div>
							</div>
							<h4>When would you like to come?</h4><br>
							<div>
								<select id="lstFruits" multiple="multiple" required="required" name="slot[]">
									<option value="8">Slot A   : 8:00 to 9:00</option>
									<option value="9">Slot B  : 9:00 to 10:00</option>
									<option value="10">Slot C : 10:00 to 11:00</option>
									<option value="11">Slot D : 11:00 to 12:00</option>
									<option value="12">Slot E : 12:00 to 13:00</option>
									<option value="13">Slot F : 13:00 to 14:00</option>
									<option value="14">Slot G : 14:00 to 15:00</option>
									<option value="15">Slot H : 15:00 to 16:00</option>
									<option value="16">Slot I : 16:00 to 17:00</option>
									<option value="17">Slot G : 17:00 to 18:00</option>
								</select>
							</div><br><br>
								<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
								<link href="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/css/bootstrap.min.css"
									rel="stylesheet" type="text/css" />
								<script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.0.3/js/bootstrap.min.js"></script>
								<link href="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/css/bootstrap-multiselect.css"
									rel="stylesheet" type="text/css" />
								<script src="http://cdn.rawgit.com/davidstutz/bootstrap-multiselect/master/dist/js/bootstrap-multiselect.js"
									type="text/javascript"></script>
								<script type="text/javascript">
									$(function () {
										$('#lstFruits').multiselect({
											includeSelectAllOption: true
										});
									});
								</script>&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;&emsp;
							<button class="btn1 btn-1 btn-1e" name="reserve">RESERVE NOW</button>
							<!--input type="submit" name="reserve"-->
						</form>
						<!--strat-date-piker-->
						
						<script src="js/jquery-ui.js"></script>
								  <script>
										  $(function() {
											$( "#datepicker,#datepicker1,#datepicker2" ).datepicker();
										  });
								  </script>
						<!--//End-date-piker-->
					</div>
					<div class="clearfix"></div>
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
<?php
if (isset($_POST["reserve"]))
{
	$purpose=$_POST['purpose'];
	$check_in_date=$_POST['sdate1'];
	
	$start = date("Y-m-d", strtotime($check_in_date));
	
	$slot=$_POST['slot'];
	foreach ($_POST['slot'] as $all)
	{
		$sql1="select * from booked_hall where check_in_date='$start' and slot='$all' and hall_name='$hall'";
		$res=$conn->query($sql1);
		if($res->num_rows>0)
		{
			//echo"<script>alert('Hall has already been booked');</script>";
		}
		else {
		$sql="insert into booked_hall values ('$hall','','$email','$start','$purpose','$all')";
		$conn->query($sql);
	    //echo"<script>alert('Booking Confirmed');</script>";
		$to_email = '$email';
		$subject = 'BOOKING CONFIRMATION';
		$message = 'Your Hall has been booked $all';
		$headers = 'From: hbs@nitc.com';
		mail($to_email,$subject,$message,$headers);
		}
	}
}














?>
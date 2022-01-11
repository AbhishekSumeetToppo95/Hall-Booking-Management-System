<?php
session_start();

if(!isset($_SESSION['email'])){
	header("Location:../login/index.php");
}
?>
<!DOCTYPE html>
<html >

<head>
  <meta charset="UTF-8">
  <title>Hall Booking System</title>
  
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">

  
      <link rel="stylesheet" href="css/style.css">

  
</head>

<body >
  <div class='container'>
  <!--h1>
    <marquee bgcolor="#cc9966" behavior="alternate"> Welcome Class <?php echo "[- ".$em." -] ";?>! Please select your choice </marquee>
  </h1-->
 
  <div class="button-container">
  
	<div class='button -regular center'><a href="../updateprofile.php"><b>UPDATE PROFILE</a></div>
    <div class='button -regular center'><a href="../search.php"><b>BOOKING HALL</a></div>
    
    <div class='button -regular center'><a href="../cancelhall.php"><b>CANCEL BOOKING</a></div>
    
    
    <div class='button -regular center'><a href="../viewhall.php"><b>VIEW BOOKINGS</div>
	 <div class='button -regular center'><a href="../contact.php"><b>FEEDBACK</div>
	
	    <div class='button -regular center'><a href="../logout.php"><b>LOGOUT</a></div>

    
  </div>
</div>
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>

</html>

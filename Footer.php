<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Footer</title>
	<!---Links for the pages---->
<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="icons/css/all.css">
	<link rel="stylesheet" type="text/css" href="animate.min.css">

	<!--Script links--->
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

	<!--CSS Styling--->
	<style type="text/css">
	a{
		text-decoration: none;
		color: black;
	}
	a:hover{
		color: black;
	}
	i{
		font-size: 20px;
		padding-right: 8px;
	}
	.top{
		border-radius: 50%;
		background-color: white;
		box-shadow:3px 3px 20px grey!important;
		width: 55%;
		margin: 0 auto;
		height: 70%;
	}
	.fas{
		position: relative;
		top: 15px;
		left: 40px;
		font-size: 50px;
	}
	</style>
</head>

<body>

<!--Footer for all the pages----->
<div class="row" style="width:101%; margin-top: 150px;">
<div class="col-md-1" style="height:400px; background-color:rgb(0,0,0,0.1);">
</div>
<div class="col-md-4" style="height:400px; background-color:rgb(0,0,0,0.1)">
	<h3 >Support</h3><a href="contact_page.php"><p >GetHelp</p></a><a href="updatedabout.php"><p>Jayden & Alexis Care</p></a><a href="updatedabout.php"><p>Manage Jayden & Alexis</p></a><a href="Services_page.php" target="_blank"><p>Online Store</p></a><a href="Services_page.php" target="_blank"><p>E-shop</p></a>
</div>
<div class="col-md-4" style="height:400px; background-color:rgb(0,0,0,0.1)">
	<h3>Company</h3><a href="updatedabout.php" target="_blank"><p>About Us</p></a><a href="updateduserpage.php" target="_blank"><p>Register</p></a><a href="contact_page.php" target="_blank"><p>Contact Us</p></a><a href="Services_page.php" target="_blank"><p>Services</p></a>
	<h5>Contact Us:</h5>
	<h5>09074758484</h5>
</div>
<div class="col-md-3" style="height:400px; background-color:rgb(0,0,0,0.1)">
	<h2 >FOR SELLERS AROUND THE WORLD</h2>
	<a href=""><i class="fab fa-facebook"></i></a>
	<i class="fab fa-instagram"></i>
	<i class="fab fa-twitter"></i>
	<i class="fab fa-youtube"></i>
	<i class="fab fa-facebook"></i>
	<i class="fab fa-whatsapp"></i>
</div>
</div>
<div class="row" style="background-color:rgb(0,0,0,0.1); width:101%;" id="frame">
	<div class="col-md-2"></div>
	<div class="col-md-2"></div>
     <div class="col-md-8">
     	<h2>Our Location</h2>
</iframe width="500" height="300">
 <iframe id="frame" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.425365583154!2d3.355822414449723!3d6.593936724170688!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x103b9238b4f2d6b7%3A0x68101f84bba0f4!2s2%20Irewole%20St%2C%20Opebi%20101233%2C%20Lagos!5e0!3m2!1sen!2sng!4v1632486385013!5m2!1sen!2sng" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"></iframe></iframe>
     </div>
     </div>

	<div class="row" style="background-color:rgb(0,0,0,0.1); width:101%;">
	<div class="col-md-10">
		<hr style="width: 90%; border-color:#bbb;">
			<p>Copyrights&copy;2021. All Rights reserved &nbsp;&nbsp;&nbsp;&nbsp;<a href="#" target="_blank" onclick="openpage3(event)">Site Map</a>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	</div>
	<div class="col-md-2" style=" padding:15px;">
		<div class="top">
			<a href="Updatedversion.php"><i class="fas fa-long-arrow-alt-up"></i></a>
		</div>
	</div>
</div>

<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script>
	$(document).ready(function(){
     $("#frame").hide()

	})
	function openpage3(event){
		event.preventDefault();
		 $("#frame").show()
	}
</script>
		


</body>
</html>
<?php 
ob_end_flush();
?>

<?php 
session_start();
if(!isset( $_SESSION['user_email']) || $_SESSION['user_type']!='buyer'){
	header("Location :Updatedversion.php?msg=Successfully logged out");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Services Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!--Links For The Page--->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="icons/css/all.css">
		<link rel="stylesheet" type="text/css" href="contact_page.css">
		<link rel="stylesheet" type="text/css" href="animate.min.css">

		<!--Script For the page-->
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

		<!--CSS Styling-->
		<style type="text/css">
		body{height: 360vh}
			div{border: 0px solid black; min-height: 100px;}
			.firstdiv{
              padding: 10px;
			}
			.seconddiv{
				border-radius: 20px;
				width: 100%;
				height: 90;
			}
			.divimage{
			padding: 12px;
			border:0px solid black;
		}
		.divimage:hover{
			transform: translateY(-20px);
			transition: 0.9s;
		}
		</style>
    
</head>
<body>
<div class="container-fluid">
			<div class="container-fluid">
			<header class="row navbar fixed-top navbar-light bg-light" id="row_first" style="background-color:#f1f1f1!important; padding:10px; overflow:hidden;">
			<div class="col-md-4" id="head">
			<h3 id="h1tag" class="animate__animated animate__wobble">Jayden & Alexis</h3>
		</div>
			<div class="col-md-6">
				<ul style="padding: 2px; width:100%; display:flex;">
						<li><a href="Updatedversion.php">HOME</a></li>
						<li><a href="updatedabout.php" target="_blank">ABOUT</a></li>
						<li><a href="contact_page.php" target="_blank">CONTACT US</a></li>
						<li><a href="updateduserpage.php" target="_blank">Register</a></li>
					</ul>
			</div>
			<div class="col-md-2">
				<a href="Userbiopage.php" target="_blank" style="color:black;"><i class="fa fa-user" style="font-size:20px;"></i></a>
				<i class="fas fa-shopping-cart" style="font-size:20px;"></i>
				<a href="loginpage.php" target="_blank" style="color:black; text-decoration:none; font-weight:bold;">LogIn</a>
		</header>
	</div>

  <div class="row">
  	<div class="col-md-12">
  		<h4 align="center" style="padding-top: 15px;">OUR SERVICES</h4>
  	</div>
  </div>



<!---Nav Part--->
<script src="Services.js"></script>  

 <div class="row">
	<div class="col-md-3 divimage">
			<img src="images/image20.jpeg" style="width:100%; height:100%" class="imageclick" alt="The image could not be displayed due to connection issues"> 
			<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Snicker</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>10,900.00</p>
	</div>
	<div class="col-md-3 divimage">
			<img src="images/image21.jpeg" style="width:100%; height:100%" id="imageclick1" alt="The image could not be displayed due to connection issues"> 
			<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Canvas</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>7000.00</p>
	</div>
	<div class="col-md-3 divimage">
			<img src="images/image22.jpeg" style="width:100%; height:100%" id="imageclick2" alt="The image could not be displayed due to connection issues"> 
				<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Orlanda</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>20,900.00</p>
	</div>
	<div class="col-md-3 divimage">
			<img src="images/image18.jpeg" style="width:100%; height:100%" id="imageclick3" alt="The image could not be displayed due to connection issues"> 
			<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Srink</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>12,900.00</p>
	</div>
</div>


 <div class="row">
 	<div class="col-md-12"></div>
 </div>

 <div class="row">
	<div class="col-md-3 divimage">
			<img src="images/hoodie1.jpeg" style="width:100%; height:100%" alt="The image could not be displayed due to connection issues"> 
			<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Snicker</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>10,900.00</p>
	</div>
	<div class="col-md-3 divimage">
			<img src="images/hoodie2.jpeg" style="width:100%; height:100%" alt="The image could not be displayed due to connection issues"> 
			<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Canvas</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>7000.00</p>
	</div>
	<div class="col-md-3 divimage">
			<img src="images/hoodie4.jpeg" style="width:100%; height:100%" alt="The image could not be displayed due to connection issues"> 
				<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Orlanda</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>20,900.00</p>
	</div>
	<div class="col-md-3 divimage">
			<img src="images/hoodie5.jpeg" style="width:100%; height:100%" alt="The image could not be displayed due to connection issues"> 
			<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Srink</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>12,900.00</p>
	</div>
</div>


 <div class="row">
 	<div class="col-md-12"></div>
 </div>


 <div class="row">
	<div class="col-md-3 divimage">
			<img src="images/joggers.jpeg" style="width:100%; height:100%" alt="The image could not be displayed due to connection issues"> 
			<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Snicker</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>10,900.00</p>
	</div>
	<div class="col-md-3 divimage">
			<img src="images/joggers2.jpeg" style="width:100%; height:100%" alt="The image could not be displayed due to connection issues"> 
			<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Canvas</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>7000.00</p>
	</div>
	<div class="col-md-3 divimage">
			<img src="images/joggers3.jpeg" style="width:100%; height:100%" alt="The image could not be displayed due to connection issues"> 
				<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Orlanda</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>20,900.00</p>
	</div>
	<div class="col-md-3 divimage">
			<img src="images/joggers4.jpeg" style="width:100%; height:100%" alt="The image could not be displayed due to connection issues"> 
			<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Srink</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>12,900.00</p>
	</div>
</div>

<div class="row">
 	<div class="col-md-12"></div>
 </div>

 <div class="row">
	<div class="col-md-3 divimage">
			<img src="images/image26.jpeg" style="width:100%; height:100%" alt="The image could not be displayed due to connection issues"> 
			<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Snicker</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>10,900.00</p>
	</div>
	<div class="col-md-3 divimage">
			<img src="images/image27.jpeg" style="width:100%; height:100%" alt="The image could not be displayed due to connection issues"> 
			<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Canvas</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>7000.00</p>
	</div>
	<div class="col-md-3 divimage">
			<img src="images/image28.jpeg" style="width:100%; height:100%" alt="The image could not be displayed due to connection issues"> 
				<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Orlanda</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>20,900.00</p>
	</div>
	<div class="col-md-3 divimage">
			<img src="images/image29.jpeg" style="width:100%; height:100%" alt="The image could not be displayed due to connection issues"> 
			<p style="font-size: 12px; font-weight:bold 6px;">NEW</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;">Srink</p>
		<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span>12,900.00</p>
	</div>
</div>

<div class="row">
 	<div class="col-md-12"></div>
 </div>


<!---Footer Part--->
<div class="row" >
<div class="col-3" style="height:400px; background-color:rgb(0,0,0,0.6)">
<h3 style="color:white;">Explore</h3><p style="color:white;">Shoes</p><p style="color:white;">Hoodies</p><p style="color:white;">Shirts</p><p style="color:white;">Snickers</p><p style="color:white;">Cardigans</p><p style="color:white;">Trainers</p><p style="color:white;">Joggers</p>
</div>
<div class="col-3" style="height:400px; background-color:rgb(0,0,0,0.6)">
	<h3 style="color:white;">Support</h3><p style="color:white;">GetHelp</p><p style="color:white;">Jayden & Alexis Care</p><p style="color:white;">Manage Jayden & Alexis</p><p style="color:white;">Online Store</p><p style="color:white;">E-shop</p>
</div>
<div class="col-3" style="height:400px; background-color:rgb(0,0,0,0.6)">
	<h3 style="color:white;">Company</h3><p style="color:white;">About Us</p><p style="color:white;">Register</p><p style="color:white;">Contact Us</p><p style="color:white;">Services</p>
</div>
<div class="col-3" style="height:400px; background-color:rgb(0,0,0,0.6)">
	<h2 style="color:white;">FOR SELLERS AROUND THE WORLD</h2>
	<img src="images/facebook_logo2.png" width="15%;" >
			<img src="images/instagram_logo2.png" width="15%;">
			<img src="images/twitter_icon2.png" width="15%;"></p>
</div>
</div>
<div class="row" style="background-color:rgb(0,0,0,0.6);">
	<div class="col-md-12">
		<hr style="width: 90%; border-color:#bbb;">
			<p style="color:white;">Copyrights&copy;2021. All Rights reserved &nbsp;&nbsp;&nbsp;&nbsp;Site Map&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</p>
	</div>
</div>
		</div>

</div>

	

</body>
</html>
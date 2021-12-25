<?php
include("projectinfo.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo MY_APP_NAME?></title>


	<!--Links for the page--->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="icons/css/all.css">
		<link rel="stylesheet" type="text/css" href="contact_page.css">
		<link rel="stylesheet" type="text/css" href="animate.min.css">

		<!--Script For the page-->
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

		<!--CSS Styling-->
		<style>
			div{min-height: 100px; border: 0px solid black;}
			.divimage:hover{
			transform: translateY(-20px);
			transition: 0.9s;
		}
		#signbutton{
     	width: 40%;
     	height: 10%;
     	border-radius: 5px;
     	position: relative;
     	left: 150px;
     	padding: 8px;
     	border: none;
     	background-color: rgba(0,65,56,43);
     	transform: translate(20px);
     	color: #ccc;
     }
     #signbutton:hover{
     	background-color: rgba(0,0,0,0.4);
     	transition: 0.5s;

     }
		</style>
</head>
<body>
<div class="container">

	<!--Header Part-->
	<header class="row navbar fixed-top navbar-light bg-light" id="row_first" style="background-color:#f1f1f1!important; padding:10px; overflow:hidden;">
			<div class="col-md-4" id="head">
			<a href="index.php" target="_blank"><h3 id="h1tag" class="animate__animated animate__wobble"><?php echo MY_APP_NAME?></h3></a>
		</div>
			<div class="col-md-6">
				<ul style="padding: 2px; width:100%; display:flex;">
						<li><a href="index.php" target="_blank">HOME</a></li>
						<li><a href="updatedabout.php" target="_blank">ABOUT</a></li>
						<li><a href="updateduserpage.php" target="_blank">Register</a></li>
						<li> <a href="logoutpage.php" target="_blank" style="color:black; text-decoration:none; font-weight:bold;"><?php if(isset($_SESSION['user_name'])){?>Logout<?php }?></a></li>
					</ul>
			</div>
			<div class="col-md-2">
				<a href="showcart.php"><i class="fas fa-shopping-cart" style="font-size:20px;"></i></a>
		</header>
<div class="row">
	<div class="col-md-12"></div>
</div>
<div class="row">
	<div class="col-md-12"></div>
</div>
<div class="row">
	<div class="col-md-12">
		<h1 align="center">Verification Incomplete</h1>
	</div>
</div>

<?php 

include ("Footer.php")
?>	
</body>
</html>
<!--End of Page-->
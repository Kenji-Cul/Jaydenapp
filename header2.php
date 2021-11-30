<?php 
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Header 2</title>
	<!--Links for the page--->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="Updatedversion.css">
	<link rel="stylesheet" type="text/css" href="icons/css/all.css">
	<link rel="stylesheet" type="text/css" href="animate.min.css">

	<!--Script link--->
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

	<!--CSS Styling--->
	<style type="text/css">
		div{min-height: 100px;}
	</style>
</head>
<body>
<div class="container-fluid">

	<!---Header Part of all the pages---->
			<header class="row navbar fixed-top navbar-light bg-light" id="row_first" style="background-color:#f1f1f1!important; padding:10px; overflow:hidden;">
			<div class="col-md-3" id="head">
			<h3 id="h1tag" class="animate__animated animate__wobble">Jayden & Alexis</h3>
		</div>
			<div class="col-md-7">
				<ul style="padding: 2px; width:100%; display:flex;">
						<li><a href="Updatedversion.php">HOME</a></li>
						<li><a href="updatedabout.php" target="_blank">ABOUT</a></li>
						<li><a href="Shirts.php" target="_blank">SERVICES</a></li>
						<li><a href="updateduserpage.php" target="_blank">Register</a></li>
					</ul>

			</div>
			<div class="col-md-2">
				<i class="fas fa-shopping-cart" style="font-size:20px;"></i>
				
		</header>
	</div>
</body>
</html>
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
			<a href="index.php" style="color:black;"><h3 id="h1tag" class="animate__animated animate__wobble"><?php echo MY_APP_NAME?></h3></a>
		</div>
			<div class="col-md-7">
				<ul style="padding: 2px; width:100%; display:flex;">
						<li><a href="index.php">HOME</a></li>
						<li><a href="updatedabout.php">ABOUT</a></li>
						<li><a href="updateduserpage.php">Register</a></li>
					</ul>

			</div>
			<div class="col-md-2">
				<a href="showcart.php" style="color:black;"><i class="fas fa-shopping-cart" style="font-size:20px;"></i></a>
				
		</header>
	</div>
</body>
</html>
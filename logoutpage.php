<?php 
session_start();
session_unset();
session_destroy();

header("Location: Updatedversion.php?msg=Successfully logged out");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>logoout page</title>

	
	<!--Links for the logout page--->
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="icons/css/all.css">
		<link rel="stylesheet" type="text/css" href="animate.min.css">

		<!--Script link--->
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

		<!--CSS Styling-->
		<style type="text/css">
		div{border: 1px solid black; min-height: 100px;}
		 #loginbutton{
     	width: 40%;
     	height: 40%;
     	position: relative;
     	left: 150px;
     	padding: 8px;
     	border: none;
     	background-color: rgba(0,65,56,43);
     	transform: translate(20px);
     	color: #ccc;
     }
     #loginbutton:hover{
     	background-color: rgba(0,0,0,0.4);
     	transition: 0.5s;

     }
		</style>
</head>
<body>
</div>
</body>
</html>
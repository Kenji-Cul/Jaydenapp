<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Header</title>

	<!--Links for the page--->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="contact_page.css">
	<link rel="stylesheet" type="text/css" href="icons/css/all.css">
	<link rel="stylesheet" type="text/css" href="animate.min.css">

	<!--Script link for the page--->
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

	<!--CSS Styling-->
	<style type="text/css">
		div{min-height: 100px;}
	</style>
</head>
<body>
	<div class="container-fluid">

		<!---Another header for all the pages---->
<div class="row" id="row_first" style="background-color:#f1f1f1!important; padding:10px;">
			<div class="col-5" id="head">
			<a href="Updatedversion.php" target="_blank" style="color:black;"><h3 id="h1tag" class="animate__animated animate__wobble">Jayden & Alexis</h3></a>
		</div>
			<div class="col-5">
				<div class="menu-icon">
					<h4 style="color:black;">Menu</h4>
				<i class="fas fa-bars" style="font-size:40px;"></i>
			</div>
			</div>
			<div class="col-2">
				<a href="showcart.php"><i class="fas fa-shopping-cart" style="font-size:20px; padding-left: 15px;"></i></a>
				
		</div>
	</div>


	<!--Nav Side-->
<div class="row" style="border-bottom:2px solid rgba(203,32,38,0.9); background-color:rgb(0,0,0,0.6);" id="second_row">
	<div class="col-md-12">
		<ul>
						<li><a href="Updatedversion.php">HOME</a></li>
						<li><a href="updatedabout.php" target="_blank">ABOUT</a></li>
						<li><a href="Shoes.php" target="_blank">SERVICES</a></li>
						<li><a href="updateduserpage.php" target="_blank">Register</a></li>
					</ul>
	</div>
</div>

</div>
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script>
	$(document).ready(function(){
		$("#second_row").hide()
$(".menu-icon").click(function(){
 $("#second_row").show().addClass('animate__animated animate__backInDown')
})
$(".menu-icon").hover(function(){
	$(this).css('background-color','white')
	$(".fa-bars").css('color','rgba(203,32,38,0.9)')
},function(){
	$(this).css('background-color','rgba(203,32,38,0.9)')
	$(".fa-bars").css('color','white')
})

	})
	
</script>
</body>
</html>

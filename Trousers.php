<?php 
include("projectinfo.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Hoodies Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="icons/css/all.css">
		<link rel="stylesheet" type="text/css" href="contact_page.css">
		<link rel="stylesheet" type="text/css" href="animate.min.css">
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
		<style>
			div{min-height: 100px; border: 0px solid black;}
			.divimage:hover{
			transform: translateY(-20px);
			transition: 0.9s;
		}
		</style>
</head>
<body>
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
						<li><a href="Services_page.php" target="_blank">SERVICES</a></li>
						<li><a href="updateduserpage.php" target="_blank">Register</a></li>
					</ul>
			</div>
			<div class="col-md-2">
				<a href="biopage.php" target="_blank" style="color:black;"><i class="fa fa-user" style="font-size:20px;"></i></a>
				<i class="fas fa-shopping-cart" style="font-size:20px;"></i>
				<a href="logoutpage.php" target="_blank" style="color:black; text-decoration:none; font-weight:bold;">Logout</a>
		</header>
<div class="row">
	<div class="col-md-12"></div>
</div>
<div class="row">
	<div class="col-md-12"></div>
</div>
<div class="row">
	<div class="col-md-12">
		<h1 align="center">HOODIES</h1>
		<hr style="width:20%; color:rgba(203,32,38,0.9); border-top:4px solid black; border-radius:10px;">
	</div>
</div>

		<div class="row" class="divimage">
	<?php 
	 $sell = new user;
  $result = $sell->viewproduct();
  if(!empty($result)){
  foreach ($result as $key => $value) {
   
   
  	
  
	?>
	<div class="col-md-3 divimage" style="border:0px solid black;  border-radius:10px; margin-top: 70px;">
			<?php if(empty($value['product_piece'])){?>
			<img src='images/trouser_icons2.jpg' style="height:100%; width:100%;">
		<?php }else{?>
			<img src="uploads/<?php echo $value['product_piece']?>" style="height:100%; width:100%;">
		<?php }?>
			<p style="font-size: 20px; font-weight:bold;"><span><?php echo $value['cardigans_name']?></span></p>
<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span><?php echo $value['cardigans_price'].".0";?></p>
<a href="#" class="btn btn-primary">Buy</a>
	</div>
	
<?php
}
}
?>	
	
</div>	
</div>



</body>
</html>
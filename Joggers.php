<?php 
session_start();
include("projectinfo.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Trousers Page</title>

	<!--links for the page--->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="icons/css/all.css">
		<link rel="stylesheet" type="text/css" href="contact_page.css">
		<link rel="stylesheet" type="text/css" href="animate.min.css">

		<!--Script link--->
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

		<!--CSS Styling-->
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

	<!--Header Part--->
	<header class="row navbar fixed-top navbar-light bg-light" id="row_first" style="background-color:#f1f1f1!important; padding:10px; overflow:hidden;">
			<div class="col-md-4" id="head">
			<a href="Updatedversion.php" target="_blank"><h3 id="h1tag" class="animate__animated animate__wobble">Jayden & Alexis</h3></a>
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
				<a href="showcart.php"><i class="fas fa-shopping-cart" style="font-size:20px;"></i></a>
				<a href="logoutpage.php" target="_blank" style="color:black; text-decoration:none; font-weight:bold;"><?php if(isset($_SESSION['user_name'])){?>Logout<?php }?></a>
		</header>
<div class="row">
	<div class="col-md-12"></div>
</div>
<div class="row">
	<div class="col-md-12"></div>
</div>
<div class="row">
	<div class="col-md-12">
		<h1 align="center">TROUSERS</h1>
		<hr style="width:20%; color:rgba(203,32,38,0.9); border-top:4px solid black; border-radius:10px;">
	</div>
</div>
<!--For the products and images from database---->
		<div class="row" class="divimage">
	<?php 
	 $sell = new user;
  $result = $sell->viewproduct('Trousers');
  if(!empty($result)){
  foreach ($result as $key => $value) {
   
   
  	
  
	?>
	<div class="col-md-3 divimage" style="border:0px solid black;  border-radius:10px; margin-top: 50px;">
		<?php if(empty($value['product_piece'])){?>
			<img src='images/trouser.jpg' style="height:100%; width:100%;">
		<?php }else{?>
			<img src="uploads/<?php echo $value['product_piece']?>" style="height:80%; width:100%;">
		<?php }?>
		<p style="font-size:20px; font-weight: bold;"><span><?php echo $value['product_name']?></span></p>
<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span><?php echo number_format($value['selling_price']);?></p>
<a href="cart.php?productid=<?php echo  $value['product_id'];?>" class="btn btn-primary">ADD TO CART    </a>
	</div>
	
<?php
}
}
?>	
	
</div>


 <div class="row">
 	<div class="col-md-12"></div>
 </div>

</div>

<?php 

include ("Footer.php")
?>	

</body>
</html>
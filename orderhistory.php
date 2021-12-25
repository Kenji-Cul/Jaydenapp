<?php
session_start();
if(!isset($_SESSION['user_id']) || !isset($_SESSION['user_email'])){
	header("Location:index.php");
}
include("projectinfo.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Order History</title>


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
						<li><a href="index.php">HOME</a></li>
						<li><a href="updatedabout.php">ABOUT</a></li>
						<li><a href="updateduserpage.php">Register</a></li>
						<li> <a href="logoutpage.php" style="color:black; text-decoration:none; font-weight:bold;"><?php if(isset($_SESSION['user_name'])){?>Logout<?php }?></a></li>
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
		<h1 align="center">YOUR ORDERS</h1>
		<hr style="width:20%; color:rgba(203,32,38,0.9); border-top:4px solid black; border-radius:10px;">
	</div>
</div>

<!--Images and products for the shoes--->
<div class="row" class="divimage">
	<?php 
	 
   $obj = new User;
   if(isset($_SESSION['user_id'])){
	$objuser = $obj->vieworderhistory($_SESSION['user_id']);
}else{
	echo "<h1>You have no orders yet</h1>";
}
       foreach ($objuser as $key => $value){
       	$user = $obj->getproduct($value['product_id']);
   
  	
  
	?>
	<div class="col-md-3 divimage" style="border:0px solid black;  border-radius:10px; margin-top: 50px;">
		<?php if(empty($user['product_piece'])){?>
			<img src='images/shoespic.png' style="height:100%; width:100%;">
		<?php }else{?>
			<img src="uploads/<?php echo $user['product_piece']?>" style="height:80%; width:100%;">
		<?php }?>
			<p style="font-size: 20px; font-weight:bold;"><span><?php echo $user['product_name']?></span></p>
<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span><?php echo number_format($user['selling_price']);?></p>
	</div>
	
<?php
}
?>	
	
</div>	
		
</div>

<?php 

include ("Footer.php")
?>	
</body>
</html>
<!--End of Page-->
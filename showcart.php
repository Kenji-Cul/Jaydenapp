<?php 
ob_start();
session_start(); 
include("projectinfo.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Showcarts Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="icons/css/all.css">
	<link rel="stylesheet" type="text/css" href="Updatedversion.css">
	<style type="text/css">
		.divimage{
			padding: 4px;
			border:0px solid black;
		}
		.divimage:hover{
			transform: translateY(-20px);
			transition: 0.9s;
		}
		#signbutton{
     	width: 90%;
     	height: 7%;
     	position: relative;
     	left: 150px;
     	border-radius: 9px;
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
	<div class="container-fluid">
		<?php 
         include("header2.php");
		?>
		<div class="row">
	<div class="col-md-12" style="margin-top: 40px;">
		<h1 align="center">YOUR CART ITEMS</h1>
		<hr style="width:20%; color:rgba(203,32,38,0.9); border-top:4px solid black; border-radius:10px;">
	</div>
</div>

<div class="row" class="divimage">
<?php
if(empty($_SESSION['cart'])){
	echo "<h2>No items in your cart yet</h2>";
}
else{
	$obj = new User;

	foreach($_SESSION['cart'] as $productId=>$qty){
		$objuser = $obj->getproduct($productId);
		//var_dump($objuser);
?>
<div class="col-md-3 divimage1 divimage" id="image" style="border:0px solid black;  border-radius:10px; margin-top: 100px; margin-bottom:90px;">
<img src="uploads/<?php echo $objuser['product_piece']?>" style="height:80%; width:100%;">
<p style="font-size: 20px; font-weight:bold;"><span><?php echo $objuser['product_name']?></span></p>
<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span><?php echo number_format($objuser['selling_price']);?></p>
</div>
<?php 
}
}
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(isset($_POST['submit'])){
	$obj = new User;
	if(!empty($_SESSION['user_email'])){
		$output2=$obj->viewofuser($_SESSION['user_email']);
	}
		foreach($_SESSION['cart'] as $productId=>$qty){
			$objuser = $obj->getproduct($productId);
			 $orderref="JAY".time();
	$objusers = $obj->insertorder($productId,$orderref,$objuser['selling_price'],$_SESSION['user_id']);
		$_SESSION['ref']=$orderref;
		header("Location:orderpage.php");
        }

    }
}
?>
</div>
<div class="row">
	<div class="col-md-3">
		<form action="" method="POST">
			<?php if(isset($_SESSION['cart'])){?>
<input type="submit" name="submit" value="CHECKOUT" class="btn btn-primary">
<?php }?>
</form>
	</div>
	<div class="col-md-6">
	</div>
	<div class="col-md-3"></div>
</div>
</div>
<?php ob_end_flush();?>
</body>
</html>

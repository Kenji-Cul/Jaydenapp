<?php 
session_start();
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
include("projectinfo.php");
if(empty($_SESSION['cart'])){
	echo "<h2>No items in your cart yet</h2>";
}
else{
	$obj = new User;

	foreach($_SESSION['cart'] as $productId=>$qty){
		$objuser = $obj->getproduct($productId);
?>
<div class="col-md-3 divimage1 divimage" style="border:0px solid black;  border-radius:10px; margin-top: 100px; margin-bottom:90px;">
<img src="uploads/<?php echo $objuser['product_piece']?>" style="height:80%; width:100%;">
<p style="font-size: 20px; font-weight:bold;"><span><?php echo "$qty of ".$objuser['product_name']?></span></p>
<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span><?php echo number_format(($objuser['selling_price'] * $qty));?></p>
<a href="orderpage.php?productid=<?php echo  $objuser['product_id'];?>" class="btn btn-primary">CHECKOUT</a>
</div>
<?php 
}
}
?>
</div>
</div>
</body>
</html>

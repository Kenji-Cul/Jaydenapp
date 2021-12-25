<?php 
include("projectinfo.php");
?>

<!--Page for viewing all the products-->
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Products Page</title>

	<!--Links for the products--->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="icons/css/all.css">
		<link rel="stylesheet" type="text/css" href="animate.min.css">

		<!--Script link for the page--->
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
		<!---CSS Styling-->
		<style type="text/css">
			.product{
				width: 80%;
				height: 100%;
				background-color: #f3f3f3;
				text-align: center;
				
			}
		</style>
</head>
<body>
<div class="container">
   <?php 

include("header2.php");
   ?>
	<div class="row" style="height:100px; margin-top: 40px;">
		<div class="col-md-12">
			<div class="product"><h4>Your Products</h4><hr style="width:20%; color:rgba(0,65,56,43); border-top:10px solid rgba(0,65,56,43); border-radius:20px;"></div>
		</div>
	</div>

<!--Table for the joggers product--->
	<div class="row" style="background-color:rgba(0,0,0,0.6);" class="img-fluid">
		<div class="col-md-12">
		<table class="table table-striped">
			<thead>
				<th>S/N</th>
				<th>Product Name</th>
				<th>Description</th>
				<th>Product price</th>
				<th>Category</th>
			</thead>
			<tbody>
		<?php 
    $obj = new user;
    $productview = $obj->viewproducts();
     $counter = 0;
    if(!empty($productview)){
       foreach ($productview as $key => $value) {
      
		?>
				<tr>
					<td><?php echo ++$counter?></td>
					<td><?php echo $value['product_name']?></td>
					<td><?php echo $value['description']?></td>
					<td><span>&#8358;<?php echo $value['selling_price']?></span></td>
					<td><?php echo $value['category']?></td>
					<td><a href="deleteproduct.php?productid=<?php echo $value['product_id'] ?>" class="btn btn-danger">Delete</a>
					</td>
					<td><a href="updateproduct.php?productid=<?php echo $value['product_id'] ?>" class="btn btn-primary">Update</a>
					</td>
				</tr>
				<?php 
             	
       }
    }
				?>
			</tbody>
		</table>
	</div>
	</div>







</div>
</body>
</html>
<!--End of the html page--->
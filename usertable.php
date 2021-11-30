<?php 
include("projectinfo.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Users Page</title>

	<!--Links For The Page-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="icons/css/all.css">
		<link rel="stylesheet" type="text/css" href="animate.min.css">

		<!--Javascript Link For the page-->
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

		<!--CSS Styling-->
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
			<div class="product"><h4>USERS</h4><hr style="width:20%; color:rgba(0,65,56,43); border-top:10px solid rgba(0,65,56,43); border-radius:20px;"></div>
		</div>
	</div>
	<div class="row" style="background-color:rgba(0,0,0,0.6);" class="img-fluid">
		<div class="col-md-12">
		<table class="table table-striped">
			<thead>
				<th>S/N</th>
				<th>Username</th>
				<th>Email</th>
				<th>Date Joined</th>
				<th>Action</th>
			</thead>
			<tbody>
				<?php 
                 $obj = new user;
                 $result = $obj->viewuser();
                 if(!empty($result)){
                 foreach ($result as $key => $value) {
                 	
                   
				?>
				<tr>
					<td><?php echo $value['user_id']?></td>
					<td><?php echo $value['username']?></td>
					<td><?php echo $value['email']?></td>
					<td><?php echo date('jS M, Y',strtotime($value['created_at']));?></td>
					<td><a href="delete.php?userid=<?php echo $value['user_id'] ?>" class="btn btn-danger" id="del">Delete</a></td>
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
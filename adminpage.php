<?php 
session_start();
include("projectinfo.php");
if(isset($_SESSION['user_name']) || isset($_SESSION['role_id'])){
}else{
	header("Location:index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo MY_APP_NAME?></title>

	<!----Links For The Page-->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="icons/css/all.css">
		<link rel="stylesheet" type="text/css" href="contact_page.css">
		<link rel="stylesheet" type="text/css" href="animate.min.css">

	<!--Script Link--->
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

		<!--CSS Styling-->
		<style type="text/css">
		div{border: 0px solid black; min-height: 100px;}
			.card-body{
				background-color:#fff ;
			}
			.row{
				background-color:#fff ;
			}
			.card{
				background-color:transparent ;
			}
		.divimage{
			padding: 12px;
			border:0px solid black;
		}
		.divimage:hover{
			transform: translateY(-20px);
			transition: 0.9s;
		}
		.list:hover{
	background-color: #f3f3f3;
}
.list2{
	padding: 8px;
}
.list{
   width: 180px;
}
input{
	padding: 14px 10px 14px 50px;
	width: 100%;
	background-color: #fcfcfc;
	border: 1px solid #00000033;
	outline: none;
	letter-spacing: 1px;
	transition: 0.3s;
	border-radius: 3px;
	color: #333;
	margin-bottom: 10px;
}
textarea{
	padding: 14px 10px 14px 50px;
	width: 100%;
	background-color: #fcfcfc;
	border: 1px solid #00000033;
	outline: none;
	letter-spacing: 1px;
	transition: 0.3s;
	border-radius: 3px;
	color: #333;
	margin-bottom: 10px;
}
select{
	padding: 14px 10px 14px 50px;
	width: 100%;
	background-color: #fcfcfc;
	border: 1px solid #00000033;
	outline: none;
	letter-spacing: 1px;
	transition: 0.3s;
	border-radius: 3px;
	color: #333;
	margin-bottom: 10px;
}
input:focus{
	-webkit-box-shadow: 0,0, 2px 1px #7ed32180;
	-moz-box-shadow: 0,0, 2px 1px  #7ed32180;
	box-shadow: 0,0, 2px 1px  #7ed32180;
	border: 1px solid #7ed321!important; }
	select:focus{
	-webkit-box-shadow: 0,0, 2px 1px #7ed32180;
	-moz-box-shadow: 0,0, 2px 1px  #7ed32180;
	box-shadow: 0,0, 2px 1px  #7ed32180;
	border: 1px solid #7ed321!important; }
	textarea:focus{
	-webkit-box-shadow: 0,0, 2px 1px #7ed32180;
	-moz-box-shadow: 0,0, 2px 1px  #7ed32180;
	box-shadow: 0,0, 2px 1px  #7ed32180;
	border: 1px solid #7ed321!important; }
	#signbutton{
     	width: 95%;
     	height: 8%;
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
	<!---Header Part--->
	<div class="container-fluid">
			<header class="row navbar fixed-top navbar-light bg-light" id="row_first" style="background-color:#f1f1f1!important; padding:10px; overflow:hidden; width:100%;">
			<div class="col-md-4" id="head">
			<h3 id="h1tag" class="animate__animated animate__wobble"><?php echo MY_APP_NAME?></h3>
		</div>
			<div class="col-md-6">
				<ul style="padding: 2px; width:100%; display:flex;">
						<li><a href="index.php" target="_blank">HOME</a></li>
						<li><a href="updatedabout.php" target="_blank">ABOUT</a></li>
						<li><a href="updateduserpage.php" target="_blank">Register</a></li>
					</ul>
			</div>
			<div class="col-md-2">
				<i class="fas fa-shopping-cart" style="font-size:20px;"></i>
				<ul>
					<li style="color:black;" id="lest"><i class="fa fa-user" style="color:black;"></i><a href="#">Profile</a></li>
					<ul class="list2" style="background-color: #fff; display: none; border-radius: 0px 0px 4px 4px;">
	<li class="list"><a href="logoutpage.php" target="_blank"><?php if(isset($_SESSION['user_name'])){echo "Log Out";}?></a></li>
				</ul>
				</ul>
		</header>
	</div>

<!---Javascript Tags--->
<script type="text/javascript">
	$(document).ready(function(){
$("#lest").click(function(){
	$(".list2").css('display','block')
})
$(".list").click(function(){
	$(".list2").css('display','none')
})
	})
</script>

<div class="row">
	<div class="col-md-12"></div>
</div>

<div class="row">
	<div class="col-md-12">
<h2 align="center">PROFILE</h2>
		<hr style="width:20%; color:rgba(203,32,38,0.9); border-top:4px solid black; border-radius:10px;">
	</div>
</div>


<div class="row">
				<div class="col-md-12">
					<div class="card">
						<div class="card-body">
						<img src="images/userpng.png" width="20%" height="30%">
			</div>

<!--Username Part for the Admin--->
<div class="row">
	<div class="col-md-12">
		<h4 align="center" style="color:black;">Name: <?php if(isset($_SESSION['user_name'])){echo $_SESSION['user_name'];}?></h4>
	</div>
</div>

<!---Email Part of The Admin-->
<div class="row">
	<div class="col-md-12">
		<h4 align="center" style="color:black;">Email: <?php if(isset($_SESSION['user_email'])){
			echo $_SESSION['user_email'];
		}?></h4>
	</div>
</div>


<div class="row">
	<div class="col-md-4">
		<a href="products.php" class="btn btn-success">My Products</a>
		<a href="ordertable.php" class="btn btn-success">View Orders</a>
	</div>
	<div class="col-md-5">
	</div>
	<div class="col-md-3 product" id="prod2" style="min-height:300px; background-color: #f1f1f1; box-shadow:3px 3px 20px grey!important;">
		<h2>Add Products</h2>
		<!---Validation for the products--->
		<?php 
		if($_SERVER['REQUEST_METHOD']=='POST'){
  //validate
  $error =array();
  if(empty($_POST['category'])){
    $error[]= "Product field is required";
  }
  if(empty($_POST['price'])){
    $error[]= "Price field is required";
  }
  if(!empty($error)){
    echo "<ul class='alert alert-danger'>";
    foreach($error as $key =>$value){
       echo "<li>$value</li>";
    }
    echo "</ul>";
  }
  else{
  	$obj = new user;
  $product = $obj->addproduct($_POST['names'],$_POST['desc'],$_POST['price'],$_POST['category'],$_POST['quantity']);
  	echo $product;

}
}
		?>

		<!----Form for the products-->
		<form action="" method="POST" enctype="multipart/form-data">
		<select name="category">
			<option value=" ">Choose Product</option>
			<option value="Shoes">Shoes</option>
			<option value="Shirts">Shirts</option>
			<option value="Trousers">Trousers</option>
			<option value="hoodies">Hoodies</option>
		</select>
		<input type="text"  name="names" placeholder="Product Name"  id="textbox2">
		<label>Description:</label><textarea name="desc" rows="2" col="5"></textarea>
			<input type="text"  name="price" placeholder="Your Price"  id="textbox2">
			<input type="text"  name="quantity" placeholder="Quantity"  id="textbox2">
			<input type="file" name='image'>
			<input type="submit"  name="prod" value="Add Product Details" id="signbutton">
		</form>

		
	</div>
</div>


	

<!---Admin Buttons for checking of product and datails-->

<div class="row">
	<div class="col-md-12">
		
	</div>
</div>


 

</div>

</div>

<!---Script Part---->
<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
<script>
	function openpage(event){
		event.preventDefault();
    $(".hideguy").hide()
    $("#showguy").show().addClass('animate__animated animate__fadeIn')
	}
	function openpage1(event){
		event.preventDefault();
    $(".hideguy").show().addClass('animate__animated animate__fadeIn')
    $("#showguy").hide()
	}
	function openpage2(event){
		event.preventDefault();
    $(".hideguy").hide()
    $("#showguy").hide()
    $("#showguy2").show().addClass('animate__animated animate__fadeIn')
	}
	$(document).ready(function(){
		$("#showguy2").hide()
		 $("#showguy").hide()
	})
</script>
</div>
</body>
</html>
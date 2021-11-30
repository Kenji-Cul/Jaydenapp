<?php 
session_start();
include("projectinfo.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Home Page</title>
		<meta name="keywords" content="Jayden App, Jayden & Alexis Ventures, Ecommerce app,Ecommerce way,Online store,store online,create store online,Shop,Web store,buy shoes,buy shirts,buy hoodies,hoodies for dancers,shirts for work,need of wares,buy wares,website for selling shirts,websites for selling shoes,websites for selling wares,sites for selling wares,shoes,shirts,hoodies,trousers,casual wares,online wares">
		<meta name="description" content="Jayden & Alexis app is an online store and ecommerce app,.It helps shop sellers to have their shops online.">
		<meta name="author" content="Teibo Gideon">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="icons/css/all.css">
		<link rel="stylesheet" type="text/css" href="Updatedversion.css">
		<link rel="stylesheet" type="text/css" href="animate.min.css">
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
		<style>
			div{border: 0px solid black; min-height: 80px;}
			.great > *{
        transform: translateY(20px)!important;
        transition: transfrom 0.25s!important;
    }
    .great:hover{
       opacity:1!important;
    }
      .great > *{
    	transform: translateY(0)!important;
    }
    header{
    	width: 100%;
    }
		.divfour{
			background-image: url('images/image4.jpg');
			background-size: 100% 100%;
			animation: slider 9s infinite linear;
		}
		@keyframes slider{
                100%{background-image: url('images/image4.jpg');  }
                75%{background-image: url('images/image3.jpg');  }
                100%{background-image: url('images/image2.jpg');  }
		}
		.innerlay{
			width: 80%;
			height: 100%;
			background-color: transparent;
			margin: 0 auto;
		}
		.innerp{
			font-size: 60px;
			font-weight: bold 14px;
			color: black;
			line-height: 60px;
		}
		.innerp1{
			font-size: 80px;
			font-weight: bold;
			color: black;
			line-height: 80px;
		}
		.divimage{
			padding: 4px;
			border:0px solid black;
		}
		.divimage:hover{
			transform: translateY(-20px);
			transition: 0.9s;
		}
		ul li a:hover{
	color: rgba(203,32,38,0.9)!important;
	text-decoration: none!important;
}
.list:hover{
	background-color: #f3f3f3;
}
.list1:hover{
	background-color: #f3f3f3;
}
.list2{
	padding: 8px;
}
.list3{
	padding: 8px;
}
.list{
   width: 180px;
}
.list1{
   width: 180px;
}
ul li{
	display: inline-block;
	margin-right: 35px;
    list-style-type: none;
    padding: 12px;
    color: rgba(0,0,0,0.6);
    color: white;
}
		</style>
	</head>
	<body>
		<div class="container-fluid">
<!---Header Part--->	
					<div class="row">
			<header class="row navbar fixed-top navbar-light bg-light" id="row_first" style="background-color:#f1f1f1!important; padding:10px; overflow:hidden;">
			<div class="col-md-3" id="head">
			<h3 id="h1tag" class="animate__animated animate__wobble">Jayden & Alexis</h3>
		</div>

			<div class="col-md-3">
				<ul style="padding: 2px; width:100%; display:flex;">
<li><p style="color:black; font-weight:bold;"><?php if(isset($_SESSION['user_name'])){ echo "Hi,".$_SESSION['user_name'];}?></a></p></li>
<li style="color:black; font-weight:bolder;"><?php if(!empty($_SESSION['cart'])){
					echo count($_SESSION['cart']). " item(s)";
				}
				?></li>
					</ul>
			</div>
			<div class="col-md-1">
				<a href="showcart.php"><i class="fas fa-shopping-cart" style="font-size:20px;"></i></a>
			</div>
			<div class="col-md-2">
				<p>
				<ul>
					<li style="color:black;" id="lest"><a href="#">Explore</a></li>
					<ul class="list2" style="background-color: #fff; display: none; border-radius: 0px 0px 4px 4px;">
					<li class="list"><a href="Shoes.php" target="_blank">Shoes</a></li>
					<li class="list"><a href="Shirts.php" target="_blank">Shirts</a></li>
					<li class="list"><a href="Cardigans.php" target="_blank">Hoodies</a></li>
					<li class="list"><a href="Joggers.php" target="_blank">Trousers</a></li>
				</ul>
				</ul>
			</p>
		</div>
			<div class="col-md-3">
				<?php if(isset($_SESSION['user_name'])){?>
					<ul>
				<li style="list-style-type: none; color: rgba(0,0,0,0.6);"><a href="logoutpage.php" style="color:#aaa!important; font-weight:700; text-decoration:none!important; transition: 0.5s;">Logout</a></li></ul><?php }else{?>
			<ul>
					<li style="color:black;" id="lest1"><i class="fa fa-user" style="color:black;"></i><a href="#">Account</a></li>
					<ul class="list3" style="background-color: #fff; display: none; border-radius: 0px 0px 4px 4px;">
					<li class="list1"><a href="loginpage.php" target="_blank">Login</a></li>
					<li class="list1"><a href="Updateduserpage.php" target="_blank">Sign Up</a></li>
				</ul>
				</ul>
				<?php }?>
			</div>
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
$("#lest1").click(function(){
	$(".list3").css('display','block')
})
$(".list1").click(function(){
	$(".list3").css('display','none')
})
	})
</script>
						

<!--Image Slide Part-->
<div class="row" style=" margin-top:2%;">
	<div class="col-sm-12 divfour"  style="height:800px; margin:0; padding:0;">
	<div class="col-sm-12 great" style="height:100%;   background:rgba(0,0,0,0.1);flex-direction: column; align-items:center; justify-content: center; opacity:0;
				transition: opacity 0.25s; backdrop-filter:blur(5px); "><div class="innerlay">
					<h3 align="center" style="color:black; padding-top:50px; font-weight: bold;" >Jayden & Alexis Ventures</h3><hr style="border-top:3px solid #f1f1f1; width:40%;">
					<p align="center" class="innerp1">Your Online Shopping Destination</p>
					<p align="center" class="innerp">We offer you a<p>
						<p align="center"  class="innerp">Chance to get your <p align="center" class="innerp">Best outfits</p>
						<p align="center"  class="innerp">Here online</p>
				</div></div>
	</div>
      </div>


      
<!--Text Div-->
<div class="row">
	<div class="col-md-12">
		<h1 align="center" style="padding-top: 10px;">PRODUCTS</h1><hr style="width:20%; color:rgba(203,32,38,0.9); border-top:10px solid rgba(203,32,38,0.9); border-radius:20px;">
	</div>
</div>




<div class="row">
	<div class="col-md-3">
		<div style="display:grid;">
		<h5 style="display:inline;" align="center" id="shoes">Shoes</h5><hr style="border-top:3px solid black; width:60%;"></div>
</div>
<div class="col-md-3">
		<div style="display:grid;">
		<h5 style="display:inline;" align="center" id="shirts">Shirts</h5><hr style="border-top:3px solid black; width:60%;"></div>
	</div>
	<div class="col-md-3">
		<div style="display:grid;">
	<h5 style="display:inline;" align="center" id="trousers">Trousers</h5><hr style="border-top:3px solid black; width:60%;"></div>
</div>
<div class="col-md-3">
		<div style="display:grid;">
		<h5 style="display:inline;" align="center" id="hoodies">Hoodies</h5><hr style="border-top:3px solid black; width:60%;"></div>
	</div>
</div>

<div class="row" class="divimage">
	<?php 
	 $sell = new user;
  $result = $sell->viewofproduct('Shoes');
  if(!empty($result)){
  foreach ($result as $key => $value) {
   
   
  	
  
	?>
	<div class="col-sm-3 divimage shoeimage" style="border:0px solid black;  border-radius:10px; margin-top: 60px; margin-bottom:90px;">
		<?php if(empty($value['product_piece'])){?>
			<img src='images/shoespic.png' style="height:100%; width:100%;">
		<?php }else{?>
			<img src="uploads/<?php echo $value['product_piece']?>" style="height:80%; width:100%;">
		<?php }?>
			<p style="font-size: 20px; font-weight:bold;"><span><?php echo $value['product_name']?></span></p>
<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span><?php echo number_format($value['selling_price']);?></p>
<a href="cart.php?productid=<?php echo  $value['product_id'];?>" class="btn btn-primary">ADD TO CART</a>
	</div>
	
<?php
}
}
?>	

<!---Display for shirts-->
<?php 
	 $sell = new user;
  $result = $sell->viewofproduct('Shirts');
  if(!empty($result)){
  foreach ($result as $key => $value) {
   
   
  	
  
	?>
	<div class="col-sm-3 divimage1 divimage" style="border:0px solid black;  border-radius:10px; margin-top: 60px; margin-bottom:90px;">
		<?php if(empty($value['product_piece'])){?>
			<img src='images/shirtlogo.png' style="height:100%; width:100%;">
		<?php }else{?>
			<img src="uploads/<?php echo $value['product_piece']?>" style="height:80%; width:100%;">
		<?php }?>
			<p style="font-size: 20px; font-weight:bold;"><span><?php echo $value['product_name']?></span></p>
<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span><?php echo number_format($value['selling_price']);?></p>
<a href="cart.php?productid=<?php echo  $value['product_id'];?>" class="btn btn-primary">ADD TO CART</a>
	</div>
	
<?php
}
}
?>	

<!--Display for trousers--->
<?php 
	 $sell = new user;
  $result = $sell->viewofproduct('Trousers');
  if(!empty($result)){
  foreach ($result as $key => $value) {
   
   
  	
  
	?>
	<div class="col-sm-3 divimage2 divimage" style="border:0px solid black;  border-radius:10px; margin-top: 60px; margin-bottom:90px;">
		<?php if(empty($value['product_piece'])){?>
			<img src='images/trouser.jpg' style="height:100%; width:100%;">
		<?php }else{?>
			<img src="uploads/<?php echo $value['product_piece']?>" style="height:80%; width:100%;">
		<?php }?>
			<p style="font-size: 20px; font-weight:bold;"><span><?php echo $value['product_name']?></span></p>
<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span><?php echo number_format($value['selling_price']);?></p>
<a href="cart.php?productid=<?php echo  $value['product_id'];?>" class="btn btn-primary">ADD TO CART</a>
	</div>
	
<?php
}
}
?>	

<!--Display for hoodies-->
<?php 
	 $sell = new user;
  $result = $sell->viewofproduct('hoodies');
  if(!empty($result)){
  foreach ($result as $key => $value) {
   
   
  	
  
	?>
	<div class="col-sm-3 divimage3 divimage" style="border:0px solid black;  border-radius:10px; margin-top: 60px; margin-bottom:90px;">
		<?php if(empty($value['product_piece'])){?>
			<img src='images/trouser_icons2.jpg' style="height:100%; width:100%;">
		<?php }else{?>
			<img src="uploads/<?php echo $value['product_piece']?>" style="height:80%; width:100%;">
		<?php }?>
			<p style="font-size: 20px; font-weight:bold;"><span><?php echo $value['product_name']?></span></p>
<p style="font-size: 18px; font-weight:bold; line-height:9px;"><span>&#8358;</span><?php echo number_format($value['selling_price']);?></p>
<a href="cart.php?productid=<?php echo  $value['product_id'];?>" class="btn btn-primary">ADD TO CART</a>
	</div>
	
<?php
}
}
?>	




<!---Footer Part--->
<?php 

include ("Footer.php")
?>

</div>

<!---Script Part--->
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

$("#lest").hover(function(){
	$(".list2").attr('display','block');
})
$(".shoeimage").show();
$(".divimage1").hide();
$(".divimage2").hide();
$(".divimage3").hide();
$("#shoes").click(function(){
	$(".divimage").hide();
$(".shoeimage").show();
})
$("#shirts").click(function(){
	$(".divimage").hide();
	$(".divimage1").show().addClass('animate__animated animate__fadeIn');
	
})
$("#trousers").click(function(){
	$(".divimage").hide();
	$(".divimage2").show().addClass('animate__animated animate__fadeIn');
	
})
$("#hoodies").click(function(){
	$(".divimage").hide();
	$(".divimage3").show().addClass('animate__animated animate__fadeIn');
	
})


	})
	
</script>
	</body>
</html>
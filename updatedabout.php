<!DOCTYPE html>
<html>
	<head>
		<title>Aboutpage</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<!--Script Part 0f The Page--->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="icons/css/all.css">
		<link rel="stylesheet" type="text/css" href="updateduserpage.css">
		<link rel="stylesheet" type="text/css" href="animate.min.css">

		<!---Script Part Of The Page-->
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

		<!--CSS Styling-->
		<style>
			div{border: 0px solid black;}
 header{
    	width: 100%;
    }
    .bg{
    	background-image: url('images/bgimage.jpg');
    	background-size: 100% 100%;
    	height: 500px;
    }
		</style>
	</head>
	<body>
		<div class="container-fluid">




<!---Header Part--->			
			<?php 
include ("header2.php");
			?>


<div class="row">
	<div class="col-md-12"></div>
</div>



<!---About Text Part--->
<div class="row bg" style="width:101%;">
	<div class="col-md-12">
		<div class="col-md-12 great" style="height:100%;   background:rgba(0,0,0,0.5);flex-direction: column; align-items:center; justify-content: center; opacity:10;
				transition: opacity 0.25s; backdrop-filter:blur(5px);">
					<h1 align="center" style="color:white;">About Us</h1>
					<hr style="width:20%; color:rgba(203,32,38,0.9); border-top:4px solid white; border-radius:10px;">
					<p align="center" style="color:white;">We make you have a better chance of connecting with your sellers online.</p><p align="center" style="color:white;">Through us you can gain a lot in the world of ecommerce.Our website is basically for clothes,hoodies and shoes.</p><p align="center" style="color:white;">We appreciate the effort of coming to our about page.We make sure that our buyers get their products ordered for in time.</p><p align="center" style="color:white;">Thanks to our customers we have being able to get to this level.</p>
				</div>
	</div>
</div>


<div class="row" style="width:101%;">
	<div class="col-md-4">
		<i class="fas fa-thumbs-up" style="font-size: 50px; position:relative; left:190px;"></i>
		<h5 align="center">EASY-SETUP</h5>
		<p align="center">Easy setup of your store online</p>
		<p align="center">To make your buyers get in touch with you</p>
		<p align="center">Anywhere you like</p>
	</div>
	<div class="col-md-4">
		<i class="fas fa-users" style="font-size: 50px; position:relative; left:190px;"></i>
		<h5 align="center">EASY ADVERTISEMENT</h5>
		<p align="center">Sellers have the opportunity to post</p>
		<p align="center">Their goods online so the buyers will be able</p>
		<p align="center">To check it out</p>
	</div>
	<div class="col-md-4">
		<i class="fab fa-product-hunt" style="font-size: 50px; position:relative; left:190px;"></i>
		<h5 align="center">VALUE PRODUCTS</h5>
		<p align="center">The sellers have reliable products</p>
		<p align="center">We promise you the sellers have high-valued</p>
		<p align="center">stocks to make the buyer satisfied</p>
	</div>
</div>



<!---About Text Part--->
<div class="row" style="width:101%;">
	<div class="col-md-12"></div>
</div>
<div class="row" style="width:101%;">
	<div class="col-md-4">
		<i class="far fa-smile-beam" style="font-size: 50px; position:relative; left:190px;"></i>
		<h5 align="center">GOOD RELATIONSHIPS</h5>
		<p align="center">The sellers relate with buyers</p>
		<p align="center">with an happy mood necessary for the</p>
		<p align="center">advertisement of their products</p>
	</div>
	<div class="col-md-4">
		<i class="far fa-clock" style="font-size: 50px; position:relative; left:190px;"></i>
		<h5 align="center">TIME FREE</h5>
		<p align="center">The sellers are full-time and part-time</p>
		<p align="center">They will always be around to make contact with</p>
		<p align="center">buyers at any time</p>
	</div>
	<div class="col-md-4">
		<i class="fas fa-user-shield" style="font-size: 50px; position:relative; left:190px;"></i>
		<h5 align="center">SECURE ACCOUNTS</h5>
		<p align="center">The sellers have well protected accounts</p>
		<p align="center">No alternative use of the account strictly</p>
		<p align="center">for products</p>
	</div>
</div>


<div class="row" style="width:101%;">
	<div class="col-md-12"></div>
</div>

<div class="row" style="width:101%;">
	<div class="col-md-12"></div>
</div>




<!----Footer Part--->
<?php 
include ("Footer.php")
?>



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
});
</script>
	</body>
	</html>



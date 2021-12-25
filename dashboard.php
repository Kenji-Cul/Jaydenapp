<?php 
session_start();
include("projectinfo.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Dashboard Page</title>

	<!--Links for the pages--->
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="contact_page.css">
		<link rel="stylesheet" type="text/css" href="icons/css/all.css">
		<link rel="stylesheet" type="text/css" href="animate.min.css">

		<!--Script links--->
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

		<!--CSS Styling--->
		<style>
		body{
			background-color: #bbb;
			height: 20vh!important;
		}
			div{min-height: 100px; border: 0px solid black;}
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
a{
	color:#aaa!important; font-weight:700;text-decoration:none!important
	transition: 0.5s;
}
a:hover{
	color: rgba(203,32,38,0.9)!important;
	text-decoration: none;
}
.btn{
	oultine: none;
	display: block;
	border: 0;
	font-size: 16px;
	line-height: 1;
	padding: 16px 30px;
	border-radius: 30px;
	background: #0081d5;
	color: #ffffff;
	cursor: pointer;
	transition: 0.3s linear;
}
.btn:hover,
.btn:focus{
	 background: #005C99;
}
.btn:active{
	background: #003659;
}
.coll{
	background: rgba(0, 0, 0, 0.5);
	border-radius: 6px;
	box-shadow:3px 3px 20px grey!important;
}
		</style>
</head>
<body>
<div class="container-fluid">

	<!--Header Part--->
			<header class="row navbar fixed-top navbar-light bg-light" id="row_first" style="background-color:#f1f1f1!important; padding:10px; overflow:hidden;">
			<div class="col-md-3" id="head">
			<h3 id="h1tag" class="animate__animated animate__wobble">Jayden & Alexis</h3>
		</div>
			<div class="col-md-5">
				<ul style="padding: 2px; width:100%; display:flex;">
						<li><a href="index.php">HOME</a></li>
						<li><a href="updatedabout.php" target="_blank">ABOUT</a></li>
						<li><a href="contact_page.php" target="_blank">CONTACT</a></li>
						<li><a href="Services_page.php" target="_blank">SERVICES</a></li>
						<li><a href="updateduserpage.php" target="_blank">Register</a></li>
					</ul>

			</div>

			<div class="col-md-2">
				<ul>
					<li style="color:black;" id="lest1"><i class="fa fa-user" style="color:black;"></i><a href="#">Account</a></li>
					<ul class="list3" style="background-color: #fff; display: none; border-radius: 0px 0px 4px 4px;">
					<li class="list1"><a href="loginpage.php" target="_blank">Login</a></li>
					<li class="list1"><a href="Updateduserpage.php" target="_blank">Sign Up</a></li>
				</ul>
				</ul>
			</div>

			<div class="col-md-2">
				<i class="fas fa-shopping-cart" style="font-size:20px;"></i>
				<ul>
					<li style="color:black;" id="lest"><a href="#">Explore</a></li>
					<ul class="list2" style="background-color: #fff; display: none; border-radius: 0px 0px 4px 4px;">
					<li class="list"><a href="Shoes.php" target="_blank">Shoes</a></li>
					<li class="list"><a href="Shirts.php" target="_blank">Shirts</a></li>
					<li class="list"><a href="Cardigans.php" target="_blank">Hodies</a></li>
					<li class="list"><a href="Joggers.php" target="_blank">Trousers</a></li>
				</ul>
				</ul>
				
		</header>
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
<div class="row" style="margin-top:30px;">
	<div class="col-md-12"></div>
</div>
<?php 
                 $obj = new user;
                 $result = $obj->viewuser();
                  foreach ($result as $key => $value) {
                 	
                   }
                 ?>
<div class="row">
	<div class="col-md-12">
		<div style="border:px solid black; border-radius: 40px; width:500px; padding: 16px; margin: auto; " class="coll"><h1 align="center" style="color:white;">Welcome <?php echo $_SESSION['user_name'];?></h1></div>
	</div>
</div>

<div class="row" style="min-height: 100px;">
	<div class="col-md-2 coll">
		<div class="col-md-12">
			<button class="btn btn-outline" id="botn"><a href="" style="color:white;">My Account</a></button>
		</div>
		<div class="col-md-12">
			<button class="btn btn-outline"><a href=""  style="color:white;">Orders</a></button>
		</div>
		<div class="col-md-12">
	  <button class="btn btn-outline"><i class="fas fa-user-edit"></i><a href="userupdate.php?userid=<?php echo $value['user_id']?>"  style="color:white;">Edit Account</a></button>
		</div>
		<div class="col-md-12">
			<button class="btn btn-outline"><a href="logoutpage.php"  style="color:white;">Log Out</a></button>
		</div>
	</div>
	<div class="col-md-1"></div>
	<div class="col-md-9" style="border:0px solid black;">
		<div class="row" style="min-height:40%;">
			<div class="col-12" style="padding:10px;" id="container">
				<div style="width:80%; height:100%; padding:6px;" class="coll">
				<h5  style="color:white;">ACCOUNT DETAILS<span><i class="fas fa-pencil"></i></span></h5>
				<p style="color:white;"><?php echo $_SESSION['user_name'];?></p>
				<p  style="color:white;"><?php echo $_SESSION['user_email'];?></p>
				<h6  style="color:white;"><a href="#">CHANGE PASSWORD</a></h6>
				<p></p>
					<h5  style="color:white;">DATE JOINED<span><i class="fas fa-pencil"></i></span></h5>
					<p style="color:white;"><?php echo  date('jS M, Y',strtotime($value['created_at']));?></p>
				</div>
			</div>
		</div>
	</div>
</div>
	</div>
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function(){
			$('#botn').click(function(){
           $('#container').load('clothrow.php');
           $('.coll').hide();
			});
		});
	</script>
</body>
</html>


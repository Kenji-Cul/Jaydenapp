
<?php 
session_start();
include("projectinfo.php");


if(!empty($_POST['login'])){
	if(empty($_POST['email1']) || empty($_POST['pwd'])){
	$errormsg="Email and password required to login";
}
else{
	$user1 = new user;
	$userdetails=$user1->login(strip_tags($_POST['email1']),strip_tags($_POST['pwd']));
	if(empty($userdetails)){
		$errormsg="Invalid login details try again";
	}else{
		$_SESSION['role_id'] = $userdetails['users_id'];
		$_SESSION['user_id'] =$userdetails['user_id'];
		$_SESSION['user_name'] = $userdetails['username'];
		$_SESSION['user_email'] = $userdetails['email'];
		$_SESSION['nameuser'] = $userdetails['great123'];
		$log="<div class='alert alert-success'><h3 align='center'>Login successful</h3></div>";
		if($_SESSION['role_id'] == 1){
		header("Location: adminpage.php");}
		else{
			header("Location: index.php");
		}
}
		
}


}
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Login</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!---Links for the page--->
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="icons/css/all.css">
		<link rel="stylesheet" type="text/css" href="updateduserpage.css">
		<link rel="stylesheet" type="text/css" href="animate.min.css">

		<!---Script link--->
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>


		<!--CSS Styling-->
		<style>
	div{border: 0px solid black; min-height: 100px;}
	body{
		height: 60vh;
	}
    #login{
    	height: 600px!important;
    }
    .test2{
    	height: 600px!important;
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
}
.selec2{
	padding: 14px 10px 14px 50px;
	width: 100%;
	background-color: #fcfcfc;
	border: 1px solid #00000033;
	outline: none;
	letter-spacing: 1px;
	transition: 0.3s;
	border-radius: 3px;
	color: #333;
}
    input:focus{
	-webkit-box-shadow: 0,0, 2px 1px #7ed32180;
	-moz-box-shadow: 0,0, 2px 1px  #7ed32180;
	box-shadow: 0,0, 2px 1px  #7ed32180;
	border: 1px solid #7ed321!important; }
     .inpot{
     	padding: 25px;
     }
     .selec2:focus{
	-webkit-box-shadow: 0,0, 2px 1px #7ed32180;
	-moz-box-shadow: 0,0, 2px 1px  #7ed32180;
	box-shadow: 0,0, 2px 1px  #7ed32180;
	border: 1px solid #7ed321!important; }
     .inpot{
     	padding: 25px;
     }
     #loginbutton{
     	width: 40%;
     	height: 40%;
     	position: relative;
     	left: 150px;
     	padding: 8px;
     	border: none;
     	background-color: rgba(0,65,56,43);
     	transform: translate(20px);
     	color: #ccc;
     }
     #loginbutton:hover{
     	background-color: rgba(0,0,0,0.4);
     	transition: 0.5s;

     }
   </style>
</head>

<body>
<div class="container-fluid">
	
<!---Header--->
<header class="row navbar fixed-top navbar-light bg-light" id="row_first" style="background-color:#f1f1f1!important; padding:10px; overflow:hidden;">
			<div class="col-md-3" id="head">
			<h3 id="h1tag" class="animate__animated animate__wobble"><?php echo MY_APP_NAME?></h3>
		</div>
			<div class="col-md-7">
				<ul style="padding: 2px; width:100%; display:flex;">
						<li><a href="index.php">HOME</a></li>
						<li><a href="updatedabout.php" target="_blank">ABOUT</a></li>
						<li><a href="updateduserpage.php" target="_blank">Register</a></li>
					</ul>

			</div>
			<div class="col-md-2">
				<a href="showcart.php" style="color:black;"><i class="fas fa-shopping-cart" style="font-size:20px;"></i></a>
				
		</header>

<div class="row">
	<div class="col-md-12"></div>
</div>

<div class="row">
	<div class="col-md-12"></div>
</div>


<div class="row">
	<div class="col-md-3"></div>
		<div class="col-md-6">
		<?php 
        if(!empty($errormsg)){
        	echo "<div class='alert alert-danger'><h3 align='center'>$errormsg</h3></div>";
        }
		?>
		<?php 
if(!empty($log)){
        	echo $log;}
		?>
	</div>
	<div class="col-md-3"></div>
</div>



<!--Login Input-->
<div class="row" id="test2" style="height:40%;">
	<div class="col-md-3" ></div>
	<div class="col-md-6" id="login" style="height:40%;">
		<div class="test" style="height:70%;">
		<form action=" " method="POST">
			<h4 align="center">Jayden & Alexis<img src="images/j_icon.png"></h4>
			<div class="inpot">
		<label for="email"></label><input type="email"  class="border" name="email1" placeholder="Your Email" id="email" value="<?php 
    if(isset($_POST['email1'])){
    	echo $_POST['email1'];
    }
	?>"></div>
		<div class="inpot">
	<label for="password"></label><input type="password" class="border" name="pwd" placeholder="Your Password" id="password" value="<?php if(isset($_POST['pass1'])){echo $_POST['pass1']; }?>"></div>
		<p id="loginp">
	<input type="submit"  value="Log In" name="login" id="loginbutton"></p>	
	</form>
	</div>
</div>
	<div class="col-md-3"></div>
</div>
</div>

<script src="userpage.js" type="text/javascript"></script>
<script>
</script>	
</body>
</html>
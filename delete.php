<?php 
ob_start();
?>
<!DOCTYPE html>
<html>
<?php 
session_start();
include("projectinfo.php");
?>


	<head>
		<title>User Update Page</title>


		<!--Links for the pages--->
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="icons/css/all.css">
		<link rel="stylesheet" type="text/css" href="updateduserpage.css">
		<link rel="stylesheet" type="text/css" href="animate.min.css">

    <!--Script Links--->
		<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>

		<!--CSS Styling-->
		<style>
			div{border: 0px solid black; min-height: 100px;}
			 header{
    	width: 100%;
    }
    .required1{
    	color: red;
    }
    .required2{
    	color: red;
    }
    .required3{
    	color: red;
    }
    .required4{
    	color: red;
    }
    #selec{

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
	margin-bottom: 10px;
}
.md{
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
.md:focus{
	-webkit-box-shadow: 0,0, 2px 1px #7ed32180;
	-moz-box-shadow: 0,0, 2px 1px  #7ed32180;
	box-shadow: 0,0, 2px 1px  #7ed32180;
	border: 1px solid #7ed321!important; 
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
     #signbutton{
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
     #signbutton:hover{
     	background-color: rgba(0,0,0,0.4);
     	transition: 0.5s;

     }
		</style>
    
	</head>
	<body>
		<div class="container-fluid">



<!--Header Part-->
		<?php 
include ("header2.php");
		?>





<!---For The Signup Buttons--->
<div class="row">
	<div class="col-md-12">
		<?php 
 $userobj = new User;

$user= $userobj->getuser($_REQUEST['userid']);
// echo "<pre>";
// print_r($user);
// echo "</pre>";
		?>
	</div>
</div>
<?php 
//create instance of MyContact class
//check if submit button is clicked
if($_SERVER['REQUEST_METHOD'] == 'POST'){
if(empty($_POST['email'])){
		$email_error= "<div class='alert alert-danger'><h2 align='center'>Email needed to login<h2></div>";
	}
else if(empty($_POST['name'])){
		$name_error= "<div class='alert alert-danger'><h2 align='center'>Please enter your name<h2></div>";
	}
	else{
		$objuser = new user;
	$output = $objuser ->deleteuser($_POST['userid']);	
	if(key($output) == 'success'){
//redirect to members page
      $message = $output['success'];
      header("Location: usertable.php?msg=$message");
    }else{
      echo "<div class='alert alert-danger'>".$output['error']."</div>";
    }
 
}
}

?>



<!--Sign Up Input-->
<div class="row">
	<div class="col-md-3"></div>
	<div class="col-md-6" style="padding:20px;">
		<form action="delete.php" method="POST">
			<h4 align="center">Jayden & Alexis<img src="images/j_icon.png"></h4>
<label for="textbox1"></label><input type="text"  name="name" placeholder="Your Name"  id="textbox1" value="<?php if(isset($user['username'])){
			echo $user['username'];
		} ?>">
         <?php if(isset($name_error)) echo $name_error ?>
		<label for="textbox3"></label><input type="email"  name="email" placeholder="Your Email" id="textbox3"
		 value="<?php if(isset($user['email'])){
		 	echo $user['email'];
		 }?>">
		   <?php if(isset($email_error)) echo $email_error ?>
		<p align="center">
			 <input type="text" name="userid" value="<?php echo $_REQUEST['userid']?>">
	<input type="submit" name="updateuser" class="btn btn-block btn-primary" id="signbutton" value="Delete User">
	</form>
</div>
	<div class="col-md-3"></div>
</div>

<div class="row">
	<div class="col-md-12"></div>
</div>








<!----Footer Part---->
<?php 
include ("Footer.php");
?>


<!---Script Part--->
		<script type="text/javascript">
			$(document).ready(function(){
					$('#realbox').click(function(){
		    var check= $('#realbox').prop('checked')
			if(check==true){
				$('#signbutton').removeAttr('disabled')
			}else{$('#signbutton').attr('disabled','disabled')}
	})				
			})
		</script>

	</body>
</html>
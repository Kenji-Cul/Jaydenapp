<?php 
ob_start();
session_start();
include("projectinfo.php");
include("paystackclass.php");
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Order</title>
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
input:focus{
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
<div class="container">
	<?php 
     include("header.php");
	?>

	<div class="row" class="divimage">
<?php
	$obj = new User;
	$objuser = $obj->viewproductorder($_SESSION['ref']);
       foreach ($objuser as $key => $value){
       	$user = $obj->getproduct($value['product_id']);
?>
<div class="col-md-3 divimage1 divimage" id="image" style="border:0px solid black;  border-radius:10px; margin-top: 100px; margin-bottom:90px;">
<img src="uploads/<?php echo $user['product_piece']?>" style="height:80%; width:100%;">
<p style="font-size: 20px; font-weight:bold;"><span>&#8358;</span><?php echo number_format($user['selling_price'])?></p>

</div>
<?php }?>
<?php 
//create instance of MyContact class
//check if submit button is clicked
if($_SERVER['REQUEST_METHOD'] == 'POST'){
	if(empty($_POST['email'])){
		$email_error= "<div class='alert alert-danger'><h2 align='center'>Email needed<h2></div>";
	}
   else if(empty($_POST['name'])){
		$name_error= "<div class='alert alert-danger'><h2 align='center'>Please enter name of product<h2></div>";
	}
	else if(empty($_POST['price'])){
		$password_error= "<div class='alert alert-danger'><h2 align='center'>Please enter price of product<h2></div>";
	}
	else if(empty($_POST['address'])){
		$location_error= "<div class='alert alert-danger'><h2 align='center'>Address required<h2></div>";
	}
	 if(!empty($_SESSION['user_email'])){
		$objuser = new user;
		 $user=$objuser->viewamount($_SESSION['ref']);
		$output2=$objuser->viewofuser($_SESSION['user_email']);
	}
	if(!empty($_SESSION['user_id']) || empty($_SESSION['user_id'])){
		$payuser = new Payment;
$output = $payuser->initializePaystack($_POST['email'],$user['SUM(amount)']);
if($output==true){
$redirecturl = $output->data->authorization_url;
$reference = $output->data->reference;
}
if(!empty($redirecturl)){
   $payuser->insertTransactionDetails($_SESSION['user_id'],$user['SUM(amount)'],$reference,$_POST['name'],$_POST['address']);
  header("Location: $redirecturl");
exit;
 
}

if(empty($redirecturl)){
	$error= "<div class='alert alert-danger'>There was a connection error</div>";
}  
}

// if(empty($_SESSION['user_id'])){
// 	echo "<div class='alert alert-success'>Sign up on our platform so we can get your details</div>";
// }



}

?>

<div class="row">
	<div class="col-md-12">
		<?php 
		 if(isset($error)){
			 echo $error;
		 }
		?>
	</div>
</div>

<!--Sign Up Input-->
<div class="row">
	<div class="col-md-3">
		<h1><?php echo MY_APP_NAME?></h1>
	</div>
	<div class="col-md-6" style="padding:20px;">
		<form action="" method="POST">
			<h4 align="center"><img src="images/j_icon.png"></h4>
<label>Email:</label><input type="email" name="email" value="<?php if(isset($_SESSION['user_email'])){echo $_SESSION['user_email'];}?>">
			<?php if(isset($email_error)) echo $email_error ?>
			<?php if(isset($location_error)) echo $location_error ?>
			<label for="textbox4">Address:</label><textarea name="address" rows="3"><?php if(isset($_POST['address'])){
		echo $_POST['address'];
	}?></textarea>
	<input type="submit" name="updateuser"  id="signbutton" value="Order Product">
	</form>
</div>
	<div class="col-md-3" style="box-shadow:3px 3px 20px grey!important;">
		<h2 style="padding-left: 40px;">Description</h2><hr style="width:60%; color:rgba(203,32,38,0.9); border-top:4px solid black; border-radius:10px;">
		<p style="font-size:20px;" align="center"></p>
		<?php 
      	$obj = new User;
	$objuser = $obj->viewproductorder($_SESSION['ref']);
       foreach ($objuser as $key => $value){
       	$user = $obj->getproduct($value['product_id']);
       	?>
      <span>Name:</span><p style="font-size: 20px; font-weight:bold;">
       	<?php echo $user['product_name'];?>
      </p>
   <?php }?>
		<span>Total Price:</span><p style="font-size: 20px; font-weight:bold;">&#8358;<?php 
        $obj = new User;
        $user=$obj->viewamount($_SESSION['ref']);
		 echo number_format($user['SUM(amount)']);?>
       </p>
	</div>
</div>




</div>
<?php ob_end_flush();?>
</body>
</html>
<?php ob_end_flush();?>
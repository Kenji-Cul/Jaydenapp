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
	<title>Order Page</title>
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
	</style>
</head>
<body>
<div class="container-fluid">
	<?php 
     include("header.php");
	?>

	<div class="row">
	<div class="col-md-12">
		<?php 
 $userobj = new User;
foreach ($_SESSION['cart'] as $key => $value) {
	

$user= $userobj->getproduct($_REQUEST['productid']);
// echo "<pre>";
// print_r($user);
// echo "</pre>";
$_SESSION['price'] = $user['selling_price'] * $value;}
		?>
	</div>
</div>
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
		$output2=$objuser->viewofuser($_SESSION['user_email']);
	}
	if(!empty($_SESSION['user_id'])){
		$payuser = new Payment;
$output = $payuser->initializePaystack($_POST['email'],$_SESSION['price']);
// echo "<pre>";
// print_r($output);
// echo "</pre>";

$redirecturl = $output->data->authorization_url;
$reference = $output->data->reference;
if(!empty($redirecturl)){
   $payuser->insertTransactionDetails($_SESSION['user_id'],$_POST['price'],$reference,$_POST['name'],$_POST['address']);
  header("Location: $redirecturl");
exit;
 
}
}
if(empty($_SESSION['user_id'])){
	echo "<div class='alert alert-success'>Order was successful</div>";
}



}

?>



<!--Sign Up Input-->
<div class="row">
	<div class="col-md-3">
		<img src="uploads/<?php echo $user['product_piece']?>" style="height:100%; width:100%;">
	</div>
	<div class="col-md-6" style="padding:20px;">
		<form action="" method="POST">
			<h4 align="center">Jayden & Alexis<img src="images/j_icon.png"></h4>
<label for="textbox1"></label><input type="text"  name="name" placeholder="Your Name"  id="textbox1" value="<?php if(isset($user['product_name'])){
			echo $user['product_name'];
		} ?>">
         <?php if(isset($name_error)) echo $name_error ?>
		<label for="textbox3"></label><input type="text"  name="category" placeholder="Your Email" id="textbox3"
		 value="<?php if(isset($user['category'])){
		 	echo $user['category'];
		 }?>">
	<label for="textbox4"></label><input type="text"  name="price" placeholder="Your Password" id="textbox4" value="&#8358;<?php if(isset($user['selling_price'])){ echo $_SESSION['price'];}?>">
	  <?php if(isset($password_error)) echo $password_error ?>
<label>Email:</label><input type="email" name="email" value="<?php if(isset($_SESSION['user_email'])){echo $_SESSION['user_email'];}?>">
			<?php if(isset($email_error)) echo $email_error ?>
			<?php if(isset($location_error)) echo $location_error ?>
			<label for="textbox4"></label><textarea name="address" rows="3"><?php if(isset($_POST['address'])){
		echo $_POST['address'];
	}?></textarea>
			 <input type="hidden" name="productid" value="<?php echo $_REQUEST['productid']?>">
	<input type="submit" name="updateuser" class="btn btn-block btn-primary" id="signbutton" value="Order Product">
	</form>
</div>
	<div class="col-md-3"></div>
</div>

<div class="row">
	<div class="col-md-12"></div>
</div>


</div>
</body>
</html>
<?php ob_end_flush();?>
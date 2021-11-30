<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Payment Page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="paymentpage.css">
	<link rel="stylesheet" type="text/css" href="icons/css/all.css">
	<link rel="stylesheet" type="text/css" href="animate.min.css">
	<script type="text/javascript" src="bootstrap/js/jquery.min.js"></script>
	<style type="text/css">
		div{min-height: 100px; border: 0px solid black;}
	</style>
</head>
<body>
<div class="container-fluid">
	<?php 
include ("header.php");
	?>

<div class="row">
	<div class="col-md-1"></div>
	<div class="col-md-8"  id="user">
		<h2 align="center">Payment Form</h2>
		<form action=" " method="POST">
			<h4>Account</h4>
			<div class="input-group">
				<div class="input-box">
					<input type="text" placeholder="Full Name" required class="name">
					<i class="fa fa-user"></i>
				</div>
				<div class="input-box">
					<input type="text" placeholder="Username"  class="name"required>
					<i class="fa fa-user"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<input type="email" placeholder="Email Address"  class="name"required>
					<i class="fa fa-envelope"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<h4>Date Of Birth</h4>
					<select type="text" placeholder="DD" class="name">
						<option vlaue="DD">DD</option>
						<?php 
                        $x=1;
                        for($x=1; $x<=31; $x++){
                           echo "<option value='$x'>$x</option>";
                        }
						?>
					</select>
					<input type="text" placeholder="MM" class="name">
					<?php 
                    $month = array("January","February","March","April","May","June","July","August");
					?>
					<input type="text" placeholder="YY" class="name">
				</div>
                 <div class="input-box">
                 	<h4>Gender</h4>
                 	<input type="radio" id="b1" name="gender" checked class="radio">
                 	<label for="b1">Male</label>
                 	<input type="radio" id="b2" name="gender" checked class="radio">
                 	<label for="b2">Female</label>
                 </div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<h4>Payment Details</h4>
					<input type="radio" name="pay" id="bc1" checked class="radio">
					<label for="bc1"><span><i class="fa fa-cc-visa"></i>Credit Card</span></label>
					<input type="radio" name="pay" id="bc2" class="radio">
					<label for="bc2"><span><i class="fa fa-cc-paypal"></i>Paypal</span></label>
				</div>
			</div>


			<div class="input-group">
				<div class="input-box">
					<input type="tel" placeholder="Card Number" required class="name">
					<i class="fa fa-credit-card icon"></i>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box"></div>
				<input type="tel" placeholder="Card CVC" required class="name">
				<i class="fa fa-user"></i>
			</div>
			<div class="input-group">
				<div class="input-box">
					<select>
						<option>Jun 1</option>
						<option>Jun 1</option>
						<option>Jun 1</option>
					</select>
					<select>
						<option>2020</option>
						<option>2021</option>
						<option>2022</option>
					</select>
				</div>
			</div>

			<div class="input-group">
				<div class="input-box">
					<button type="submit">PAY NOW</button>
				</div>
			</div>
		</form>
	</div>
	<div class="col-md-3"></div>
</div>
	<?php 
include ("Footer.php");
	?>
</div>
</body>
</html>
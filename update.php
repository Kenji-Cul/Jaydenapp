	<div class="row">
			<header class="row navbar fixed-top navbar-light bg-light" id="row_first" style="background-color:#f1f1f1!important; padding:10px; overflow:hidden;">
			<div class="col-md-3" id="head">
			<h3 id="h1tag" class="animate__animated animate__wobble">Jayden & Alexis</h3>
		</div>

			<div class="col-md-3">
				<ul style="padding: 2px; width:100%; display:flex;">
						<li><a href="Updatedversion.php">HOME</a></li>
						<li><a href="updatedabout.php" target="_blank">ABOUT</a></li>
<li><p style="color:black; font-weight:bold;"><?php if(isset($_SESSION['user_name'])){ echo "Hi,".$_SESSION['user_name'];}?></a></p></li>
					</ul>
			</div>
			<div class="col-md-4">
				<?php if(isset($_SESSION['user_name'])){?>
					<!-- <ul>
				<li style="list-style-type: none; color: rgba(0,0,0,0.6);"><a href="logoutpage.php" style="color:#aaa!important; font-weight:700; text-decoration:none!important; transition: 0.5s;">Logout</a></li></ul><?php }else{?>
			<ul> -->
					<li style="color:black;" id="lest1"><i class="fa fa-user" style="color:black;"></i><a href="#">Account</a></li>
					<ul class="list3" style="background-color: #fff; display: none; border-radius: 0px 0px 4px 4px;">
					<li class="list1"><a href="loginpage.php" target="_blank">Login</a></li>
					<li class="list1"><a href="Updateduserpage.php" target="_blank">Sign Up</a></li>
				</ul>
				</ul>
			</div>
			<?php }?>
			<div class="col-md-2">
				<!-- <a href="showcart.php"><i class="fas fa-shopping-cart" style="font-size:20px;"></i></a>  -->
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
				<h6><?php if(!empty($_SESSION['cart'])){
					echo count($_SESSION['cart']). " item(s)";
				}
				?></h6>
		</header>
	</div>

	<div class="row">
			<header class="row navbar fixed-top navbar-light bg-light" id="row_first" style="background-color:#f1f1f1!important; padding:10px; overflow:hidden;">
			<div class="col-md-3" id="head">
			<h3 id="h1tag" class="animate__animated animate__wobble">Jayden & Alexis</h3>
		</div>

			<div class="col-md-3">
				<ul style="padding: 2px; width:100%; display:flex;">
						<li><a href="Updatedversion.php">HOME</a></li>
						<li><a href="updatedabout.php" target="_blank">ABOUT</a></li>
<li><p style="color:black; font-weight:bold;"><?php if(isset($_SESSION['user_name'])){ echo "Hi,".$_SESSION['user_name'];}?></a></p></li>
					</ul>
			</div>
			<div class="col-md-4">
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
			</div>
			<?php }?>
			<div class="col-md-2">
				<!-- <a href="showcart.php"><i class="fas fa-shopping-cart" style="font-size:20px;"></i></a>  -->
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
				<h6><?php if(!empty($_SESSION['cart'])){
					echo count($_SESSION['cart']). " item(s)";
				}
				?></h6>
		</header>
	</div>
</div>
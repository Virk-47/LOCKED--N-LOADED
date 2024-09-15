<!DOCTYPE HTML>
<html>
	<head>
	<title>Locked 'n Loaded</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<link href="https://fonts.googleapis.com/css?family=Montserrat:300,400,500,600,700" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Rokkitt:100,300,400,700" rel="stylesheet">
	
	<!-- Animate.css -->
	<link rel="stylesheet" href="css/animate.css">
	<!-- Icomoon Icon Fonts-->
	<link rel="stylesheet" href="css/icomoon.css">
	<!-- Ion Icon Fonts-->
	<link rel="stylesheet" href="css/ionicons.min.css">
	<!-- Bootstrap  -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Magnific Popup -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Flexslider  -->
	<link rel="stylesheet" href="css/flexslider.css">

	<!-- Owl Carousel -->
	<link rel="stylesheet" href="css/owl.carousel.min.css">
	<link rel="stylesheet" href="css/owl.theme.default.min.css">
	
	<!-- Date Picker -->
	<link rel="stylesheet" href="css/bootstrap-datepicker.css">
	<!-- Flaticons  -->
	<link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

	<!-- Theme style  -->
	<link rel="stylesheet" href="css/style.css">

	</head>
	<body>
	
	<div  class="colorlib-loader"></div>

	<div id="page" >
		<nav class="colorlib-nav" role="navigation">
			<div class="top-menu">
				<div class="container">
					<div class="row">
						<div class="col-sm-7 col-md-9">
							<div id="colorlib-logo"><a href="index.html">Locked 'n Loaded</a></div>
						</div>
						<div class="col-sm-5 col-md-3">
			            <form action="#" class="search-wrap">
			               <div class="form-group">
			                  <input type="search" class="form-control search" placeholder="Search">
			                  <button class="btn btn-primary submit-search text-center" type="submit"><i class="icon-search"></i></button>
			               </div>
			            </form>
			         </div>
		         </div>
				  <div class="row">
				 <div class="col-sm-7 col-md-9">
				 <?php 
				 session_start();
				 if(isset($_SESSION['user'])){
					 $user=$_SESSION['user'];
					 echo "Welcome ".$user;
				 }
				 ?>
				  </div>
				 </div>
					<div class="row">
						<div class="col-sm-12 text-left menu-1">
							<ul>
								<li class="active"><a href="index.php">Home</a></li>
								<li class="has-dropdown">
									<a href="Shop.php?pcat=Shotgun">Shotguns</a>
													</li>
								<li><a href="Shop.php?pcat=Pistol">Pistols</a></li>
								<li><a href="contact.php">Contact</a></li>
										<li><a href="signup.php">Sign Up</a></li>
										<?php 
										include "dbase.php";
										if(!isset($_SESSION['uid'])){
											echo "<li><a href='login.php'>Login</a></li>";
										}
										else{
											echo "<li><a href='logout.php'>Logout</a></li>";
											
											$uid=$_SESSION['uid'];
											$count=mysqli_query($dbase,"SELECT * from cart where Uid='$uid'");
											$cartno=mysqli_num_rows($count);
											echo "<li class='cart'><a href='cart.php'><i class='icon-shopping-cart'></i> Cart [$cartno]</a></li>";
										}
										?>
										
										
									
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
				<div class="sale">
				<div class="container">
					<div class="row">
						<div class="col-sm-8 offset-sm-2 text-center">
							<div class="row">
								<div class="owl-carousel2">
									<div class="item">
										<div class="col">
											<h3><a href="#">25% off on 9mm! Use Code: 9GLK</a></h3>
										</div>
									</div>
									<div class="item">
										<div class="col">
											<h3><a href="#">Our biggest sale yet 30% off all hunting rifles</a></h3>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</nav>
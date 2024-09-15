<!DOCTYPE HTML>
<html>
	<head>
	<title>Locked 'n Loaded</title>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Facebook and Twitter integration -->
	<meta property="og:title" content=""/>
	<meta property="og:image" content=""/>
	<meta property="og:url" content=""/>
	<meta property="og:site_name" content=""/>
	<meta property="og:description" content=""/>
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

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
		<?php include "header.php"?>

		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Sign Up</span></p>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="contact-wrap">
							<h3>Sign Up</h3>
							<form method="post" >
								<div class="row">
									<div class="col-md-6">
										<div class="form-group">
											<label for="fname">First Name</label>
											<input type="text" id="fname" name="fname" class="form-control" placeholder="Your First name">
										</div>
									</div>
									<div class="col-md-6">
										<div class="form-group">
											<label for="lname">Last Name</label>
											<input type="text" id="lname" class="form-control"name="lname" placeholder="Your Last name">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="email">Email</label>
											<input type="text" id="email" name="email" class="form-control" placeholder="Your email address">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<label for="password">Password</label>
											<input type="password" id="pass" class="form-control" placeholder="Your Password" name="pass">
										</div>
									</div>
									<div class="w-100"></div>
									<div class="col-sm-12">
										<div class="form-group">
											<input type="submit" class="btn btn-primary" name="sub">
										</div>
									</div>
								</div>
							</form>		
						</div>
					</div>
				</div>
			</div>
		</div>

<?php include "footer.php"?>
	</body>



<?php
include "dbase.php";
if(isset($_POST['sub'])){
	$fname=$_POST['fname'];
	$lname=$_POST['lname'];
	$pass=$_POST['pass'];
	$email=$_POST['email'];
$a="INSERT INTO users(FName,LName,EmailId,Password)
values('$fname','$lname','$email','$pass')";
$b=mysqli_query($dbase,$a);
if($b){
	echo "<script>alert('Entry Done');
	window.location.href='login.php';</script>";
}
else{
		echo "<script>alert('Entry Not Done')</script>";
}
}

?>
</html>
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
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Login</span></p>
					</div>
				</div>
			</div>
		</div>


		<div id="colorlib-contact">
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<div class="contact-wrap">
							<h3>Login</h3>
							<form method="post" >
								<div class="row">
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
session_start();
include "dbase.php";
if(isset($_POST['sub'])){
	$email=$_POST['email'];
	$pass=$_POST['pass'];
$a="SELECT * from users where EmailId='$email' and Password='$pass'";
$b=mysqli_query($dbase,$a);
$c=mysqli_num_rows($b);
if($c>0){
	while($r=mysqli_fetch_array($b)){
		$_SESSION['user']=$r['FName'];
		$_SESSION['uid']=$r['SNo'];
		echo "<script>alert('Login Successfull');
		window.location.href='index.php';</script>";
	}
}
else{
		echo mysqli_error($dbase);
}
}
?>
</html>
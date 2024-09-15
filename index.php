<?php 
include "header.php";
?>

		<aside id="colorlib-hero">
			<div class="flexslider">
				<ul class="slides">
			   	<li style="background-image: url(images/GLK.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					
					   					<p><a href="product-detail.php?pid=7" class="btn btn-primary">Get G47</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/2.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Hunting</h1>
					   					<h2 class="head-2">Rifles</h2>
										<h2 class="head-3">up to <strong class="font-weight-bold">30%</strong> off</h2>
					   					<p><a href="Shop.php?pcat=Shotgun" class="btn btn-primary">Shop Collection</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			   	<li style="background-image: url(images/back3.jpg);">
			   		<div class="overlay"></div>
			   		<div class="container-fluid">
			   			<div class="row">
				   			<div class="col-sm-6 offset-sm-3 text-center slider-text">
				   				<div class="slider-text-inner">
				   					<div class="desc">
					   					<h1 class="head-1">Colt</h1>
					   					<p class="category"><span>.38 Special</span></p>
					   					<p><a href="product-detail.php?pid=6" class="btn btn-primary">Get Python Legend</a></p>
				   					</div>
				   				</div>
				   			</div>
				   		</div>
			   		</div>
			   	</li>
			  	</ul>
		  	</div>
		</aside>
		<div class="colorlib-intro">
			<div class="container">
				<div class="row">
					<div class="col-sm-12 text-center">
						<h2 class="intro">Disarm the people- that is the best and most effective way to enslave them.</h2>
					</div>
				</div>
			</div>
		</div>
		<div class="colorlib-product">
			<div class="container-fluid">
				<div class="row">
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="Shop.php?pcat=Shotgun" class="featured-img" style="background-image: url(images/m1.jpg);"></a>
							<div class="desc">
								<h2><a href="Shop.php?pcat=Shotgun">Shotguns</a></h2>
							</div>
						</div>
					</div>
					<div class="col-sm-6 text-center">
						<div class="featured">
							<a href="Shop.php?pcat=Pistol" class="featured-img" style="background-image: url(images/m2.jpeg);"></a>
							<div class="desc">
								<h2><a href="Shop.php?pcat=Pistol">Pistols</a></h2>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<nav class="colorlib-nav">
		<div class="top-menu">
			<div class="container">
				<div class="row">
					<div class="col text-center">
					<ul>
						<?php 
						include "dbase.php";
						$x="SELECT * from PRODUCTS group by ProductCategory";
						$y=mysqli_query($dbase,$x);
						$z=mysqli_num_rows($y);
						if($z>0){
							while($r=mysqli_fetch_array($y)){
								
						?>
						<a class="btn btn-light"href="index.php?pcat=<?php echo $r['ProductCategory'];?>">
						<li data-filter="<?php echo $r['ProductCategory'];?>">
						<h3><?php echo $r['ProductCategory'];?></h3>
						</li>
						</a>
						<?php }}?>
					</ul>
					</div>
				</div>
			</nav>
	<div class="row row-pb-md">
	
<?php

if(!isset($_GET['pcat'])){
	//$pcat=$_GET['pcat'];
include "dbase.php";
$a="SELECT * from products";
$b=mysqli_query($dbase,$a);
$c=mysqli_num_rows($b);
if($c>0){
	while($r=mysqli_fetch_array($b)){
		
	
?>			

					<div class="col-lg-6 text-center">
						<div class="product-entry border">
							<a href="product-detail.php?pid=<?php echo $r['SNo']?>" class="prod-img">
								<img src="<?php echo 'images/'.$r['ProductImage'];?>" class="img-fluid" style="height:570px; width:750px;" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="product-detail.php?pid=<?php echo $r['SNo']?>"><?php echo $r['ProductName']; ?></a></h2>
								<span class="price"><?php echo "₹".$r['ProductPrice']; ?></span>
								<details><summary>Read Description</summary><?php echo $r['ProductDescription']; ?></details>
							</div>
						</div>
					</div>				
<?php 
} 
}
}
?>		

<?php

if(isset($_GET['pcat'])){
	$pcat=$_GET['pcat'];
include "dbase.php";
$a="SELECT * from products where ProductCategory='$pcat' ";
$b=mysqli_query($dbase,$a);
$c=mysqli_num_rows($b);
if($c>0){
	while($r=mysqli_fetch_array($b)){
		
	
?>			

					<div class="col-lg-6 mb-4 text-center">
						<div class="product-entry border">
							<a href="product-detail.php?pid=<?php echo $r['SNo']?>" class="prod-img">
								<img src="<?php echo 'images/'.$r['ProductImage'];?>" class="img-fluid" alt="Free html5 bootstrap 4 template">
							</a>
							<div class="desc">
								<h2><a href="product-detail.php?pid=<?php echo $r['SNo']?>"><?php echo $r['ProductName']; ?></a></h2>
								<span class="price"><?php echo "₹".$r['ProductPrice']; ?></span>
								<details><summary>Read Description</summary><?php echo $r['ProductDescription']; ?></details>
							</div>
						</div>
					</div>				
<?php 
} 
}
}
?>				
	</div>
				<div class="row">
					<div class="col-md-12 text-center">
						<p><a href="shop.php" class="btn btn-primary btn-lg">Shop All Products</a></p>
					</div>
				</div>
			</div>
		</div>
		</div>
<?php include "footer.php"; ?>

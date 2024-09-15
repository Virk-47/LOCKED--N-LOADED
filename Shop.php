<?php 
include "header.php"
?>
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
		
<?php 
include "footer.php"
?>		
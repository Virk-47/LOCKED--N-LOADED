<?php include "header.php";
if(!isset($_SESSION['uid']))
{
	echo "<script>alert(Login First);
	window.location.href='login.php';</script>";
}
else {
	$uid=$_SESSION['uid'];
}
?>


		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.php">Home</a></span> / <span>Shopping Cart</span></p>
					</div>
				</div>
			</div>
		</div>


		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg">
					<div class="col-md-10 offset-md-1">
						<div class="process-wrap">
							<div class="process text-center active">
								<p><span>01</span></p>
								<h3>Shopping Cart</h3>
							</div>
							<div class="process text-center">
								<p><span>02</span></p>
								<h3>Checkout</h3>
							</div>
							<div class="process text-center">
								<p><span>03</span></p>
								<h3>Order Complete</h3>
							</div>
						</div>
					</div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="product-name d-flex">
							<div class="one-forth text-left px-4">
								<span>Product Details</span>
							</div>
							<div class="one-eight text-center">
								<span>Price</span>
							</div>
							<div class="one-eight text-center px-4">
								<span>Remove</span>
							</div>
						</div>
						<?php 
						include "dbase.php";
						$a="SELECT * from cart where Uid='$uid'";
						$b=mysqli_query($dbase,$a);
						$gtotal=0;
						while($r=mysqli_fetch_array($b))
						{
							
						?>
						<div class="product-cart d-flex">
							<div class="one-fourth">
								<div class="product-img" >
								<img src="images/<?php echo $r['ProductImage'];?>" style="height:100px; width:150px;">
								</div>
								<div  class="display-tc">
									<h3 style="margin-left:150px;"><?php echo $r['ProductName'];?></h3>
								</div>
							</div>
							<div class="one-eight text-center">
								<div class="display-tc">
									<span style="margin-left:250px;"class="price"><?php echo $r['ProductPrice'];?></span>
									<?php $gtotal+=$r['ProductPrice']?>
								</div>
							</div>
							
							<div class="one-eight text-center">
								<div class="display-tc">
									<a style="margin-left:100px;"href="deletefromcart.php?id=<?php echo $r['Pid']?>" class="closed"></a>
								</div>
							</div>
						</div>
						<?php }?>
       	            </div>
				</div>
				<div class="row row-pb-lg">
					<div class="col-md-12">
						<div class="total-wrap">
							<div class="row">
								<div class="col-sm-5">
									<form action="#">
										<div class="row form-group">
											<div class="col-sm-9">
												<input type="text" name="quantity" class="form-control input-number" placeholder="Your Coupon Number...">
											</div>
											<div class="col-sm-3">
												<input type="submit" value="Apply Coupon" class="btn btn-primary">
											</div>
										</div>
									</form>
								</div>
								<div class="col-sm-7 text-center">
									<div class="total">
										<div class="sub">
											<p><span>Subtotal:</span> <span>₹ <?php echo $gtotal;?></span></p>
										</div>
										<div class="grand-total">
											<p><span><strong>Total:</strong></span> <span>₹ <?php echo $gtotal;?></span></p>
										</div>
										<div><p><a href="pdf.php" class="btn btn-primary">Download Bill</a></p>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

	</div>
		</div>

	<?php include "footer.php" ;?>

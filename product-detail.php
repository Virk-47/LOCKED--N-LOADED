
<?php include "header.php"?>


		<div class="breadcrumbs">
			<div class="container">
				<div class="row">
					<div class="col">
						<p class="bread"><span><a href="index.html">Home</a></span> / <span>Product Details</span></p>
					</div>
				</div>
			</div>
		</div>
	
<?php
include "dbase.php";
if(isset($_GET['pid']))
{
$pid=$_GET['pid'];
$a="SELECT * from products where SNo='$pid'";
$b=mysqli_query($dbase,$a);
$c=mysqli_num_rows($b);
if($c>0)
{
$r=mysqli_fetch_array($b);
?>	
		<div class="colorlib-product">
			<div class="container">
				<div class="row row-pb-lg product-detail-wrap">
					<div class="col-sm-8">
							<div class="item">
								<div class="product-entry border">
									<a href="#" class="prod-img">
										<img src="<?php echo 'images/'.$r['ProductImage'];?>" class="img-fluid" alt="Free html5 bootstrap 4 template">
									</a>
								</div>
							</div>
							
						
					</div>
					<div class="col-sm-4">
						<div class="product-desc">
							<h3><?php echo $r['ProductName'];?></h3>
							<p class="price">
								<span><?php echo $r['ProductPrice'];?></span> 
								<span class="rate">
									<i class="icon-star-full"></i>
									<i class="icon-star-full"></i>
									<i class="icon-star-full"></i>
									<i class="icon-star-full"></i>
									<i class="icon-star-half"></i>
								</span>
							</p>
							<p><?php echo $r['ProductDescription'];?></p>
							    <div class="input-group mb-4">
                     	<span class="input-group-btn">
                        	<button type="button" class="quantity-left-minus btn"  data-type="minus" data-field="">
                           <i class="icon-minus2"></i>
                        	</button>
                    		</span>
                     	<input type="text" id="quantity" name="quantity" class="form-control input-number" value="1" min="1" max="100">
                     	<span class="input-group-btn ml-1">
                        	<button type="button" class="quantity-right-plus btn" data-type="plus" data-field="">
                             <i class="icon-plus2"></i>
                         </button>
                     	</span>
                  	</div>
                  	<div class="row">
	                  	<div class="col-sm-12 text-center">
									<p class="addtocart"><a href="addtocart.php?pid=<?php echo $r['SNo'];?>" class="btn btn-primary btn-addtocart"><i class="icon-shopping-cart"></i> Add to Cart</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
<?php }}?>

				<div class="row">
					<div class="col-sm-12">
						<div class="row">
							<div class="col-md-12 pills">
								<div class="bd-example bd-example-tabs">
								  <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">

								    <li class="nav-item">
								      <a class="nav-link active" id="pills-description-tab" data-toggle="pill" href="#pills-description" role="tab" aria-controls="pills-description" aria-expanded="true">Description</a>
								    </li>
								    <li class="nav-item">
								      <a class="nav-link" id="pills-manufacturer-tab" data-toggle="pill" href="#pills-manufacturer" role="tab" aria-controls="pills-manufacturer" aria-expanded="true">Manufacturer</a>
								    </li>
								    <li class="nav-item">
								      <a class="nav-link" id="pills-review-tab" data-toggle="pill" href="#pills-review" role="tab" aria-controls="pills-review" aria-expanded="true">Review</a>
								    </li>
								  </ul>

								  <div class="tab-content" id="pills-tabContent">
								    <div class="tab-pane border fade show active" id="pills-description" role="tabpanel" aria-labelledby="pills-description-tab">
								     <p><?php echo $r['ProductDescription'];?></p>
								    </div>

								    <div class="tab-pane border fade" id="pills-manufacturer" role="tabpanel" aria-labelledby="pills-manufacturer-tab">
								      <p>Virk Guns Patiala</p>
								    </div>

								    <div class="tab-pane border fade" id="pills-review" role="tabpanel" aria-labelledby="pills-review-tab">
								      <div class="row">
								   		<div class="col-md-8">
								   			<h3 class="head">23 Reviews</h3>
								   			<div class="review">
										   		<div class="user-img" style="background-image: url(images/person1.jpg)"></div>
										   		<div class="desc">
										   			<h4>
										   				<span class="text-left">Jacob Webb</span>
										   				<span class="text-right">14 March 2018</span>
										   			</h4>
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-half"></i>
										   					<i class="icon-star-empty"></i>
									   					</span>
									   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
										   			</p>
										   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
										   		</div>
										   	</div>
										   	<div class="review">
										   		<div class="user-img" style="background-image: url(images/person2.jpg)"></div>
										   		<div class="desc">
										   			<h4>
										   				<span class="text-left">Jacob Webb</span>
										   				<span class="text-right">14 March 2018</span>
										   			</h4>
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-half"></i>
										   					<i class="icon-star-empty"></i>
									   					</span>
									   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
										   			</p>
										   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
										   		</div>
										   	</div>
										   	<div class="review">
										   		<div class="user-img" style="background-image: url(images/person3.jpg)"></div>
										   		<div class="desc">
										   			<h4>
										   				<span class="text-left">Jacob Webb</span>
										   				<span class="text-right">14 March 2018</span>
										   			</h4>
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-half"></i>
										   					<i class="icon-star-empty"></i>
									   					</span>
									   					<span class="text-right"><a href="#" class="reply"><i class="icon-reply"></i></a></span>
										   			</p>
										   			<p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrov</p>
										   		</div>
										   	</div>
								   		</div>
								   		<div class="col-md-4">
								   			<div class="rating-wrap">
									   			<h3 class="head">Give a Review</h3>
									   			<div class="wrap">
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					(98%)
									   					</span>
									   					<span>20 Reviews</span>
										   			</p>
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-empty"></i>
										   					(85%)
									   					</span>
									   					<span>10 Reviews</span>
										   			</p>
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					(70%)
									   					</span>
									   					<span>5 Reviews</span>
										   			</p>
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					(10%)
									   					</span>
									   					<span>0 Reviews</span>
										   			</p>
										   			<p class="star">
										   				<span>
										   					<i class="icon-star-full"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					<i class="icon-star-empty"></i>
										   					(0%)
									   					</span>
									   					<span>0 Reviews</span>
										   			</p>
										   		</div>
									   		</div>
								   		</div>
								   	</div>
								    </div>
								  </div>
								</div>
				         </div>
						</div>
					</div>
				</div>
			</div>
		</div>
<?php 
	include "footer.php"?>
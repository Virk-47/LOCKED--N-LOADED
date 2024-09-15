<html>
<head>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
</head>
<body>
<form method="post" enctype="multipart/form-data">
<div class="form-group">
    <label for="exampleInputEmail1">Product name</label>
    <input type="text" class="form-control" name="pname" placeholder="Enter Product Name">
    
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter the Price</label>
    <input type="number" class="form-control" name="pprice" placeholder="Enter the Price">
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Enter the Category</label>
    <input type="text" class="form-control" name="pcat" placeholder="Enter the Category">
  </div> 

  <div class="form-group">
    <label for="exampleInputEmail1">Enter the Desciption</label>
    <input type="text" class="form-control" name="pdesc" placeholder="Enter the Description">
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Product Image</label>
    <input type="file" class="form-control" name="pimg">
  </div>
  
  <button name="sub" type="submit" class="btn btn-primary">Submit</button>
</form>
</body>
</html>

<?php
include "dbase.php";
if(isset($_POST['sub'])){
	$pname=$_POST['pname'];
	$pprice=$_POST['pprice'];
	$pdesc=$_POST['pdesc'];
	$pcat=$_POST['pcat'];
	$file_name=$_FILES['pimg']['name'];
	$file_temp=$_FILES['pimg']['tmp_name'];
	$path='images/'.$file_name;
$m=move_uploaded_file($file_temp,$path);	
$a="INSERT INTO products(ProductName,ProductPrice,ProductCategory,ProductDescription,ProductImage)
values('$pname','$pprice','$pcat','$pdesc','$file_name')";
$b=mysqli_query($dbase,$a);
if($b){
	echo "<script>alert('Entry Done')</script>";
}
else{
		echo "<script>alert('Entry Not Done')</script>";
}
}

?>
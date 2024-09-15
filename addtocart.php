<?php
include "dbase.php";
session_start();
if(!(isset($_SESSION['uid'])))
{
	echo "<script>alert('Login First');
	window.location.href='login.php'</script>";
}
else{
	$uid=$_SESSION['uid'];
if(isset($_GET['pid']))
{
	$pid=$_GET['pid'];
	$a="SELECT * from products where SNo='$pid'";
	$b=mysqli_query($dbase,$a);
	$c=mysqli_num_rows($b);
	if($c>0)
	{
		while($r=mysqli_fetch_array($b))
		{
			$pname=$r['ProductName'];
			$pprice=$r['ProductPrice'];
			$pimage=$r['ProductImage'];
		}
		$check="SELECT * from cart where Pid='$pid' and Uid='$uid'";
		$q=mysqli_query($dbase,$check);
		$count=mysqli_num_rows($q);
		if($count>0)
		{
			echo "<script>alert('Product already in Cart');
			window.location.href='cart.php'</script>";
		}
		else
		{
		$cart="INSERT into cart(Pid,ProductName,ProductPrice,ProductImage,Uid)
		values('$pid','$pname','$pprice','$pimage','$uid')";
		$query=mysqli_query($dbase,$cart);
		if($query)
		{
			echo "<script>alert('Product added to Cart');
			window.location.href='cart.php'</script>";
		}
		}
	}
}
}
?>
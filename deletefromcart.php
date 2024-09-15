<?php
include "dbase.php";
if(isset($_GET['id'])){
	$id=$_GET['id'];
	$a="DELETE from cart where Pid='$id'";
	$b=mysqli_query($dbase,$a);
	if($b){
		header('location:cart.php');
	}
}
?>
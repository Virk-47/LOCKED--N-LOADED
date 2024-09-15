<?php
session_start();
$uid= $_SESSION['uid'];
require('vendor/autoload.php');
include "dbase.php";
$res=mysqli_query($dbase,"select * from cart where uid='$uid'");
if(mysqli_num_rows($res)>0){
	$html='<style>
	table{
		border: 5px solid black;
		width:100%;
		border-collapse: collapse;
		
		
	}
	td{
		font-size:20px;
	}
	
	#head{
		
		text-shadow:2px 2px 2px red;
		text-align: center;
		font-size:50px;

	}
	div{ 
		margin-bottom:40px;
		
	}
	th, td {
		padding: 10px;
		text-align: center;
		border: 4px solid black;
	  }
	  #thead,th{
		background-color:black;
		color: white;
		font-size:25px;
	  }
	  tr:nth-child(even) {
		background-color: #b3b3b3;
	}


	</style>
	<div>
	<h1 id="head"> Order Receipt</h1>
	</div>
	<table class="table">';
		$html.='<tr id="thead"><th>ID</th><th>Product Name</th><th>Price</th></tr>';
		$total=0;
		while($row=mysqli_fetch_assoc($res)){
			$sum=$row['ProductPrice'];
			$total+=$sum;

			$html.='<tr><td>'.$row['SNo'].'</td><td>'.$row['ProductName'].'</td><td>&#8377; '.$row['ProductPrice'].'</td></tr>';
		}
		$html.='<tr id="thead"><th>TOTAL</th><th></th><th>&#8377; '.$total;'</th></tr>';
	$html.='</table>';
}else{
	$html="Data not found";
}
$mpdf=new \Mpdf\Mpdf();
$mpdf->WriteHTML($html);
$file='pdf/'.time().'.pdf';
$mpdf->output($file,'I');
//D
//I
//F
//S
?>


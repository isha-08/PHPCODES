<?php
	session_start();
	
	$ProdName=$_POST['ProdName'];
	$Qty=$_POST['Qty'];
	$Rate=$_POST['Rate'];
	
	echo "<h3>BILL</h3> ";
	echo "Name : ".$_SESSION['Name']."<br>";
	echo "Address : ".$_SESSION['Address']."<br>";
	echo "MobileNo : ".$_SESSION['MobileNo']."<br><br>";

	echo "ProdName : ".$ProdName."<br>";
	echo "Qty : ".$Qty."<br>";
	echo "Rate : ".$Rate."<br>";
	
	$amount = $Qty*$Rate;
	
	echo "<h2>Total Amount is ".$amount."</h2>";
	session_destroy();
?>
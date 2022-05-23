<?php
	session_start();
	$basic = $_POST['basic'];
	$DA = $_POST['DA'];
	$HRA= $_POST['HRA'];

	echo "<h3>Employee Details</h3> ";
	echo "Name : ".$_SESSION['eno']."<br>";
	echo "Address : ".$_SESSION['enm']."<br>";
	echo "Class : ".$_SESSION['eadd']."<br><br>";

	echo "basic : ".$basic."<br>";
	echo "DA : ".$DA."<br>";
	echo "HRA : ".$HRA."<br>";

	$total = $basic+($basic*$DA)/100+($basic*$HRA)/100;
	echo "<h2>Total Earnings are : ".$total."</h2>";
	
?>

<?php
    session_start();
    $m1=$_POST['m1'];
    $m2=$_POST['m2'];
	$m3=$_POST['m3'];
	$m4=$_POST['m4'];
	$m5=$_POST['m5'];
	$m6=$_POST['m6'];
    echo "<h3>Student Personal and Marks Details are:</h3>"."<br>";
    echo "Roll Number: ".$_SESSION['rno']."<br>";
	echo "Name: ".$_SESSION['name']."<br>";
	echo "Class: ".$_SESSION['class']."<br>";
	echo "Mobile Number: ".$_SESSION['mobno']."<br><br><br>";
    echo "Java: ".$m1."<br>";
	echo "PHP: ".$m2."<br>";
	echo "ST: ".$m3."<br>";
	echo "STT: ".$m4."<br>";
	echo "DA: ".$m5."<br>";
	echo "CC: ".$m6."<br>";
    $s_total=($m1+$m2+$m3+$m4+$m5+$m6);
	$s_percentage=(($m1+$m2+$m3+$m4+$m5+$m6)/600)*100;
    echo"<h3>Student's Total is: ".$s_total."</h3>";
	echo"<h3>Student's Percentage is: ".$s_percentage."</h3>";
    session_destroy();
?>


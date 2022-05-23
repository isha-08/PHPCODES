<?php
	$style = $_COOKIE['set1'];
	$color = $_COOKIE['set2'];
	$size = $_COOKIE['set4'];
	$b_color = $_COOKIE['set3'];
	$msg = "Hello World";
	echo "<body bgcolor=$b_color>";
	echo "<font color=$color size=$fsize style=$fstyle>$msg";
	echo "</font></body>";
?>

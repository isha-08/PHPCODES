<?php
$style = $_COOKIE['set1'];
$color = $_COOKIE['set2'];
$size = $_COOKIE['set4'];
$b_color = $_COOKIE['set3'];
$msg = "Welcome";
echo "<body bgcolor=$b_color>";
echo "<font color=$color size=$size> <center>$msg </center>";
echo "</font></body>";
?>

<?php
    session_start();
    $rno=$_GET['rno'];
    $name=$_GET['name'];
    $class=$_GET['class'];
    $mobno=$_GET['mobno'];
    $_SESSION['rno']=$rno;
    $_SESSION['name']=$name;
	$_SESSION['class']=$class;
	$_SESSION['mobno']=$mobno;
?>
<html>
<body>
<form action="Marksheet.php" method="POST">
<center>
<h2>Enter the earning of Employee:</h2> <br>
<table>
<tr><td>Java : </td><td><input type="text" name="m1"></td><tr>
<tr><td>PHP : </td><td><input type="text" name="m2"></td></tr>
<tr><td>ST : </td><td><input type="text" name="m3"></td></tr>
<tr><td>STT : </td><td><input type="text" name="m4"></td></tr>
<tr><td>DA : </td><td><input type="text" name="m5"></td></tr>
<tr><td>CC: </td><td><input type="text" name="m6"></td></tr>
<tr><td></td><td><input type="submit" value="submit"></td></tr>
</table>
</center>

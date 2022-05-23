<?php
	echo "style is ".$_GET['fstyle']."<br>color is ".$_GET['fcolor']."<br>Background color is ".$_GET['bcolor']."<br>size is ".$_GET['fsize'];
	setcookie("set1",$_GET['fstyle']);
	setcookie("set2",$_GET['fcolor']);
	setcookie("set3",$_GET['bcolor']);
	setcookie("set4",$_GET['fsize']);
?>

<html>
<body>
<form action="A1SAQ2_1.php">
	<input type=submit value=SUBMIT>
</form>
</body>
</html>
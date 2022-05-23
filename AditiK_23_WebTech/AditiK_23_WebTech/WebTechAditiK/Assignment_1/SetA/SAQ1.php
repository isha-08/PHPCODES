<html>
<body>
<?php
	session_start();
	if(isset($_SESSION['hit']))
		$_SESSION['hit'] += 1;
	else
		$_SESSION['hit'] = 1;
	echo "<h3>Number of times page is accessed is : </h3>".$_SESSION['hit'];
?>
<form method="GET" action="SAQ1.php">
	<input type="submit" value="submit">
</form>
</body>
</html>

<html>
<body>
	<form action="Bill.php" method="POST">
	Prod_name: <input type="text" name="Prod_name"><br>
	Qty: <input type="text" name="Qty"><br>
	Rate: <input type="text" name="Rate"><br><br>
	<input type="submit" value="SUBMIT">
	</form>
</body>
</html>

<?php
	session_start();
	$_SESSION['Name'] = $_POST['Name'];
	$_SESSION['Address'] = $_POST['Address'];
	$_SESSION['Mobile_No'] = $_POST['Mobile_No'];
?>

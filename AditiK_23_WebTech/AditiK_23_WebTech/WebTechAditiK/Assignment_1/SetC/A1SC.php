<html>
<body>
	<form action="Bill.php" method="POST">
	ProdName: <input type="text" name="ProdName">
	Qty: <input type="text" name="Qty">
	Rate: <input type="text" name="Rate">
	<input type="submit" value="SUBMIT">
	</form>
</body>
</html>

<?php
	session_start();
	$_SESSION['Name'] = $_POST['Name'];
	$_SESSION['Address'] = $_POST['Address'];
	$_SESSION['MobileNo'] = $_POST['MobileNo'];
?>
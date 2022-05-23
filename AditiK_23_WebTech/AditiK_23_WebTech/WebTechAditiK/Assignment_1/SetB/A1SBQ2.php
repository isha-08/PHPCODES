<?php
	session_start();
	$eno = $_GET['eno'];
	$enm = $_GET['enm'];
	$eadd = $_GET['eadd'];

	$_SESSION['eno'] = $eno;
	$_SESSION['enm'] = $enm;
	$_SESSION['eadd'] = $eadd;
?>

<html>
<body>

	<form action="A1SBQ2_1.php" method="POST">

	<h2>Enter Earnings of Employee:</h2>

	basic : <input type="text" name="basic">
	DA : <input type="text" name="DA">
	HRA : <input type="text" name="HRA">
	<input type="submit" value="SUBMIT">
	</form>
</body>
</html>

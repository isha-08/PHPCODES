<?php
echo'
<html>
<body>
<form method="POST" action=';
echo $_SERVER["PHP_SELF"];
echo'>
Enter Username: <input type="text" name="username"><br>
Enter Password: <input type="password" name="password"><br>
<input type="submit" value="SUBMIT">
</form>
</body>
</html>';

session_start();
	if(!isset($_POST['username']))
		$_SESSION['chance'] = 0;
	else 
		$_SESSION['chance'] += 1;
	if($_SESSION['chance']<3 && $_POST['username'] =="abc" && $_POST['password'] == "abc")
		header("Location: http://192.168.1.21/ty23/WebTechAditiK/Assignment_1/SetB/Second.php");
	if($_SESSION['chance']>=3)
		echo "ERROR";	
	
	
?>

<?php
echo'
<html>
<body>
<form method="POST" action=';
echo $_SERVER["PHP_SELF"];
echo'>
Enter Your Username: <input type="text" name="uname"><br>
Enter Your Password: <input type="password" name="password"><br><br>
<input type="submit" value="SUBMIT">
</form>
</body>
</html>';

session_start();
	if(!isset($_POST['uname']))
		$_SESSION['chance'] = 0;
	else 
		$_SESSION['chance'] += 1;
	if($_SESSION['chance']<3 && $_POST['uname'] =="iph" && $_POST['password'] == "iph@081")
		//header("Location: http://localhost/PHP_CODES/ty_22_Web_Tech_Folder/Assignment_1/Set_B/Second.php");
		header("Location: http://192.168.1.21/ty22/ty_22_Web_Tech_Folder/Assignment_1/Set_B/Second.php");
	if($_SESSION['chance']>=3)
		echo "ERROR";	
	
	
?>

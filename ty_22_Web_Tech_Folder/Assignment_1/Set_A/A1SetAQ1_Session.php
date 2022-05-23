<?php
	session_start();
	if(isset($_SESSION['cnt']))
	{
		$_SESSION['cnt']+=1;
		echo "You have visited this page ".$_SESSION['cnt']." times";
	}
	else
	{
		$_SESSION['cnt']=1;
		echo "You have visited this page {$_SESSION['cnt']} times";
	}
?>
<html>
<body>
	<a href="A1SetAQ1_Session.php">Refresh</a>
</body>
</html>


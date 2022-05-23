<?php
    session_start();
    $eno=$_GET['eno'];
    $ename=$_GET['ename'];
    $eadd=$_GET['eadd'];
    
    $_SESSION['eno']=$eno;
    $_SESSION['ename']=$ename;
    $_SESSION['eadd']=$eadd;
?>
<html>
<body>
<form action="A1SetBQ2_2.php" method="POST">
Enter the earning of Employee:<br>
BASIC:<input type="text" name="basic"><br>
DA:<input type="text" name="da"><br>
HRA:<input type="text" name="hra"><br><br>
<input type="submit" value="submit">
</form>
</body>
</html>

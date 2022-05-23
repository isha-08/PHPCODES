<?php
    session_start();
    $basic=$_POST['basic'];
    $da=$_POST['da'];
    $hra=$_POST['hra'];
    echo "<h3>Employee Personal Details are:</h3>"."<br>";
    echo "Employee Number: ".$_SESSION['eno']."<br>";
    echo "Employee Name: ".$_SESSION['ename']."<br>";
    echo "Employee Address: ".$_SESSION['eadd']."<br><br><br>";
    echo "Basic: ".$basic."<br>";
    echo "DA: ".$da."<br>";
    echo "HRA: ".$hra."<br>";
    $e_total=$basic+($basic*$da)/100+($basic*$hra)/100;
    echo"<h3>Employee's Total Earnings are: ".$e_total."</h3>";
    session_destroy();
?>

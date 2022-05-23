<?php
  session_start();

    echo"<h2>Employee Details</h2>";
    echo "<b><i>Employee No:</i></b> ".$_SESSION['eno'];
    echo "<br><b><i>Employee Name:</i></b> ".$_SESSION['ename'];
    echo "<br><b><i>Employee Address:</i></b> ".$_SESSION['eaddress'];
    echo "<h2>Employee Earnings</h2>";
    echo "<b><i>Basic Salary:</i></b> ".$_GET['basic'];
    echo "<br><b><i>DA:</i></b> ".$_GET['da'];
    echo "<br><b><i>HRA:</i></b> ".$_GET['hra'];
    echo "<h2>Total</h2>";
    echo "<b><i>Total is:</i></b> ".$_GET['basic']+$_GET['basic']*$_GET['da']/100+$_GET['basic']*$_GET['hra']/100;
    session_destroy();
?>

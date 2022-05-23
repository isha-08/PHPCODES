<?php
  session_start();

    echo"<h2>Customer Details</h2>";
    echo "<b><i>Customer Name:</i></b> ".$_SESSION['cname'];
    echo "<br><b><i>Customer Mobile Number:</i></b> ".$_SESSION['cno'];
    echo "<br><b><i>Customer Address:</i></b> ".$_SESSION['caddress'];
    echo "<h2>Product Details</h2>";
    echo "<b><i>Product Name:</i></b> ".$_GET['pname'];
    echo "<br><b><i>Quantity:</i></b> ".$_GET['pqty'];
    echo "<br><b><i>Rate:</i></b> ".$_GET['prate'];
    echo "<h2>Total</h2>";
    echo "<b><i>Total is:</i></b> ".$_GET['pqty']*$_GET['prate'];
    
  session_destroy();
 ?>

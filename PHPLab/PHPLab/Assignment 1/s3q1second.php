<?php
  session_start();

    $_SESSION['cname']=$_GET['cname'];
    $_SESSION['cno']=$_GET['cno'];
    $_SESSION['caddress']=$_GET['caddress'];
  
?>
<html>
  <head>
    <body>
      <center>
        <form action="s3q1third.php" method="GET">
          <h1>Product details</h1>
          <h4>Product Name:</h4><input type="text" name="pname">
          <h4>Quantity:</h4><input type="text" name="pqty">
          <h4>Rate:</h4><input type="text" name="prate"><br><br>
          <input type="submit" value="GENERATE BILL">
        </form>
      </center>
    </body>
  </head>
</html>

<!--php session-->
<?php
  session_start();
    $_SESSION['eno']=$_GET['eno'];
    $_SESSION['ename']=$_GET['ename'];
    $_SESSION['eaddress']=$_GET['eaddress'];

?>
<!--html-->
<html>
  <head>
    <body>
      <center>
        <form action="s2q2third.php" method="GET">
          <h1>Employee Earning</h1>
          <h4>Basic salary:</h4><input type="text" name="basic">
          <h4>Dearness allowance (DA):</h4><input type="text" name="da">
          <h4>House rent allowance (HRA):</h4><input type="text" name="hra"><br><br>
          <input type="submit" value="TOTAL">
        </form>
      </center>
    </body>
  </head>
</html>

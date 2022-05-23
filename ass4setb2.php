<?php
   $oname = $_POST['oname'];
   $con = pg_connect("host = 192.168.1.21 dbname = ty30 user=ty30");
   $qry = "select odate , add from order1 ,customer where order.ono = customer.cno";
   $rs = pg_query($con , $qry) or die("Unable to execute query");
   if($rs != NULL)
   {
       echo "<table border =0>";
       echo "<tr><td>Order No </td><td>Order Date </td><Address</td></tr>";
       while($row = pg_fetch_row($rs))
       {
            echo "<tr>";
            echo "<td>".$row[0]."</td>";
            echo "<td>".$row[1]."</td>";
            echo "<td>".$row[2]."</td>";
            echo "</tr>";
       }
       else
          echo "NO records Found";
       pg_close($con);
?>

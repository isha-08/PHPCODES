<html> 
<body> 
<?php 
if (!isset($_COOKIE['count'])) 
{ 
  echo "Welcome! This is the first time you have viewed this page."; 
  $cookie = 1;
  setcookie("count", $cookie);
}
else
{
  $cookie = ++$_COOKIE['count'];
  setcookie("count", $cookie); 
  echo "You have viewed this page ".$_COOKIE['count']." times."; 
 }
?> 
<a href="A1SetAQ1_Cookies.php">Refresh</a>
</body> 
</html>

<?php
  //using cookie
  /*if(!isset($_COOKIE['count']))
  {
    setcookie('count',1);
    echo "First time page has been accessed";
  }
  else
  {
    $x=$_COOKIE['count'];
    $x=$x+1;
    setcookie('count',$x);
  }
  echo "Page has been accessed $x times."; */
  session_start();
  if(!isset($_SESSION['count']))
  {
    $_SESSION['count']=1;
  }
  else
  {
    $_SESSION['count']= $_SESSION['count']+1;
  }
  echo "Page has been accessed {$_SESSION['count']} times.";

?>

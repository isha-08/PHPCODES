<?php
    $style=$_COOKIE["a"];
    $color=$_COOKIE["b"];
    $bcolor=$_COOKIE["c"];
    $fsize=$_COOKIE["d"];
    $msg="These Are The Newly Applied Changes!";
    echo "<body bgcolor=$bcolor>";
    echo "<font color=$color size=$fsize face=$style> $msg";
    echo "</font></body>";
?>

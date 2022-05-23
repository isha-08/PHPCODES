<?php
    echo "Your Chosen Style is: ".$_GET['fstyle']."<br>Chosen Colour is: ".$_GET['fcolor']."<br>Chosen Background Colour is: ".$_GET['bcolor']."<br>Chosen Size is: ".$_GET['fsize'];

    setcookie("a", $_GET['fstyle']);
    setcookie("b", $_GET['fcolor']);
    setcookie("c", $_GET['bcolor']);
    setcookie("d", $_GET['fsize']);
?>
<html>
    <body>
        <form action="A1SetAQ2_2.php">
        <input type="submit" value="Apply The Preferences!">
        </form>
    </body>
</html>

<?php
//session start
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<body>
    
     <?php 
     $_SESSION["favcolor"]="green";
     $_SESSION["favanimal"]="cat";
     echo "session variables are set";
     echo "favcolor is ".$_SESSION["favanimal"]."<br>";
     echo "favanimal is ".$_SESSION["favcolor"]."<br>";
     ?>
</body>
</html>
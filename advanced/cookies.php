<!DOCTYPE html>
<?php
    $cookie_name="user";
    $cookie_value="john doe";
    setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
    ?>
<html lang="en">
<body>
   
     <?php 
     if(!isset($COOKIE[$cookie_name])){
        echo "cookie named'" . $cookie_name ."'is not set!";
     } else{
        echo "cookie named" . $cookie_name;
        echo "value" . $cookie_value;
     }
     ?>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
</head>
<body>
    <?php 
     $name= '{"peter":"333","jess":"666","shibu":"666"}';
     var_dump(json_decode($name));
     $obj = json_decode($name);
     echo "{$obj->peter}"; 
     echo "{$obj->jess}";
     echo "{$obj->shibu}";

     ?>
    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    date_default_timezone_set("America/New_york");
    echo "the timeis" .date("Y-m-d H:i:sa <br>") ;
    echo ("<br>");
    $d=mktime(11, 13, 3, 10, 12, 2023);
    echo "created date is" .date("y.m.d h:i:sa <br>",$d);
    echo ("<br>");
    echo date("t");
    ?>
</body>
</html>
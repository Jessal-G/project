<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $myfile=fopen("testfile.txt","a") or die("Can't open'");//created new file named testfile.txt
    $txt="shinf\n";
    fwrite($myfile,$txt);
    $txt="jbhjfhgd\n";
    fwrite($myfile,$txt);//added another line to the end of text file
    fclose($myfile);
    ?>
</body>
</html>
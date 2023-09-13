<!DOCTYPE html>
<html>
<body>

<?php
$myfile = fopen("filehandling.txt", "w") or die("Unable to open file!");
echo fread($myfile,filesize("filehandling.txt"));
fclose($myfile);
?>

</body>
</html>
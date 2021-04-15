<?php
$namaFile="myfile.txt";
$myfile = fopen($namaFile, "r") or die("File tidak dapat dibuka!");
echo fread($myfile,filesize($namaFile));
fclose($myfile);
?>
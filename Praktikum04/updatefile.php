<?php
$namafile="myfile.txt";
$myfile=fopen($namafile, "w") or die("tidak bisa buka file");
fwrite($myfile, "DOS = Disk Operating System\n");
fclose($myfile);
?>
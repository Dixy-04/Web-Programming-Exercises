<?php

session_start();
//mereset user dan email
setcookie("Nama","");
setcookie("Email","");
//mereset nyawa dan skor
$_SESSION["nyawa"]="";
$_SESSION["skor"]="";
//kembali ke halaman login
header("Location:index.html");
?>
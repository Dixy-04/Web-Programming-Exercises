<?php
//mengambil nama dan email dari index.html
$nama = $_POST['nama'];
$email = $_POST['email'];
//menyimpan nama dan email dalam bentuk cookie
setcookie("Nama",$_POST['nama']);
setcookie("Email",$_POST['email']);

header('Location:home.php')
?>
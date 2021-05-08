<?php
//mengecek ada tidaknya cookie pengguna
if(!isset($_COOKIE['Nama'])){
    header('Location:index.html');
} else{
    header('Location:home.php');
}
?>
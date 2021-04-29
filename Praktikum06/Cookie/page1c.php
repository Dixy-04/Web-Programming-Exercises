<?php
include("cek.php");

echo "<h1>Ini Page 1</h1>";
echo "<p>Selamat datang ".$_COOKIE['namauser']."</p>";
    
echo "<h2>Menu Utama</h2>";
echo "<p><a href='page1c.php'>Page 1</a> | <a href='page2c.php'>Page 2</a> | <a href='page3c.php'>Page 3</a> | <a href='logoutCookie.php'>Logout</a></p>";
?>

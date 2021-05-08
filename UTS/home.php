<?php

//memulai sesi serta memberikan nyawa dan skor awal
session_start();
$_SESSION['nyawa'] = 5;
$_SESSION['skor'] = 0;
?>

Hallo <?php echo $_COOKIE["Nama"]; ?>, Selamat datang di Game Penjumlahan!!!
<form action="preparation.php" method="post">
    <input type="submit" value="Start Game">
</form>

<!-- jika pengguna salah -->
Bukan anda? <a href="logout.php">(klik di sini)</a>
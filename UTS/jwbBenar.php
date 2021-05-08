<!-- bila jawaban benar -->
<?php session_start();?>

Hello <?php echo $_COOKIE["Nama"]; ?>, Selamat jawaban Anda benar!!<br>
Lives: <?php echo $_SESSION['nyawa']; ?> | Score: <?php echo $_SESSION['skor'];?><br>
<a href="preparation.php" > Soal selanjutnya </a>

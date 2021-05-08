<!-- bila jawaban salah -->
<?php session_start();?>

Waduhh <?php echo $_COOKIE["Nama"]; ?>, sayang sekali jawaban Anda salah… tetap semangat ya !!!<br>
Lives: <?php echo $_SESSION['nyawa']; ?> | Score: <?php echo $_SESSION['skor'];?><br>
<a href="preparation.php" > Soal selanjutnya </a>

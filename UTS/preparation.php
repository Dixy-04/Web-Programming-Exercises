<?php session_start();?>
<!-- sapaan serta menganbil value nyawa dan skor -->
Hello <?php echo $_COOKIE['Nama'];?>,semangat ya.. you can do it. Do your best!!<br>
Lives : <?php echo $_SESSION['nyawa']; ?> | Score : <?php echo $_SESSION['skor'] ?>

<?php
//untuk merandom angka
$num1 = random_int(0,20);
$num2 = random_int(0,20);

setcookie("num1",$num1);
setcookie("num2",$num2);

?>

<!-- untuk memulai permainan -->
<form action="game.php" method="post">
    Berapakah hasil dari <?php echo $num1;?> + <?php echo $num2;?> = 
    <input name="jawaban" type="text" onkeypress="return event.charCode == 13 || event.charCode >= 48 && event.charCode <= 57" required/>
    <input type="submit" value="Jawab">
</form>

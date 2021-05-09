<?php
session_start();

//if untuk mengecek nyawa
if ($_SESSION['nyawa'] <= 0){
    //jika nyawa habis
    header('location:gameOver.php');
    
} else{
    //mengambil angka yang dirandom tadi sekaligus menjumlahkan
    $jml = $_COOKIE['num1'] + $_COOKIE['num2'];
    //mengambil jawaban pengguna
    $jawaban = $_POST['jawaban'];
    
    //cek jawaban
    if ($jawaban == $jml){
        //jwb benar
        $_SESSION['skor'] = $_SESSION['skor'] + 10;
        header("location:jwbBenar.php");
    } else{
        //jwb salah
        $_SESSION['nyawa'] = $_SESSION['nyawa'] - 1;
        if($_SESSION['skor'] > 1){
            $_SESSION['skor'] = $_SESSION['skor'] - 2;
        }
        header("location:jwbSalah.php");
    } 
}

?>
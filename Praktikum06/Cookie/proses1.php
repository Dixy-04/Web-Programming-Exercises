<?php

$user= array(
    array("username1", "Rosihan Ari Yuana", "123456"),
    array("username2", "Dwi Amalia Fitriani", "654321"),
    array("username3", "Faza Fauzan Khosyiyarrohman", "112233")
);


if(isset($_POST['submit'])){
    setcookie("username",$_POST['username']);
    setcookie("password",$_POST['password']);

    foreach($user as $profile_user){
        if(($profile_user[0]==$_POST['username'])&&($profile_user[2]==$_POST['password'])){
            setcookie("namauser",$profile_user[1]);
            header("Location:page1.php");
        }        
    }
    echo "<h3>Login gagal</h3>";
    echo "<p>Silakan <a href='index.html'>login kembali</a></p>";
}
?>
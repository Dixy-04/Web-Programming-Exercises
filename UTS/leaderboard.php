<?php
session_start();

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "game";

$connect = mysqli_connect($servername, $username, $password, $dbname);
$cekSql = "SELECT username, email, skor FROM leaderboard ORDER BY skor DESC LIMIT 10 ";
$result = mysqli_query($connect, $cekSql);

if(mysqli_num_rows($result) > 0) {
    //style tabel
    echo "
    <style>
        table, th, td {
            border: 1px solid black;
            border-collapse: collapse;
        }
        td{
            padding : 0px 10px;
        }
    </style>
    ";
    // $x adalah untuk penomoran
    $x = 1;
    echo "<table>";
    echo "<tr><td>Rank</td><td>Nama</td><td>Skor</td></tr>";
    //mengambil satuan data
    while($row = mysqli_fetch_assoc($result)) {
        //membuat tabel
        echo "<tr>";
            echo "<td>".$x++."</td>";
            echo "<td>".$row["username"]."</td>";
            echo "<td>".$row["skor"]."</td>";
        echo "</tr>";
    }
    echo "</table>";
} else {
  echo "no results";
}

mysqli_close($connect);
?>

<a href="home.php">kembali</a>

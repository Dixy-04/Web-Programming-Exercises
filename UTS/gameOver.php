<?php
session_start();
//mengkoneksikan dengan database
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "game";

$nama = $_COOKIE['Nama'];
$email =  $_COOKIE['Email'];
$skor = $_SESSION['skor'];

$connect = mysqli_connect($servername, $username, $password, $dbname);

//menambahakan data ke mysql
$sql = "INSERT INTO leaderboard (username, email, skor) VALUES ('".$nama."', '".$email."', ".$skor.")";
mysqli_query($connect, $sql);

//mengambil database
$cekSql = "SELECT username, email, skor FROM leaderboard ORDER BY skor DESC LIMIT 10 ";
$result = mysqli_query($connect, $cekSql);

//menampilkan data
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

<br>
Hello <?php echo $nama; ?>… Sayang permainan sudah selesai, semoga kali lain bisa lebih baik... Jika sudah baik pertahankan!!<br>
Score Anda : <?php echo $skor;?><br>
<a href="home.php" > Home </a>

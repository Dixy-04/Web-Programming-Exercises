<?php

// baca kedua bilangan
$bil1 = $_POST["bil1"];
$bil2 = $_POST["bil2"];
// baca operator
$op = $_POST["operasi"];
// proses perhitungan
if ($op == "+"){
	$hasil = $bil1 + $bil2;
} else if ($op == "-"){
	$hasil = $bil1 - $bil2;
} else if ($op == "x"){
	$hasil = $bil1 * $bil2;
} else if ($op == "/"){
	$hasil = $bil1 / $bil2;
} else if ($op == "^"){
	$hasil = $bil1**$bil2;
}
// menampilkan hasil perhitungan
if ($op != "Pilih operator") {
	echo "<h2>".$bil1." ".$op." ".$bil2." = ".$hasil."</h2>";
} else {
	echo "<h2> Tolong masukkan operasi !";
}

?>
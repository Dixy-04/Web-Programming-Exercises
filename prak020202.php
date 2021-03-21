<?php
$baris = 4;
$kolom = 5;
$k = 1;

echo "<table border='1'>";
for($i = 1; $i <= $baris; $i++) {
	echo "<tr>";
	for ($j = 1; $j <= $kolom; $j++){
		echo "<td>$k</td>";
		$k++;
	}
	echo "</tr>";
}
echo "</table>";
?>
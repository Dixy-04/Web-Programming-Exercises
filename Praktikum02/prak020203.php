<?php
$baris = 4;
$kolom = 5;
$k = 1;

echo "<table border='1'>";
for($i = 1; $i <= $baris; $i++) {
	echo "<tr>";
	for ($j = 1; $j <= $kolom; $j++){
		if ($k % 2 == 0) {
			echo "<td bgcolor='red'><font color='white' color='red'>$k</td>";
			$k++;
		} else {
			echo "<td bgcolor='white'><font color='red'>$k</td>";
			$k++;
		}
		
	}
	echo "</tr>";
}
echo "</table>";
?>

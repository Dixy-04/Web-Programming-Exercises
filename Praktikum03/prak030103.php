<?php

function buatBintang($n) {
	echo "<pre>";
	for($i=$n; $i>=0; $i--) {
		for($j=$i; $j>0; $j--){

			echo "* ";
		}
			echo "\n";
		}
		echo "</pre>";
}
buatBintang(4);
buatBintang(5);

?>
<?php

function hitungDenda($tglHarusKembali, $tglKembali) {
	$exp1 = explode("-", $tglHarusKembali);
	$d1 = $exp1[2];
	$m1 = $exp1[1];
	$y1 = $exp1[0];
	
	$exp2 = explode("-", $tglKembali);
	$d2 = $exp2[2];
	$m2 = $exp2[1];
	$y2 = $exp2[0];

	$jd1 = GregorianToJD($m1, $d1, $y1);
	$jd2 = GregorianToJD($m2, $d2, $y2);

	$selisih = $jd2 - $jd1;

	$denda = $selisih*3000;
	echo "Besarnya denda adalah: Rp".$denda;
}

    hitungDenda("2021-01-03","2021-01-05");

?>
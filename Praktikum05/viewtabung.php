<table border="1">
    <tr>
        <td>NAMA TABUNG</td>
        <td>DIAMETER</td>
        <td>TINGGI</td>
        <td>LUAS</td>
    </tr>
	<?php

	$namafile="datatabung.dat";
	$file=fopen($namafile, "r") or die("File tidak dapat dibuka!");

	while(!feof($file)){ 
		$datatabung = fgets($file) . '<br>';
		$data = explode("," , $datatabung);
		$nama = $data[0];
		$diameter = $data[1];
		$tinggi = $data[2];
		$view ="hitungluas.php?n=$nama&d=$diameter&t=$tinggi";
		echo "<tr><td>$nama</td><td>$diameter</td><td>$tinggi</td><td><a href=$view>view</a></td></tr>";
	}

	fclose($file);

	?>
</table>
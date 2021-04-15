<table border="1">
    <tr>
        <td width="40">No</td>
        <td width="100">NIM</td>
        <td width="200">Nama</td>
        <td width="200">Tanggal Lahir</td>
        <td width="100">Tempat Lahir</td>
        <td width="60">Usia</td>
    </tr>

<?php
$namafile="datamhs.dat";
$myfile=fopen($namafile, "r") or die("tidak bisa buka file");
$jumlah = count(file($namafile));
$no = 1;
$today = new DateTime("today");

echo "Jumlah Siswa :" . $jumlah . '<br>';
for ($i=0; $i < $jumlah ; $i++) {
	$datamhs = fgets($myfile) . '<br>';
	$data = explode("|" , $datamhs);
	$birthDate = new DateTime($data[2]);
	$usia = $today->diff($birthDate)->y;
	echo "<tr><td>$no</td><td>$data[0]</td><td>$data[1]</td><td>$data[2]</td><td>$data[3]</td><td>$usia Tahun</td></tr>";
	$no++;
}


fclose($myfile);
?>
</table>
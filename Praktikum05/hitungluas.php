<?php

$pi = 22/7;
$nm = $_GET['n'];
$dm = $_GET['d'];
$tg = $_GET['t'];
$ls = number_format($pi*($dm/2)**2*$tg, 2);

echo "Luas tabung $nm dengan diameter $dm dan tinggi $tg adalah $ls satuan luas";

?>
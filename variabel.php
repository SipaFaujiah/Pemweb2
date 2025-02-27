<?php

$nama_depan = "Rakha";
$nama_belakang = "zahran";
$umur = 20;
$tb = 150.9;

echo $nama_depan . "" . $nama_belakang ;
echo "<br>Nama saya adalah $nama_depan dan saya berumur $umur";

echo "<br /><br />";

//variabel system
echo 'Dokumen Root' . $_SERVER
["DOCUMENT_ROOT"];

//variabel constanta
define('PHI', 3.14);

$r = 8;
$luas = PHI * $r * $r;
echo "Lingkaran dengan jari-jari {$r} cm memiliki luas {$luas}cm";
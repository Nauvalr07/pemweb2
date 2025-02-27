<?php

$nama_depan = "Nauval";
$nama_belakang = "Ramadhan";
$umur = 20;
$tb = 170.2;

echo $nama_depan . " " . $nama_belakang ;
echo "<br>Nama Saya adalah $nama_depan
dan Saya berumur $umur";

// variable system
echo 'Dokumen Root' . $_SERVER
['DOCUMENT_ROOT'];

// Variable Constant
define('PHI', 3.14);

$r = 8;
$luas = PHI * $r * $r;

echo "lingkaran dengan jari-jari $r memiliki luas [$luas]cm2";
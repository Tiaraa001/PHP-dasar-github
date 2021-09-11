<?php

echo "Program Menentukan Diskon PPDB<br>";
$bulan = "mei";
$harga =1000000;
$mei = $harga - ($harga * (30/100));
$juni = $harga - ($harga * (20/100));
$juli = $harga - ($harga * (10/100));

if ($bulan == "mei"){
    echo "Jika anda daftar pada $bulan<br>";
    echo "PPDB anda $harga setelah diskon 30% menjadi $mei";
}elseif ($bulan == "juni"){
    echo "Jika anda daftar pada $bulan<br>";
    echo " PPDB anda $harga setelah diskon 20% menjadi $juni";
}elseif ($bulan == "juli"){
    echo "jika anda daftar pada $bulan<br>";
    echo "PPDB anda $harga setelah diskon 10% menjadi $juli";
}else{
    echo "ANDA TIDAK MENAPATKAN DISKON!";
}
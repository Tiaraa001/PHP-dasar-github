<?php

echo "<h2>Program Konverensi Waktu</h2><br>";
$waktu = "86400";
$pemilihan = "hari";
$hari =  floor ($waktu / 86400);
$jam =   floor($waktu / 3600);
$menit = floor ($waktu / 60);
$detik = $waktu;
 
if($pemilihan == "hari"){
    echo "Detik yang akan dihitung : $waktu detik <br> $hari Hari : $jam Jam : $menit menit : $detik detik";
}else{
    echo "Tidak Ada waktu!";
}

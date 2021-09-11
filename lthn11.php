<?php

 echo "PENGUBAHAN KONVERENSI SUHU<br>";

 $suhu = 10;
 $k = "fahrenheit";
 $r = 4/5 * $suhu;
 $fahrenheit = 9/5 * $suhu + 32;
 $kelvin = $suhu + 273;

 if ($k == "reamur"){
     echo "hasil konversi ke remur : $r " ;
 }elseif ($k == "fahrenheit") {
     echo "hasil konversi ke fahrenheit : $fahrenheit";
 }elseif ($k == "kelvin"){
     echo "hasil konversi ke kelvin : $kelvin";
 }else{
     echo "EROR!";
 }
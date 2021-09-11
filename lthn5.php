<?php
$angka = -9;

if ($angka <=100 && $angka > 90){
    echo "anda mendapatkan Grade A";
}elseif ($angka <=100 && $angka > 80) {
    echo "anda mendapatkan Grade B";
}elseif ($angka <=100 && $angka > 75) {
    echo "anda mendapatkan Grade C";
}elseif ($angka <=100 && $angka > 60) {
    echo "anda mendapatkan Grade D";
}elseif ($angka <= 60 && $angka > 0) {
    echo "anda mendapatkan Grade E";
}else{
    echo "Grade eror";
}
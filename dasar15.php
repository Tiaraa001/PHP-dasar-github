<?php

//membuat function
function hitungumur ($thn_skrng, $thn_lahir){
    $umur = $thn_skrng - $thn_lahir;
    return $umur;
}

//hitung

echo "Umur saya adalah ". hitungumur(2021,2003) . " Tahun";
?>
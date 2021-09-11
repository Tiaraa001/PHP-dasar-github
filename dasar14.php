<?php

//membuat fungsi

function perkenalan($nama,$salam){
    echo $salam. ",";
    echo "Perkenalkan nama saya " .  $nama ."<br/>";
    echo "Senang berkenalan dengan Anda<br/>";
}

//memanggil fungsi
perkenalan("Tiara","Hi");

    echo "<hr>";
    $saya = "ara";
    $ucapansalam = "Selamat Pagi";

//memanggil lagi

perkenalan($saya, $ucapansalam);
?>
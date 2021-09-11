<?php

echo "Program Memilih Jurusan <br>";
$j = "rp";
switch ($j){
    case "rpl":
    echo "anda jurusan RPL";
    break;
    case "tkro":
    echo "anda jurusan TKRO";
    break;
    case "tbsm":
    echo "anda jurusan TBSM";
    break;
    default:
    echo "anda tidak mempunyai jurusan";
}
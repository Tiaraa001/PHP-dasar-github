<?php

echo "Program lalu lintas <br>";
$lampu = "h";
switch ($lampu){
    case "merah":
    echo "anda harus berhenti";
    break;
    case "kuning":
    echo "anda harus siap-siap";
    break;
    case "hijau":
    echo "anda harus maju";
    break;
    default:
    echo "lampu lalu lintas eror";
}
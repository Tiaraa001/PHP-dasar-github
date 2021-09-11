<?php

$json = '{
    
    "dosen": "Danny Indra Gunawan",
    "siswa": "Tiara",
    "umur": "17 tahun",
    "email": "tiara@gmail"
    
    }';

    $mahasiswa = json_decode($json);

    echo "Nama Dosen: {$mahasiswa-> dosen} <br>";
    echo "Nama Mahasiswa: {$mahasiswa-> siswa} <br>";
    echo "Umur Mahasiswa: {$mahasiswa-> umur}<br>";
    echo "Email Mahasiswa: {$mahasiswa-> email}";


    ?>
<?php

echo "1. Pengulangan For <br>";
echo "<br>";

for ($a=0; $a<10; $a++){  
    echo "Ini Perulangan ke - $a <br>";
}

echo "<br>";
echo "2.Pengulangan While <br>";
echo "<br>";
$ulangi=0;
while ($ulangi < 10){
    echo "Ini Perulangan Ke - $ulangi <br>";
    $ulangi++;
}

echo "<br>";
echo "3.Pengulangan Do-While <br>";
echo "<br>";
$ulangi = 0;
do{
    echo "Ini Perulangan ke - $ulangi <br>";
    $ulangi++;
}while ($ulangi < 10);

echo "<br>";
echo "4.Pengulangan Foreach <br>";
echo "<br>";
$books = [
    "Panduan belajar java untuk pemula",
    "Membangun aplikasi Java dengan Netbeans",
    "Tutorial java dan mysql",
    "Membuat penggajian Dekstop dan java"
];
echo "<h5>Judul Buku Java</h5>";
echo "<ol>";
foreach ($books as $buku){
    echo"<li>$buku</li>";
}
echo "</ol>";


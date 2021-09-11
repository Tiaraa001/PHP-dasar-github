<?php

echo "1. Contoh program array numeric <br>";
$jurusan = array("Teknik Informatika", "Sistem Informasi", "Teknik Komputer",
"Manajemen Informatika");

$jurusan_p = count($jurusan);
for($i=0; $i<$jurusan_p; $i++){
    echo "Jurusan $jurusan[$i] - ada di index - $i";
echo "<br>"; 

}

echo "<br>2.Contoh program array assosiatif <br>";

foreach ($jurusan as $key => $value){
    echo "Kata kunci index = jurusan$key,Nilai= $value <br>";
}
?>


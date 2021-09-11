<?php
$perusahaan = [
    'Nama' => 'Tiara Novita Sari' ,
    'Umur' => '17 Tahun',
    'Alamat' =>'Cisirung',
    'Hobi' => ['Berenang' , 'Membaca'],
    'Media Sosial' => ['Instagram' => 'tiaranvtas' , 'facebook' => 'Tiara']
];

echo "<pre>";
print_r($perusahaan);

echo "<br>";
echo " Pemanggilan Array 2 Dimensi" . "<br>";
echo $perusahaan['Hobi'][1]."<br>";
echo $perusahaan['Media Sosial']['Instagram'];
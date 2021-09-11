<?php 

echo "1.Output array dengan menggunakan perintah PRINT_R()<BR>";
$array =[];
$array[] = 'Indonesia';
$array[] = 'Malaysia';
$array[] = 'Singapura';
$array[] = 'Brunei Darussalam';
$array[] = 'Filipina';
echo '<pre>';
print_r($array);

echo "<br>2. array asosiatif<br><br>";

$negara = ['indonesia' => 'jakarta', 'Malaysia' => 'Kuala Lumpur', 'Singapura' => 'singapura',
'thailand' => 'bangkok', 'Filipina' => 'Manila'];

foreach ($negara as $key => $value){
    echo "<li>Ibukota $key adalah $value <br><br>";
}
?> 
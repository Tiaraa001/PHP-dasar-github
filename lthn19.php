<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <fieldset>
        <legend>Menghitung Luas dan Keliling Lingkaran</legend>
        <form action=" " method="POST">
        <table >

        <tr>
        <td>Masukan Nilai
        <input type='number' name='nilai'></input>
        <input type='submit' name='hitung'><br><br>
            </fieldset>  
</form>
</body> 
</html>

<?php

if (isset($_POST['hitung'])){

    function luaslingkaran($jari, $phi=3.14){
        $luas = $jari*$phi*$jari;
        return $luas;
    }
    function keliling($jari, $phi=3.14) {
        $keliling = ($jari * $phi) * 2;
        return $keliling;
    }
    echo "Jari- jari : ";
    echo $_POST['nilai'];
    echo "<br>";
    echo "Luas Lingkaran : ";
    echo luaslingkaran($_POST['nilai']);
    echo "<br>";
    echo "Keliling : ";
    echo keliling($_POST['nilai']);
}
?>

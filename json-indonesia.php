<?php

    $url = "https://api.kawalcorona.com/indonesia/";
    // persiapkan curl / init curl
    $ch = curl_init();
    // set url
    curl_setopt($ch, CURLOPT_URL, $url);
    // return the transfer as a string
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    // $output contains the output string
    $dataCovid = curl_exec($ch);
    // tutup curl
    curl_close($ch);
    // menampilkan hasil curl
    // echo $output;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <nav>
            <a href="corona.php">Data Covid</a> |
            <a href="json-indonesia.php">Data Indonesia</a> |
            <a href="json-provinsi.php">Data Covid Provinsi</a> |
            <a href="json-datapositif.php">Global Data Positif</a> |
            <a href="json-datasembuh.php">Global Data Sembuh</a> |
            <a href="json-datameninggal.php">Global Data Meninggal</a> |
        </nav>
    </center>
    <fieldset>
        <legend>Data Covid</legend>
        <table border=1>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Positif</th>
                <th>Meninggal</th>
                <th>Sembuh</th>
                
            </tr>
            <?php
$no = 1;
$data1 = json_decode($dataCovid);
foreach ($data1 as $key => $covid1) {
    ?>
            <tr>
                <td><?php echo $no++; ?></td>
                <td><?php echo $covid1->name ?></td>
                <td><?php echo $covid1->positif; ?></td>
                <td><?php echo $covid1->meninggal; ?></td>
                <td><?php echo $covid1->sembuh; ?></td>
            </tr>
            <?php
}?>
        </table>
    </fieldset>
</body>
</html>
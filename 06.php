<!DOCTYPE html>
<html>
<head>
    <title>Bilangan Rata-rata</title>
</head>
<body>
<h2>Input Bilangan</h2>
<hr>
<form method="POST" action="">
<table>
<tr>
    <td>Masukkan Banyaknya bilangan </td>
    <td>:</td>
    <td><input type='number' name='bil'></td>
    <td><input type='submit' name='kirim' value='Submit'></td>
  </tr>
  </form>
</table>
</body>
</html>


<?php
if(isset($_POST['kirim'])){
    $bil= $_POST['bil'];

    echo "<h2> Input Bilangan </h2>";
    for($a=1; $a<=$bil; $a++){
        echo "<table>";
        echo "<tr>";
        echo "<td>Bilangan ke - $a</td>";
        echo "<td></td>";
        echo "<td><input type = 'text' name = 'nama'></td>";
        echo "</tr>";
        echo "</table>";
    }
    echo "<table>";
    echo "<tr>";
    echo "<td></td>";?>
    <form method="POST" action="05.php"><?php
    echo "<td><input type='submit' name='hitung' value ='Submit'></td>";
    echo "</tr>";
    echo "</table>";
}

?>
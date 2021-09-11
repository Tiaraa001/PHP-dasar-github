<!DOCTYPE html>
<html>
<head>
    <title>Cetak Nilai</title>
    <link rel="stylesheet" href="1.css"/>
</head>
<body>
<form method='POST' action='b.php'>
<h2 align="center">Form Cetak Nilai Siswa<br>
SMK ASSALAAM BANDUNG <br>
Tahun 2021/2022
</h2>
<br>
<?php
$NO      = array('1','2','3','4','5','6','7','8','9','10');
$mapel   = array('Pendidikan Agama Islam',
                 'PPKN',
                 'Bahasa Indonesia', 
                 'Matematika', 
                 'Bahasa Iggris', 
                 'Produk Kreatif dan Kewirausahaan', 
                 'Al-Quran',
                 'Bimbingan Konseling',
                 'Produktif RPL',
                 'Produktif TKJ',);
// hitung total array
$totalarray = count($NO);
 

echo "<table border='2' align='center'>";
echo "<tr>;
        <br>
        <tr>
        <td>Nama</td>
        <td><input type = 'text' name = 'nama' ></td>
    </tr>
    
    <tr> 
        <td>Nis</td> 
        <td><input type = 'id' name = 'nis' ></td>
    </tr> 
    </td></tr>";

echo "</tr>";
echo "<tr>";
echo "<th>NO</th>";
echo "<th>Mata Pelajaran</th>";
echo "<th>Nilai</th>";
echo "</tr>";
// looping datanya
for ($i=0; $i < $totalarray; $i++) { 
  echo "<tr>";
  echo "<td>$NO[$i]</td>";
  echo "<td>$mapel[$i]</td>";
  
  echo "<td><input type='id' name='nilai'></td>";
  echo "</tr>";
}



echo "<tr>";
echo "<td colspan='5' align='center'>
      <br><br>
      <input type='submit' name='submit' value='CETAK NILAI'>
      <br>
      </td>";
echo "</tr>";
echo "</table>";
?>
</link>
</form>
</body>
</html>
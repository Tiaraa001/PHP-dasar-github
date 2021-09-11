<!DOCTYPE html>
<html>
<head>
    <title>Cetak Nilai</title>
</head>
<body>
<form method='GET' action='coba.php'>
<h2 align="center">Form Cetak Nilai Siswa<br>
SMK ASSALAAM BANDUNG <br>
Tahun 2021/2022
</h2>
<br>
<?php
if (isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];

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
$total_array = count($NO);
if(isset($_POST['submit'])){
    $nama = $_POST['nama'];
    $nis = $_POST['nis'];
    $nilai = $_POST['nilai'];
echo "<table border='2' align= 'center'>";
echo "<tr>";
echo "<td colspan='5'>
        <br>
        Nama : " .$nama."<br>
        NIS : " .$nis."<br>
        <br>
    </td>";
}
echo "</tr>";
echo "<tr>";
echo "<th>NO</th>";
echo "<th>Mata Pelajaran</th>";
echo "<th>Nilai</th>";
echo "</tr>";
// looping datanya
for ($i=0; $i < $total_array; $i++) { 
  echo "<tr>";
  echo "<td>$NO[$i]</td>";
  echo "<td>$mapel[$i]</td>"; 
}


  echo "<td>$nilai</td>";
  echo "</tr>";


echo "<tr>";
echo "<td colspan='5' align='center'>
      <br><br>
      Nilai Rata-rata anda adalah : 
      <br>
      </td>";
echo "</tr>";
echo "</table>";
}
?>
</form>
</body>
</html>
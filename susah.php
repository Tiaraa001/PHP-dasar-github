<link rel="stylesheet" href="1.css"/>
<?php
if (isset($_POST['kirim'])){
  $nm = $_POST['nm'];
  $nis = $_POST['nis'];
  $pai = $_POST['pai'];
  $pkn = $_POST['pkn'];
  $bid = $_POST['bid'];
  $mtk = $_POST['mtk'];
  $big = $_POST['big'];
  $pkk = $_POST['pkk'];
  $aqn = $_POST['aqn'];
  $bkn = $_POST['bkn'];
  $rpl = $_POST['rpl'];
  $tkj = $_POST['tkj'];

  $nilai = [
    'Pendidikan Agama Islam' => $pai,
    'PPKN' => $pkn,
    'Bahasa Indonesia' => $bid,
    'Matematika' => $mtk,
    'Bahasa Inggris' => $big,
    'Produk Kreatif dan Kewirausahaan' => $pkk,
    'Al quran' => $aqn,
    'Bimbingan Konseling' => $bkn,
    'Produktif RPL' => $rpl,
    'Produktif TKJ' => $tkj
  ];

  echo "
  <center><h2> 
  SMK ASSALAM BANDUNG<br>
  Tahun 2021
  </h2><br> 
  <table border=1 frame='void' width=400<tr><td> 
  <br> 

  <table> 
  <tr> 
  <td>Nama </td> 
  <td>: $nm</td> 
  </tr> 

  <tr> 
  <td>NIS </td> 
  <td>: $nis</td> 
  </tr> 
  </table>
  <br> 
  <table border=1 width=100%> 
  <tr> 
  <td align=center>NO</td> 
  <td align=center width=100%>Mata Pelajaran</td> 
  <td align=center>Grade</td> 
  </tr> 
  ";

  $i =1;
  $total =0;
  $grade = "";
  foreach ($nilai as $key => $value){
    if ($value > 85 && $value <= 100) {
      $grade = "A";
      $total = $total + 4;
    }elseif ($value > 70 && $value <= 85) {
      $grade = "B";
      $total = $total + 3;
    }elseif ($value > 60 && $value <= 70){
      $grade = "C";
      $total = $total + 2;
    }elseif ($value > 40 && $value <= 60){
      $grade = "D";
      $total = $total + 1;
    }elseif ($value > 0 && $value <= 40){
      $grade = "E";
      $total = $total + 0;
    }

    echo "
    <tr>
    <td align=center>$i</td> 
    <td align=center>$key</td> 
    <td align=center>$grade</td> 
    </tr>";

    $i++;
  }
    echo "
    </table><br> 
    <center><b>Nilai rata rata Anda adalah: ".($total/10)."
    ";
  
}
?>

<?php 
    $nama =$_POST ['nama'];
    $kode = $_POST ['kode'];
    $tiket = $_POST ['tiket'];
    $jenis = $_POST ['jenis'];
    $harga1 = 500000;
    $harga2 = 250000;
    $total1 = $tiket * $harga1;
    $total2 = $tiket * $harga2;

    {
        echo "Nama Pemesan : $nama <br>";
        echo "Kode Studio : $kode <br>";
    }

    if($kode == "studio1"){
        echo "Bintang Tamu: Opick <br>";
    }elseif ($kode == "studio2"){
        echo "Bintang Tamu : Raihan <br>";
    }else{
        echo "Tidak Ada Bintang Tamu";
    }

    if ($jenis == "vip") {
        $harga1 = 500000;

        echo "Jenis Kelas: $jenis <br>";
        echo "Harga : $harga1 <br>";
        echo "Jumlah Beli : $tiket <br>";
        echo "Total : $total1 <br>";
    }elseif ($jenis == "festival"){
        $harga2 == 250000;

        echo "Jenis Kelas: $jenis <br>";
        echo "Harga : $harga2 <br>";
        echo "Jumlah Beli : $tiket <br>";
        echo "Total : $total2 <br>";
    }else
?>
<html>
    <form method="POST" action="lthn12.php"> 
<a href="lthn12.php">INPUT KEMBALI</a> 
</body>
</html>
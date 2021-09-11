<?php

    if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'] ;
        $tanggal = $_POST['tanggal'] ;
        $no = $_POST['no'] ;
        $tipe = $_POST['tipe'] ;
        $durasi = $_POST['durasi'] ;
        $harga1 = 850000;
        $harga2 = 250000;
        $harga3 = 1400000;
        $jumlah1 = $durasi * $harga1;
        $jumlah2 = $durasi * $harga2;
        $jumlah3 = $durasi * $harga3;
        $bayar1 = $jumlah1 * (15/100);
        $bayar2 = $jumlah1 * (25/100);
        $diskon1 = $jumlah1 - $bayar1;
        $diskon2 = $jumlah1 - $bayar2;
        $bayar3 = $jumlah2 * (15/100);
        $bayar4 = $jumlah2 * (25/10);
        $diskon3 = $jumlah2 - $bayar3;
        $diskon4 = $jumlah2 - $bayar4;
        $bayar5 = $jumlah3 * (15/100);
        $bayar6 = $jumlah3 * (25/100);
        $diskon5 = $jumlah3 - $bayar5;
        $diskon6 = $jumlah3 - $bayar6;
        



        {
            echo "Tanggal Menginap : $tanggal <br>";
            echo " Nama Pemesan  :  $nama <br>";
            echo "No. Identitas : $no <br> ";
        }
            if ($tipe == "1") {
                $harga1 = 850000;
    
                echo "Tipe Kamar : Superior <br>";
                echo "Harga : $harga1<br>";
                echo "Durasi Menginap : $durasi <br>";
                echo "Total : $jumlah1";
                echo "<br>";
    
            if ($jumlah1 >= 1700000) {
                echo "<br>";
                echo "Mendapatkan diskon $bayar1 <br> ";
                echo "Total : Rp. $diskon1";
            }
            elseif ($jumlah1 >= 2500000) {
                echo "<br>";
                echo "Mendapatkan diskon $bayar2 <br> ";
                echo "Total : Rp. $diskon2";
                }
            else {
                echo "Tidak ada Diskon";
            } 
        }
            elseif ($tipe == "2") {
            $harga2 = 950000;

            echo "Tipe Kamar : Deluxe <br>";
            echo "Harga : $harga2<br>";
            echo "Durasi Menginap : $durasi <br>";
            echo "Total : $jumlah2 <br>";
            
            if  ($jumlah2 >= 1700000) {
            echo "<br>";
            echo "Mendapatkan diskon $bayar3 <br> ";
            echo "Total : Rp. $diskon3";
            }
            elseif ($jumlah2 >= 2500000) {
                echo "<br>";
                echo "Mendapatkan diskon $bayar4 <br> ";
                echo "Total : Rp. $diskon4";
            } else {
                echo "Tidak ada diskon";
            }
         } 
            elseif ($tipe == "3") {
            $harga3 = 1400000;

            echo "Tipe Kamar : Junior Suite <br>";
            echo "Harga : $harga3 <br>";
            echo "Durasi Menginap : $durasi <br>";
            echo "Total : $jumlah3 <br>";
            
            if ($jumlah3 >= 1700000) {
            echo "<br>";
            echo "Mendapatkan diskon $bayar5 <br> ";
            echo "Total : Rp. $diskon5";
            }
            elseif ($jumlah3 >= 2500000) {
            echo "<br>";
            echo "Mendapatkan diskon $bayar6 <br> ";
            echo "Total : Rp. $diskon6";
            } else {
                echo "Tidak ada diskon";
            }
        }else {
            echo "Pilihan Tidak Tersedia";
        }

}
?>
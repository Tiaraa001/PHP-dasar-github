<html>
<head> 
<title> Pencetakan Nilai</title> </head> 
<link rel="stylesheet" href="1.css"/>

<center><h3>   
    Form Cetak Nilai Siswa <br> 
    SMK ASSALAM BANDUNG <br> 
    Tahun 2021/2022
</h3><br> 
<table border=1 frame='void' width='400'><tr><td> 
<form action="susah.php" method="POST"> 

    <br> 
    <table width=100% > 
    <tr> 
    <td>Nama</td> 
    <td>: <input size=40 type='text' name='nm'></td> 
    </tr> 
    <tr> 
    <td>NIS</td> 
    <td>: <input size=40 type='text' name='nis'></td> 
    </tr> 
    </table><br> 
    
    <table border=1> 
    <tr> 
    <td align=center> NO </td> 
    <td align=center width=100%>Mata Pelajaran</td> 
    <td align=center> Nilai </td> 
    </tr> 

    <tr> 
    <td align=center>1</td> 
    <td>Pendidikan Agama Islam</td> 
    <td><input size=1 type='text' name='pai'></td> 
    </tr>

    
    <tr> 
    <td align=center>2</td> 
    <td>PPKN</td> 
    <td><input size=1 type='text' name='pkn'></td> 
    </tr>
      
    <tr> 
    <td align=center>3</td> 
    <td>Bahasa Indonesia</td> 
    <td><input size=1 type='text' name='bid'></td> 
    </tr>

    <tr> 
    <td align=center>4</td> 
    <td>Matematika</td> 
    <td><input size=1 type='text' name='mtk'></td> 
    </tr>
      
    <tr> 
    <td align=center>5</td> 
    <td>Bahasa Inggris</td> 
    <td><input size=1 type='text' name='big'></td> 
    </tr>
      
    <tr> 
    <td align=center>6</td> 
    <td>Produk Kreatif dan Kewirausahaan</td> 
    <td><input size=1 type='text' name='pkk'></td> 
    </tr>
      
    <tr> 
    <td align=center>7</td> 
    <td>Al quran </td> 
    <td><input size=1 type='text' name='aqn'></td> 
    </tr>
      
    <tr> 
    <td align=center>8</td> 
    <td>Bimbingan Konseling</td> 
    <td><input size=1 type='text' name='bkn'></td> 
    </tr>
      
    <tr> 
    <td align=center>9</td> 
    <td>Produktif RPL</td> 
    <td><input size=1 type='text' name='rpl'></td> 
    </tr>
      
    <tr> 
    <td align=center>10</td> 
    <td>Produktif TKJ</td> 
    <td><input size=1 type='text' name='tkj'></td> 
    </tr>
    </table>
    <br> 
    <center><input type="submit" name="kirim" value="CETAK NILAI"> 
    </link>
    </form> 
    </td></tr></table> 
    </html> 

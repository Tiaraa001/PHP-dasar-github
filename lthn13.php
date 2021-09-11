<html>
<head>
<title> BINTANG </title> 
<form method= "POST" action = "">
<table> 
<tr> 
    <td>Masukkan bintang</td> 
    <td><input type='text' name='input'></td>
    <td><input type="submit" name="TAMPIL" value='submit'>
</tr>
</table>
</form>
</head>
</html>

<?php
 echo "Program segitiga bintang siku-siku<br>";
 $input =$_POST ['input'];

 $star = "$input";
 for($a=$star; $a>0; $a--){
for ($b=$star; $b>=$a; $b--){
    echo "*";
}
echo "<br>";
 }
 ?>
<html> 
<head> 
<title>BINTANG</title> 
</head> 
<form method= "POST" action = "">

<table>
<tr> 
    <td>Masukan Bintang</td>
    <td><input type="text" name='input' id='input'></td> 
    <td><button type ="submit "> submit </button></td> 
</tr> 
</table> 
</html> 

<?php
 
 if(isset($_POST['input'])){
 $input =$_POST ['input'];
 echo "<br>Program segitiga bintang siku-siku<br>";

 $star = "$input";
 for($a=$star; $a>0; $a--){
for ($b=$star; $b>=$a; $b--){
    echo "*";
}
echo "<br>";
 }

 echo "<br>Program Ganjil Genap dengan menggunakan For<br>";
echo bilangan($input);
 }
 function bilangan($input){
         
     
     echo "<br>";
     $genap=0;
     for ($i=1; $i <= $input; $i++){
         if($i%2==0){
             echo $i. "<br>";
             $genap++;
         }
     }
     
 }
 
 ?>
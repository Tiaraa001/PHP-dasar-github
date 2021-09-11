<html>
<head>
    <title>Nilai Rata - Rata</title>
</head>
<body>
<h1>Input Bilangan</h1>
<hr>
<form method="post" action=" ">
Masukkan Banyaknya Bilangan <input type="text" name="n" />
<input type="submit" name="submit" value="Submit" />
</form>
</body>
</html>

<?php
echo "<br>";
if (isset($_POST['submit'])) { 
$n = $_POST['n'];
echo "<form method='post' action='05.php'>";
echo "<h1> Input Bilangan </h1> <br>";
for ($i = 0; $i <= $n-1; $i++)
{
 echo "Bil ke- ".($i+1)." <input type='text' name='data".$i. "' /><br>";
}
 echo "<br><input type='submit' name='submit' value='Submit' />";
 echo "<input type='hidden' name='n' value='".$n."' />";
echo "</form>";
}
?>
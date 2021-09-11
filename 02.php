<html> 
<head>
        <title>Hotel</title>
</head>
<body>
<form action = "03.php" method="post">
        <table>

        <tr>
                <td>Tanggal Menginap</td>
                <td>:</td>
                <td><input type = 'date' name = 'tanggal'> </td>
            </tr>   
            <tr>
                <td>Nama Tamu</td>
                <td>:</td>
                <td><input type = 'text' name = 'nama'></td>
            </tr>   
            
            <tr>
                <td>No Identitas</td>
                <td>:</td>
                <td><input type = 'text' name = 'no'> </td>
            </tr>   
            <tr>
                <td>Tipe Kamar</td>
                <td>:</td>
                <td><select name = "tipe">
                <option value= "1">Superior</option>
                <option value= "2">Deluxe</option>
                <option value= "3">Junior Suite</option>
                </td>
            </tr>   
            <tr>
                <td>Durasi Menginap</td>
                <td>:</td>
                <td><input type = 'text' name = 'durasi'> </td>
            </tr>   
            <tr>
                <td></td>
                <td></td>
                <td><input type = "submit" name = "simpan" value = 'SUBMIT'>
                <input type = "reset" name = "reset" value = 'BATAL'></td>
            </tr>   
</table>
</form>
	</body>
	</html>

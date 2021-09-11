<!DOCTYPE html>
<html>
<head>
<title> Pengulangan </title>
</head>
<body>
<h8> Pengulangan </h8>
<form method = "POST" action = "">
<table>
<tr>
<td> Masukan jumlahnya </td>
<td> : </td>
<td> <input type = 'text' name='tempat'> </td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type = "submit" name = "simpan" value = 'KIRIM'> </td>
</tr>
</table>
</form>
</body>
</html>


<?php
if (isset($_POST["simpan"])){
    $angka=$_POST['angka'];
    for ($i=0; $i<= $angka; $i++){

        echo "Bil $i <br>";
    }
}

?>
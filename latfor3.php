<html>
<head>
<title> pengulangan </title>
</head>
<body>
<h8> Soal 3 </h8>
<form method = "POST" action = "">
<table>
<tr>
<td> Masukan Angka</td>
<td> : </td>
<td> <input type = 'text' name="masukan"> </td>
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
if (isset($_POST['simpan'])){
    $angka=$_POST['masukan'];
    for ($i=1; $i<=$angka; $i++){
        for ($a=1; $a<=$i; $a++){
            echo "*";
        }
        echo "<br>";
    }
}


?>
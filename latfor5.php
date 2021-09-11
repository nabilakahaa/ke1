<html>
<head>
<title> pengulangan </title>
</head>
<body>
<h8> Soal 5 </h8>
<form method = "POST" action = "">
<table>
<tr>
<td> Masukan Angka</td>
<td> : </td>
<td> <input type = 'text' name="angka"> </td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type = "submit" name = "simpan" value = "KIRIM"> </td>
</tr>
</table>
</form>
</body>
</html>



<?php 
if (isset($_POST['simpan'])){
    $angka=$_POST['angka'];
    for ($i=1; $i<=$angka; $i++){
        for ($j=$angka; $j>=$i; $j--){
            echo "&nbsp";
        }
        for ($k=1; $k<=$i; $k++){
            echo "*";
        }
        echo "<br>";
    }
}
?> 
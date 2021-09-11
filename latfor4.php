<html>
<head>
<title> pengulangan </title>
</head>
<body>
<h8> Soal 4 </h8>
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
    for ($a=$angka; $a>=1; $a--){
        for ($b=1; $b<=$a; $b++){
            echo "*";
        }
        echo "<br>";
    }
}

?>
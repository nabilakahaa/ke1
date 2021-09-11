<!DOCTYPE html>
<html>
<head>
<title> FORM BIODATA DIRI </title>
</head>
<body>
<h8> FORM BIODATA DIRI </h8>
<form method = "POST" action = "">
<table>
<tr>
<td> Nama </td>
<td> : </td>
<td> <input type = 'text' name='nama'> </td>
</tr>
<tr>
<td> Tanggal lahir </td>
<td> : </td>
<td> <input type = 'date' name='tanggal'> </td>
</tr>
<tr>
<td> Umur </td>
<td> : </td>
<td> <input type = 'text' name='umur'> </td>
</tr>
<tr>
<td> Jenis kelamin </td>
<td> : </td>
<td> <input type = 'radio' name='jenis' value= "Laki-laki> ">Laki-laki <br>
<input type = 'radio' name='jenis' value= "perempuan> ">Perempuan <br> </td>
</tr>
<tr>
<td> Alamat </td>
<td> : </td>
<td> <input type = 'text' name='alamat'> </td>
</tr>
<tr>
<td> Agama </td>
<td> : </td>
<td>
<select name= 'agama'>
<option value= 'islam'> Islam </option>
<option value= 'kristen'> Kristen</option>
<option value= 'budha'> budha </option>
<option value= 'atheis'> atheis</option>
</select>
 </td>
</tr>
<tr>
<td> Pendidikan terakhir </td>
<td> : </td>
<td>
<select name= 'pend'>
<option value= 'sd'> SD </option>
<option value= 'smp'> SMP</option>
<option value= 'sma'> SMA </option>
<option value= 'smk'> SMK </option>
<option value= 'd3'> D3</option>
<option value= 's1'> S1 </option>
<option value= 's2'> S2 </option>
</select>
 </td>
</tr>
<tr>
<td> Status </td>
<td> : </td>
<td>
<select name= 'status'>
<option value= 'Menikah'> Menikah </option>
<option value= 'Cerai'> Cerai</option>
<option value= 'Pelajar'> Pelajar </option>
</select>
 </td>
</tr>
<tr>
<td> Hobby </td>
<td> : </td>
<td> <input type = 'checkbox' name='hobby' value= "Masak ">Memasak 
<input type = 'checkbox' name='hobby' value= "Nyayi "> Nyanyi
<input type = 'checkbox' name='hobby' value= "Nonton "> Menonton  
</td>
</tr>
<tr>
<td> Cita-cita</td>
<td> : </td>
<td>
<select name= 'cita'>
<option value= 'Guru'> Guru </option>
<option value= 'Koki'> Koki</option>
<option value= 'Pengacara'> Pengacara </option>
</select>
 </td>
</tr>
<tr>
<td> Caption </td>
<td> : </td>
<td> <input type = 'text' name='capt'> </td>
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
    $nama = $_POST['nama'];
    $tempat = $_POST['tempat'];
    $tanggal = $_POST['tanggal'];
    $umur = $_POST['umur'];
    $jenis = $_POST['jenis'];
    $alamat = $_POST['alamat'];
    $agama = $_POST['agama'];
    $pend = $_POST['pend'];
    $status= $_POST['status'];
    $hobby= $_POST['hobby'];
    $cita= $_POST['cita'];
    $capt = $_POST['capt'];


echo "==========BIODATA DIRI========== <br>";
echo "Nama = $nama <br>";
echo "Tempat lahir = $tempat <br>";
echo "Tanggal lahir= $umur <br>";
echo "Umur = $umur <br>";
echo "Alamat = $alamat <br>";
echo "Agama = $agama <br>";
echo "Pendidikan = $pend <br>";
echo "Hobby = $hobby <br>";
echo "Cita-cita = $cita <br>";
echo "Caption = $capt <br>";

}


?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset = "UTF-8">
<meta http-equiv = "X-UA-Compatible" content ="IE=edge">
<meta name = "viewport" content="width=device-width, initial-scale=1.0">
<title>Document</title>
</head>
<body><center>
<form method = "POST" action = "">
<h2> Data siswa kelas XII RPL </h2>
<table>
<tr>
<td> Jumlah siswa</td>
<td> : </td>
<td> <input type = 'text' name="jumlah"> </td>
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
if (isset($_POST['proses'])){
    $jumlah = $_POST['jumlah'];
    ?>
    <form action = "hasilformarray1.php" method ="post">
    <table>
    <?php
    for ($i=1; $i<=$jumlah; $i++){
        ?>
        <tr>
        <td></td>
        <td></td>
    <td>Data siswa ke - <?php echo $i; ?></td>
    </tr>
    <tr>
    <td>Nama</td>
    <td>:</td>
    <td><input type="text" name="nama[]"></td>
    </tr>
    <tr>
    <td>Kelas</td>
    <td>:</td>
    <td><input type="text" name="nama[]"></td>
    </tr>
    <?php
    }
    ?>
    <tr>
<td></td>
<td></td>
<td><input type = "submit" name = "simpan" value = 'KIRIM'> </td>
</tr>
</table>
</form>
<?php
}
?>
</body>
</center>
</html>
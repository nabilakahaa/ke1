<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body><center>
    <form action="" method="post">
    <h2>Data Siswa Kelas XI RPL</h2>
    <table>
<tr>
    <td>Jumlah Siswa</td>
    <td>:<td>
    <input type="number" name="jumlah">
</tr>

<tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="proses" value="proses"></td>
</tr>
</table>
<br>
</form>
</body>
</html>

<?php
if(isset($_POST['proses'])){
    $jumlah = $_POST['jumlah'];

?>

<form action="hasilformarray.php" method="post">
    <table>
        <?php
            for($i=1; $i<=$jumlah;$i++){
        ?>
        <tr>
            <td>Nis</td>
            <td>:</td>
            <td><input type="text" name="nis[]"></td>
        </tr>
        <tr>
            <td>Nama</td>
            <td>:</td>
            <td><input type="text" name="nama[]"></td>
        </tr>   
        <tr>
            <td>Kelas</td>
            <td>:</td>
            <td><input type="text" name="kelas[]"></td>
        </tr>
        <tr>
            <td>Bahasa indonesia</td>
            <td>:</td>
            <td><input type="text" name="indonesia[]"></td>
        </tr>      
        <tr>
            <td>Bahasa inggris</td>
            <td>:</td>
            <td><input type="text" name="inggris[]"></td>
        </tr>   
        <tr>
            <td>Matematika</td>
            <td>:</td>
            <td><input type="text" name="matematika[]"></td>
        </tr>   
        <tr>
            <td>Produktif</td>
            <td>:</td>
            <td><input type="text" name="produktif[]"></td>
        </tr>   
        <?php
        }
        ?>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="simpan" value="Simpan"/></td>
            </tr>
            </table>
            </form>
            <?php
            }
            ?>
            </body>
            </center>
            </html>
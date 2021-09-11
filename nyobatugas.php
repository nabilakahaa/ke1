<!DOCTYPE html>
<html>
    <head>
        <title>Form Biodata Diri</title>
</head>
<body>
    <center>
        <h1>Program Penggajihan</h1>
        <h2>PT. GARUDA KELINCI AKUR</h2>
    <form method = "POST" action="">
        <table>
            <tr>
                <td>Nama Bendahara</td>
                <td>:</td>
                <td><input type='text' name='nama'></td>
</tr>
<tr>
                <td>Nama Pekerja</td>
                <td>:</td>
                <td><input type='text' name='nama1'></td>
</tr>
<tr>
    <td>Jenis kelamin</td>
    <td>:</td>
    <td>
        
    <input type='radio' name='jenis' value='laki laki'>Laki-Laki
    <input type='radio' name='jenis' value='perempuan'>Perempuan
    </tr>
<tr>
    <td>Tanggal Gaji</td>
    <td>:</td>
    <td><input type='date' name= 'tanggal'></td>
</tr>
<tr>
    <td>Jabatan</td>
    <td>:</td>
    <td>
    <select name ='status'>
        <option value ='direktur'>Direktur</option>
        <option value ='manager'>Manager</option>
        <option value ='pegawai'>Karyawan</option>
        <option value ='ob'>OB</option>

</td>
</select>
</tr>
<tr>
    <td>Pendidikan terakhir</td>
    <td>:</td>
    <td>
    <select name ='pendidikan'>
        <option value ='sd'>SD</option>
        <option value ='SMP/MTS'>SMP</option>
        <option value ='SMK/SMA/MA'>SMA</option>
        <option value ='s1'>S1</option>
</td>
</select>
</tr>
    <tr>
    <td>Lembur</td>
    <td>:</td>
    <td><input type='text' name='lembur' > Hari /Rp.20.000</td>
</tr>
</td>
<tr>
    <td>Potongan</td>
    <td>:</td>
    <td><input type='text' name='potongan'></td>
</tr>
<tr>
    <td></td>
    <td></td>
    <td><input type="submit" name="simpan" value='KIRIM'></td>
</tr>
</table>
</form>

</body>
</html>
<?php

if(isset($_POST['simpan'])){
$nama = $_POST['nama'];
$nama1 = $_POST['nama1'];
$lembur = $_POST['lembur'];
$tanggal =$_POST['tanggal'];
$jenis = $_POST['jenis'];
$potongan = $_POST['potongan'];
$pendidikan = $_POST['pendidikan'];
$status =$_POST['status'];
$total = $_POST['status'];

$vakasi_lembur = $lembur * 20000;

if($pendidikan == "sd"){
    $rektur = 250000;
} else if ($pendidikan == "smp"){
    $rektur = 500000;
} else if($pendidikan == "sma"){
    $rektur = 1000000;
} else if($pendidikan == "d1"){
    $rektur = 1500000;
}else {
    echo "kunn ai sia";

}

if($jabatan= "Direktur"){
    $tunjangan = 1000000;
} else if ($pendidikan == "Manager"){
    $tunjangan = 7500000;
} else if($pendidikan == "Karyawan"){
    $tunjangan = 5000000;
} else if($pendidikan == "OB"){
    $tunjangan = 2500000;
}else {
    echo "milih hela";
    
}
$total = $rektur + $tunjangan  + $vakasi_lembur - $potongan;
echo "<br>";
echo "<b>Struk Gaji Karyawan</b><br>";
    echo "-------------------------------------------------------<br>";
    echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal :<b><i>$tanggal</i></b><br>";


    echo "<br>";
    echo "<b>Gaji Pokok<br></b>";
    echo "<br>";
    echo "Nama Karyawan : $nama1<br>";
    echo "Jenis Kelamin : $jenis<br>";
    echo "Pendidikan Terakhir : $pendidikan<br>";
    echo "Jabatan: $status<br>";
    echo "Gaji : $rektur <br>";
    echo "<br>";
    echo "<b><i>Tunjangan <br></b></i>";
    echo "<br>";
    echo "Tunjungan Pendidikan :$pendidikan<br>";
    echo "Vakasi Lembur: $vakasi_lembur<br>";
    echo "<b><i>Potongan</b></i><br>";
    echo "Potongan :$potongan<br>";  
    echo "<b>Total Gaji :$total</b><br><br>";
   echo "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bendahara : <br><b>&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;$nama</b></center>";
}
?>
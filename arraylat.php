<?php
if (isset($_POST['simpan'])){
    $nis =$_POST['nis'];
    $nama =$_POST['nama'];
    $kelas =$_POST['kelas'];
    $indo =$_POST['indo'];
    $eng =$_POST['eng'];
    $mtk =$_POST['mtk'];
    $pro =$_POST['pro'];
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Nilai Siswa Kelas XII RPL</h2>
        <table border="1">
            <tr>
            <th>nis</th>
                <th>nama</th>
                <th>kelas</th>
                <th>b.indo</th>
                <th>b.inggris</th>
                <th>matematika</th>
                <th>produktif</th>
                <th>total nilai</th>
                <th>rata rata</th>
                <th>grade</th>
                <th>status</th>
</tr>
<?php
for($i=0; $i<count($nama); $i++){
    ?>
    <tr>
    <td><?php echo $nis[$i];  ?> </td>
        <td><?php echo $nama[$i];  ?> </td>
<td><?php echo $kelas[$i];  ?></td>
<td><?php echo $indo[$i];  ?></td>
<td><?php echo $eng[$i];  ?> </td>
<td><?php echo $mtk[$i];  ?> </td>
<td><?php echo $pro[$i];  ?> </td>
<?php
$total=$indo[$i]+$eng[$i]+$mtk[$i]+$pro[$i];
?>
<td><?php echo $total;  ?> </td>
<?php
$rata=$total/4;
?>
<td><?php echo $rata; ?></td>
<?php

if ($rata >= 90 && $rata<=100)  {
    echo "<td>A</td>";
}else if ($rata>=80 && $rata <90){ 
    echo "<td> B</td>";
} else if ($rata >=70 && $rata <80 ) {
    echo "<td> C</td>";
} else if ($rata >= 60 && $rata <70) {
    echo "<td> D</td>";
}else if ($rata >=0 && $rata <60) {
    echo "<td> E</td>";
}else   {
    echo "Nilai Kacau";
}
    ?>
    <?php
    if($rata >= 75) {
    ?>
    <td> lulus </td>
    <?php
} else {
    ?><td>tidak lulus</td>


<?php
}
}
?>
</tr>
</table>
</center>
</body>
</html>
<?php
if(isset($_POST['simpan'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $indonesia = $_POST['indonesia'];
        $inggris = $_POST['inggris'];
        $matematika = $_POST['matematika'];
        $produktif = $_POST['produktif'];
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <center>
        <h2>Data Siwa Kelas XII RPL</h2>
        <table border="1">
            <tr>
            <th>Nis</th>
                <th>Nama</th>
                <th>Kelas</th>
                <th>Bahasa indonesia</th>
                <th>Bahasa inggris</th>
                <th>Matematika</th>
                <th>Produktif</th>

                </tr>
                <?php
                for($i=0; $i<count($nama); $i++){
                    ?>
                    <tr>
                    <td><?php echo $nis[$i]; ?></td>
                    <td><?php echo $nama[$i]; ?></td> 
                    <td><?php echo $kelas[$i];?></td>
                        <td><?php echo $indonesia[$i]; ?></td>
                        <td><?php echo $inggris[$i]; ?></td> 
                        <td><?php echo $matematika[$i];?></td>
                        <td><?php echo $produktif[$i];?></td> }</td>
                    </tr>
                    </table>
                    </center>
</body>
</html>
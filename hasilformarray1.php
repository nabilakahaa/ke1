<?php
if(isset($_POST['simpan'])){
    $nama = $_POST['nama'];
        $kelas = $_POST['kelas'];
        $jurusan = $_POST['jurusan'];
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
                <th>Nama</th>
                <th>Kelas</th>
                <th>Jurusan</th>
                </tr>
                <?php
                for($i=0; $i<count($nama); $i++){
                    ?>
                    <tr>
                    <td><?php echo $nama[$i]; ?></td>
                    <td><?php echo $kelas[$i]; ?></td> 
                    <td><?php echo $jurusan[$i]; } ?></td>
                    </tr>
                    </table>
                    </center>
</body>
</html>
<!DOCTYPE html>
<html>
<head>
    <title>Status Vaksin</title>
</head>
<body>
    <h2><center>Syarat Masuk Ke MIKO MALL</center></h2>
	<br>
     <form method = "POST" action = " ">
		 <center>
        <table>

            <tr>
                <td>Nama Anda</td>
                <td>:</td>
                <td><input type = 'text' name = 'nama'> </td>
            </tr>   
			<tr>
                <td>Umur</td>
                <td>:</td>
                <td><input type = 'text' name = 'umur'> </td>
            </tr>   
            <tr>
                <td>Status Vaksin</td>
                <td>:</td>
                <td><select name = "status">
				<option value= "0">---Status Vaksin---</option>
                <option value= "Sudah Vaksin">Sudah Vaksin</option>
                <option value= "Belum Vaksin">Belum Vaksin</option>
                </td>
            <tr>
                <td></td>
                <td></td>
                <td><input type = "submit" name = "simpan" value = 'KIRIM'>
            </tr>   

</table>
<table>
<td>
<?php 
if (isset($_POST['simpan'])) {
        $nama = $_POST['nama'] ;
        $umur = $_POST['umur'] ;
        $status = $_POST['status'] ;
            echo "<center>";
        {
			echo "<br>";
            echo " Nama Anda  :  $nama <br>";
            echo " Umur : $umur </br>";
        }
        if($umur >= 12 && $umur <= 50){
            echo "Status Vaksin : $status <br>";
            if($status == "Sudah Vaksin"){
                echo "Diizikan";
            
            echo "<br>";
            }elseif ($status == "Belum Vaksin"){
                echo "Tidak Diizinkan";
                ?>
                <br>
                <a href="https://pedulilindungi.id">https://pelilindungi.id</a>
                <?php
            }
        }else{
            echo "Status Vaksin : $status <br>";
            if($status == "Sudah Vaksin"){
                echo "Diizikan";
            }elseif ($status == "Belum Vaksin"){
                echo "<br>";
                echo "Tidak Diizinkan";
                ?>
                <br>
                <a href="https://pedulilindungi.id">https://pedulilindungi.id</a>
                <?php
            }
            
        } echo "</center>";
}
?>
</td>
</form>
</center>
</table>
</body>
</html>
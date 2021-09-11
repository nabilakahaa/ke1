<html>
    <body>

<?php $file ="lat.json";?>
<?php $anggota = file_get_contents($file);?>
<?php $data = json_decode($anggota);?>
<b><center>Data film</center></b><br>
  <center><?php echo $data->Title. "<br>";?></center>
<center><img src="https://timlo.net/wp-content/uploads/2020/10/spider-verse.jpg " width="300" height="300"></center>
 <center><?php echo "" .$data->Plot . "<br><br>";?></center>
  <td><?php echo "<b>Tahun Rilis</b> :" .$data->Year. "<br>";?></td>
 <td><?php echo "<b>Tanggal Rilis</b> :" .$data->Released. "<br>";?></td>
 <td><?php echo "<b>Durasi Film</b>:" .$data->Runtime. "<br>";?>
 <?php echo " <b>Genre </b>:" . implode(" , " , $data->Genre). "<br>";?>
 <?php echo "<b>Director</b> : " .$data->Director. "<br>";?>
 <?php echo "<b>Penulis  </b><li>" . implode("<li>",$data->Writers). "<br>";?>
 <?php echo "<b>Pemeran  </b><li>"  . implode("<li>",$data->Actors). "<br>";?>
 <?php echo "<b>Bahasa</b> :" .$data->Language. "<br>";?>
 <?php echo "<b>Negara</b> :" .$data->Country. "<br>";?>
 <?php echo "<b>Penghargaan</b> :" .$data->Awards. "<br>";?>
 <?php echo "<b>Nilai</b> :" .$data->imdbRating. "<br>";?>
 <?php echo "<b>Vote</b> :" .$data->imdbVotes. "<br>";?>
 <?php echo "<b>imdbID</b> :" .$data->imdbID. "<br>";?>
</td>
</body>
</html>
<?php
class manusia{

     public function __construct($nama , $jk , $kelas){
        echo "Nama saya: $nama<br>";
        echo "Kelas : $kelas<br>";
        echo "Jenis Kelamin : $jk<br>";
        echo "<hr>";

    }

    
}

$manusia = new manusia("Nabila","Perempuan","XII RPL 1");
$manusia = new manusia("Mey","Perempuan","XII RPL 1");
$manusia = new manusia("Cecep","Perempuan","XII RPL 1");


?>
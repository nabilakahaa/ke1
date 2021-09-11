<?php
//file json yang akan dibaca
$file = "latihan.json";
//mendapatkan file json
$anggota = file_get_contents($file);
//mencode angggota j.son 
$data = json_decode($anggota,true);
//membaca jsson
foreach ($data as $key => $d) {
    echo "Nama : ". $d['nama']."<br>";
    echo "Domisili :" .$d['domisili'];
    echo "Hobby : ";
    echo "<ul>";
    echo "<li>";
    echo implode ("<li>", $d['hobby'])."</li><br>";
    echo "</li>";
    echo "</ul>";
}

?>
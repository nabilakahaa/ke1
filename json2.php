<?php
//file json yang akan dibaca
$file = "anggota.json";
//mendapatkan file json
$anggota = file_get_contents($file);
//mencode angggota j.son 
$data = json_decode($anggota,true);
//membaca jsson
foreach ($data as $key => $d) {
    echo "No : ". $d['no']."<br>";
    echo "Nama :" .$d['nama']."<br>";
    echo "Jurusan : ".$d['jur']."<br>";
}

?>
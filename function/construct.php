<?php
class manusia{

    function __construct(){
        echo "ini adalah isi method costruct<br>";
    }

    //method manusia
    function tampilkan_nama(){
        return "Nama saya Nabila<br>";

    }
    function kelas(){
        return "Kelas XII RPL 1<br>";
}
    function sekolah(){
        return "Smk Assalaam <br>";
}
}

$manusia = new manusia();

echo $manusia->kelas();
echo $manusia->tampilkan_nama();
echo $manusia->sekolah();

?>
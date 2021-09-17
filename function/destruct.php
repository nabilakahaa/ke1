<?php
class manusia{
function __destruct(){
    echo "Ini adalah Method DESTRUCT";
}
function nama(){
    echo "<br> Nama saya adalah Nabila<br>";
}
function __construct(){
    echo "Ini adalah Method CONSTRUCT";
}
}
$cetak = new manusia();
$cetak->nama();
?>
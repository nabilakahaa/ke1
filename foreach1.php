<?php
$nama = array (
    1=>"Andri",
    2=>"Joko",
    3=>"Sukma",
    4=>"Rina",
    5=>"Sari");

{
    echo "Kelompok 1 ".$nama['5']."&".$nama[4];
    echo "<br/>";
    echo "Kelompok 2 ".$nama['3']."&".$nama[1];
    echo "<br/>";
}

//array assiatif
$arrNilai = array (
    "Ani" => 80,"Ana" => 90,"Otim" => 75,"Budi" => 85,);

echo $arrNilai['Ana'];
echo "";
echo $arrNilai['Otim'];
echo "<br>";

$buah = array(
    1=>"Semangka",
    2=>"Melon",
    3=>"Anggur",
    4=>"Strowberry",
    5=>"alpukat");

    $warna = array(
        1=>"Hijau",
        2=>"Merah",
        3=>"Ungu");

        //cara akses array
        echo "Buah".$buah[3]."Berwarna".$warna[3];

        



?>
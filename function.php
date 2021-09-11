 <?php

sapaPengunjung("Nabila");
sapaPengunjung("Meylani");
sapaPengunjung("Bagas");

function sapaPengunjung($nama){
    echo "<h1>Halo {$nama}, Selamat datang! </h1>";
    echo "<p>Terimakasih telah berkunjung ke situs kami. </p> ";
}
?>


<?php

function luasSegitiga()
{
    $alas = 10;
    $tinggi = 5;
    $luas = ($alas *$tinggi) / 2;
    return $luas;
}
echo "Luas segitiga : ". luasSegitiga();


<?php 
{
    $umur = $tahun_sekarang-$tahun_lahir;
    return $umur;
}
function perkenalan ($nama , $salam = "Assalamualaikum")
{
echo $salam . ",";
}
?>
<?php
function perkenalan ($a,$b){
    echo "Perkenalan, nama saya " .$a. "<br/>";
    echo "Umur saya " .$b. "&nbsp; Tahun <br>";

    if ($b >= 17){
        echo "Anda sudah memiliki KTP <br>";
    }
    else {
        echo "Anda belum memiliki KTP"; 
    }
}
perkenalan ("Palah",17);


function penjumlahan ($angka1,$angka2){
    $tambah = $angka1 + $angka2;
    echo "Hasil penjumlahan ". $tambah . "<br>";
}
penjumlahan (10,5);

function kurang ($angka1,$angka2){
    $kurang = $angka1 - $angka2;
    echo "Hasil pengurangan ". $kurang . "<br>";
}
kurang (10,8);

function kali ($angka1,$angka2){
    $kali= $angka1 * $angka2;
    echo "Hasil perkalian ". $kali . "<br>";
}
kali (10,5);

function bagi ($angka1,$angka2){
    $tambah = $angka1 + $angka2;
    echo "Hasil penjumlahan ". $tambah . "<br>";
}
bagi (10,5);
?>

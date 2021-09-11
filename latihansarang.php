<?php

echo " --- RESTORAN ---";
echo "<br>";
echo "<br>";

// menu yang dipesan
$food = "makanan";
$makan = "mie goreng";
$jma= 1;

if ($food == "makanan"){

    if ($makan == "mie goreng"){
        $harga = 10000;
        $jumlah = $jma * $harga;
        $bayar = $jumlah - ($jumlah * (20/100));
        echo "Makanan : Mie goreng <br>";
        echo "Harga : Rp.$harga <br>";
        echo "Pesanan : $jma <br>";
    }
}


?>
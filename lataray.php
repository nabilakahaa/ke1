<?php

echo "Nilai Produktif Siswa <br>";
$nama = array(
    1=>"Palah",
    2=>"Dinda",
    3=>"Cecep",
    4=>"Maudy",
    5=>"Nabila");

    $nilai = array(
        1=>"70",
        2=>"80",
        3=>"90",
        4=>"100",
        5=>"60");

        //cara akses array
        echo " ".$nama[1]." ".$nilai[1];
        echo "<br>";
        echo " ".$nama[2]." ".$nilai[2];
        echo "<br>";
        echo " ".$nama[3]." ".$nilai[3];
        echo "<br>";
        echo " ".$nama[4]." ".$nilai[4];
        echo "<br>";
        echo " ".$nama[5]." ".$nilai[5];
        echo "<br>";

        //menampilkan seluruh data aray menggunakan foreach

        foreach ($nama as $val)
{
    echo "$val";
    echo "<br/>";
}





?>
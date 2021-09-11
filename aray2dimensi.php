<?php

$nilai = [[90,50,10,47],
[80,90,50,78],
[20,30,40,98],
[79,89,90,80]];

echo "Nilai = ".$nilai[2][1];
echo "<br>";
echo "Nilai = ".$nilai[3][2];
echo "<br>";
echo "Nilai = ".$nilai[1][3];
echo "<br>";


//penulisan array 2 dimensi menggunakan Q (key)
$nilai = [
    ["Andri"=> 10,"Toni"=>30],
    ["Desi"=> 67,"Dina"=>70],
];
echo $nilai [1]['Desi'];

?>
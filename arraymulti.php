<?php
$data =[
    [
        'nama'=> "Nabila",
        'buah'=>[
        ['jenis' => 'Mangga'],
        ['jenis' => 'Apel'],
        ['jenis' => 'Pear']
        ]
        
    ]
        ];
    foreach ($data as $data2){
        echo "Nama pemilik  :" .$data2['nama']."<br>";
        echo "Buah kesukaan :";
        echo "<ul>";
        foreach ($data2['buah'] as $data3){
            echo "<li>" .$data3['jenis'] ."</li>";
        }
        echo "</ul>";
    }





?>
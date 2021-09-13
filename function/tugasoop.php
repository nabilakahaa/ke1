<?php

class datar{
    
    function persegi($sisi){
          echo  "Menghitung Luas Persegi<br>";
          echo  "Sisinya = $sisi<br>";
        
        $luas=$sisi*$sisi;
        echo  "Luasnya = $luas <br>";
    }

    function segitiga($alas,$tinggi){
        echo  "Menghitung Luas segitiga<br>";
        echo  "alasnya = $alas<br>";
        echo  "tingginya = $tinggi <br>";
      
      $luas= 1/2 * $alas*$tinggi;
      echo  "Luasnya = $luas <br>";
  }

  function lingkaran($phi,$jari){
    echo  "Menghitung Luas lingkaran<br>";
    echo  "phi = $phi<br>";
    echo  "jari jari = $jari <br>";
  
  $luas= $phi* $jari *$jari;
  echo  "Luasnya = $luas <br>";
}

}

$bangun_datar= new datar();
echo $bangun_datar->persegi(10);
echo $bangun_datar->segitiga(10,5);
echo $bangun_datar->lingkaran(3.14,10);
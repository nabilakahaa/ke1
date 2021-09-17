<?php

class bangun{
    
    public $luas;
}

   class persegi extends bangun{
    public function persegii($sisi){
            echo  "Menghitung Luas&Keliling Persegi<br>";
            echo  "Sisinya = $sisi<br>";
            
          
          $this->luas=$sisi*$sisi;
          $this->liling=$sisi*4;
          echo  "Luasnya = $this->luas <br>";
          echo "Keliling nya = $this->liling<br>";
          echo "<hr>";
    }
}

   class persegipan extends bangun{
       public function persegipanjang($panjang,$lebar){
           echo "Menghitung luas&keliling persegi panjang<br>";
           echo "Panjangnya = $panjang<br>";
           echo "Lebarnya = $lebar<br>";

           $this->luas=$panjang*$lebar;
           $this->liling=2*($panjang+$lebar);
           echo "Luasnya = $this->luas <br>";
           echo "Kelilingnya = $this->liling<br>";
           echo "<hr>";
       }
   }

   class segitigaa extends bangun{
    public function segitiga($alas,$tinggi,$b,$c){
        echo "Menghitung luas&keliling segitiga<br>";
        echo "Alasnya = $alas<br>";
        echo "Tingginya = $tinggi<br>";

        $this->luas=1/2*$alas*$tinggi;
        $this->liling=$alas+$b+$c;
        echo "Luasnya = $this->luas <br>";
        echo "Kelilingnya= $this->liling<br>";
        echo "<hr>";
    }
}

class lingkarann extends bangun{
    public function lingkaran($jari,$phi=3.14){
        echo "Menghitung luas&keliling lingkaran<br>";
        echo "Phi = $phi<br>";
        echo "Jari = $jari<br>";

        $this->luas= $phi* $jari;
        $this->liling=2*$phi*$jari;
        echo "Luasnya = $this->luas <br>";
        echo "Kelilingnya = $this->liling<br>";
        echo "<hr>";
    }
}
$cetak = new persegi();
$cetak -> persegii(5);
$pletak = new persegipan();
$pletak ->persegipanjang(2,5);
$jos = new segitigaa();
$jos ->segitiga(10,10,10,10);
$king = new lingkarann();
$king ->lingkaran(10);

?>
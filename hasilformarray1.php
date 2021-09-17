<?php

use latihan as GlobalLatihan;

class latihan{


        public function gaji($jabatan , $pendidikan){
            echo "Jabatan : $jabatan<br>";
            if ($jabatan == "direktur") {
                $rektur = 10000000;
            } else if ($jabatan == "manager") {
                $rektur = 5000000;
            } else if ($jabatan == "karyawan") {
                $rektur = 3000000;
            } {
                echo "milih hela";
            }

            echo "gaji : $rektur<br>";
            echo "Pendidikan : $pendidikan<br>";
            if ($pendidikan == "s1") {
                $tunjangan = 2000000;
            } else if ($pendidikan == "sma") {
                $tunjangan = 1000000;
            } else if ($pendidikan == "smp") {
                $tunjangan = 500000;
            } else {
                echo "kunn ai sia";
            }
            echo "Tunjangan : $tunjangan<br>";
            $hasil = $rektur + $tunjangan;
            echo "Total gaji : $hasil<br>";

        }
      public function pengeluaran($a , $b , $c) {
            echo "Bayar Listrik : $a<br>";
            echo "Bayar Kontrakan : $b <br>";
            echo "Cicilan Kendaraan : $c<br>";
            $hasil = $a + $b + $c;
            echo "Total Pengeluaran :$hasil";
        }

       
    }

         $data = new latihan();
         $data->gaji("manager" ,"smp");
         $data->pengeluaran(200000, 1000000 , 600000);




?>
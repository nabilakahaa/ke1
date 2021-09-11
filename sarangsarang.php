<?php
$menu = "Makanan";
$pesan = "ayamgoreng";
$jumlah = 1;

if($menu == "Makanan"){
    if($pesan == "nasigoreng"){
        
    $harga = 15000;
    $total=$jumlah*$harga;
    $diskon = $total*0.2;
    $to= $total + $diskon;
    echo "======== RESTORAN MURAH ========<br><br>";
    echo "Jenis Pesanan : $menu<br>";
    echo "Nama Pesanan : Nasi goreng<br>";
    echo "Jumlah : $jumlah<br>";
    echo "Total : $total<br>";
        echo " Diskon 20% : $diskon<br>";
        echo "Total Bayar : $to<br><br>"; 
        echo "==========================";
    }
    }

     if($pesan == "miegoreng"){
        
        $harga = 10000;
        $total=$jumlah*$harga;
        $diskon = $total*0.2;
        $to= $total - $diskon;
        echo "======== RESTORAN MURAH ========<br><br>";
        echo "Jenis Pesanan : $menu<br>";
        echo "Nama Pesanan : Mie goreng<br>";
        echo "Jumlah : $jumlah<br>";
        echo "Total : $total<br>";
            echo " Diskon 20% : $diskon<br>";
            echo "Total Bayar : $to<br><br>";
            echo "==========================";
        }
         if($pesan == "ayamgoreng"){
        
            $harga = 20000;
            $total=$jumlah*$harga;
            $diskon = $total*0.2;
            $to= $total - $diskon;
            echo "======== RESTORAN ========<br><br>";
            echo "Jenis Pesanan : $menu<br>";
            echo "Nama Pesanan : Ayam goreng<br>";
            echo "Jumlah : $jumlah<br>";
            echo "Total : $total<br>";
                echo " Diskon 20% : $diskon<br>";
                echo "Total Bayar : $to<br><br>";
                echo "==========================";
            }
    
              else if($pesan == "airmineral"){
        
                $harga = 8000;
                $total=$jumlah*$harga;
                $diskon = $total*0.2;
                $to= $total - $diskon;
                echo "======== RESTORAN ========<br><br>";
                echo "Jenis Pesanan : $menu<br>";
                echo "Nama Pesanan : Air Mineral<br>";
                echo "Jumlah : $jumlah<br>";
                echo "Total : $total<br>";
                    echo " Diskon 20% : $diskon<br>";
                    echo "Total Bayar : $to<br><br>";
                    echo "==========================";
                }
            
            else if($pesan == "jus"){
        
                    $harga = 10000;
                    $total=$jumlah*$harga;
                    $diskon = $total*0.2;
                    $to= $total - $diskon;
                    echo "======== RESTORAN ========<br><br>";
                    echo "Jenis Pesanan : $menu<br>";
                    echo "Nama Pesanan : Jus<br>";
                    echo "Jumlah : $jumlah<br>";
                    echo "Total : $total<br>";
                        echo " Diskon 20% : $diskon<br>";
                        echo "Total Bayar : $to<br><br>";
                        echo "==========================";
                    }
              else if($pesan == "Kopi"){
        
                  $harga = 12000;
                  $total=$jumlah*$harga;
                  $diskon = $total*0.2;
                  $to= $total - $diskon;
                  echo "======== RESTORAN ========<br><br>";
                  echo "Jenis Pesanan : $menu<br>";
                  echo "Nama Pesanan : Kopi<br>";
                  echo "Jumlah : $jumlah<br>";
                  echo "Total : $total<br>";
                  echo " Diskon 20% : $diskon<br>";
                  echo "Total Bayar : $to<br><br>3";
                  echo "==========================";
                  }
                  else {
                      echo "Maaf Menu Yang Anda Cari Tidak Ada";
                  }

?>
<?php
// class 
class laptop {
// property/ atribut 
    var $pemilik;
    var $merk;
    var $ukuranlayar;


//method/function
function hidupkanlaptop(){
   return "Hidupkan Laptopnya";
}
function matikanlaptop(){
    return "Matikan laptopnya";
}
}
//object
$laptopani = new laptop();
$laptopana = new laptop();

echo $laptopana -> hidupkanlaptop();
echo "<br>";
echo $laptopana -> matikanlaptop();
echo "<br>";
echo "<br>";
echo "<br>";
?>




<?php
// class 
class baju {
// property/ atribut 
    var $jenis;
    var $merk;
    var $ukuran;


//method/function
function untukdipakai($ket){
   return $ket;
}
function untukdicuci(){
    return "Mari cuci bajunya";
}
function untukdijual(){
    return "Jual bajunya";
}
}
//object
$orang1 = new baju();
$orang2 = new baju();
$orang3 = new baju ();


//set property
$orang1 -> jenis = "Flanel";
$orang2 -> merk = "H&M";
$orang3 -> ukuran = "M";



echo $orang1 -> jenis;
echo "<br>";
echo $orang2 -> merk;
echo "<br>";
echo $orang3 -> ukuran;
echo "<br>";
echo $orang1 -> untukdipakai("Yu di Baju");
echo "<br>";
echo $orang2 -> untukdicuci();
echo "<br>";
echo $orang3 -> untukdijual();
echo "<br>";
?>


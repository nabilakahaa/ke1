<?php
//class manusia
class manusia{
    //prop
    public $nama;

    //method manusia
    public function tampilkan_nama(){
       echo "Nama saya uus";
    }
    public function biodata(){
        echo $this->tampilkan_nama();
   }
}
$manusia = new manusia();

echo $manusia->tampilkan_nama();


//private
class manusia{

    private $nama = "Nabila";

    //method public
    private function tampilkan_nama(){
        return "Nama Saya" . $this->nama;
    }
    public function output(){
        echo $this->tampilkan_nama();
    }
    }
$manusia = new manusia();

echo $manusia->output();

//menentukan property dengan protected
class manusia{
protected $nama = "malas ngoding";

public function nama(){
    return "Nama saya ".$this->nama;
}
public function tampilkan_nama(){
    return $this->nama;
}
}

$manusia = new manusia();
echo $manusia->tampilkan_nama();
?>
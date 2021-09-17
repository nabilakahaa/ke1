<?php

// class turunan 
class manusia{
   private $teman = "Nabila";
   protected function berinama(){
        echo "Nama saya Ujang <br>";
    }
    
}

// class turunan
class teman extends manusia{

   public function berinamateman(){
        echo "Nama teman saya Andi" . $this->teman;
    }
}

// intansi class teman
$malasngoding = new teman;

$malasngoding->berinama;
$malasngoding->berinamateman;

?>
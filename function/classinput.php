<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta https-equiv="X-UA-Compatible" content="IE-edge">
        <meta name = "viemport" content="width=device-width, initial-scales=1.0">
        <title>Document</title>
</head>
<body>
     <table>
         <form action="" method="post">
             <tr>
                 <td>NIM</td>
                 <td>:</td>
                 <td><input type="text" name="nim"></td>
            </tr>
            <tr>
                <td>Nama</td>
                <td>:</td>
                <td><input type="text" name="nama"></td>
            </tr>
            <tr>
                <td></td>
                <td></td>
                <td><input type="submit" name="proses" value="Proses"></td>
            </tr>
</form>
     </table>
</body>
</html>
 <?php
 /*
 *kalkulator sederhana dengan php oop
 */
if(isset($_POST['proses'])){
    $nim = $_POST['nim'];
    $nama = $_POST['nama'];

    class input
   {
       public $x;
       public $y;

       public function data($x , $y)
       {
           $this->x = $x;
           $this->y = $y;
       }
    }

    $data = new input();
    $data->data($nim,$nama);

    echo $data->x."<br>";
    echo $data->y;
}

?>
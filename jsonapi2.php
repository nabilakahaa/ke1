<?php

$url ="https://api.kawalcorona.com/indonesia/provinsi/";
// persiapkan curl / init curl 
$ch = curl_init();
// set url
curl_setopt($ch , CURLOPT_URL, $url);
// return he transfer as a string
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
// $output contains the output string
$dataCovid = curl_exec($ch);
// tutup curl
curl_close($ch);
//menmapilkan hasil curl
// echo $output
?>

<!DOCTYPE html>
<html lang="en">
    <head>
         <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <mmeta name="viewport" content="widht=device=widht, initial-scalet=1.0">
            <title>Document</title>
</head>
<body>
    <cemter>
        <h1><i> Data Covid-19</i></h1>
        <table border="1">
            <tr>
                <th>Kode Provinsi</th>
                <th>Provisi</th>
                <th>Positif</th>
                <th>Sembuh</th>
                <th>Meninggal</th>
           </tr>
               <?php
            $data = json_decode($dataCovid);
              foreach($data as $covid) {
                  ?>
                <tr>
                    <td><?php echo $covid->attributes->Kode_Provi; ?></td>
                    <td><?php echo $covid->attributes->Provinsi; ?></td>
                    <td><?php echo $covid->attributes->Kasus_Posi; ?></td>
                    <td><?php echo $covid->attributes->Kasus_Semb; ?></td>
                    <td><?php echo $covid->attributes->Kasus_Meni; ?></td>
              </tr>
              <?php
              }
              ?>
        </table>
            </center>
            </body>
            </html>
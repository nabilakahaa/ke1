<DOCTYPE html>
<html>
<head>
<title>FORM INPUT </title>
</head>
<body>
<h2> SWITCH CASE </h2>
<!--form-->
<form method = "POST" action = "">
<table>
<tr>
<td> MASUKAN ANGKA</td>
<td> : </td>
<td> <input type = 'text' name='angka'> </td>
</tr>
<tr>
<td></td>
<td></td>
<td><input type = "submit" name = "simpan" value = 'KIRIM'> </td>
</tr>
</table>
</form>
</body>
</html>

<?php
if(isset ($_POST['simpan'])){
    $angka = $_POST ['angka'];
switch ($angka){
    case 1:
        echo "ISI VARIABLE ANGKA ADALAH SATU!";
        break;
        case 2:
            echo "ISI VARIABLE ANGKA ADALAH DUA!";
            break;
            case 3:
                echo "ISI VARIABLE ANGKA ADALAH TIGA!";
                break;
                case 4:
                    echo "ISI VARIABLE ANGKA ADALAH EMPAT !";
                    break;
                    case 5:
                        echo "ISI VARIABLE ANGKA ADALAH LIMA !";
                        break;
                        case 6:
                            echo "ISI VARIABLE ANGKA ADALAH ENAM!";
                            break;
                            default :
                            echo "ISI VARIABLE TIDAK DITEMUKAN";
                            break;
}
}
?>

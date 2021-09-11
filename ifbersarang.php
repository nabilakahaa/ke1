<?php
$kelas = "XI";
$nilai = 76;

if ($kelas == "X" || $kelas == "x")
{
    if ($nilai >= 75)
    {
        echo "Selamat Anda Lulus";
    }
    else 
    {
        echo "Selamat Anda Tidak Lulus";
    }
}
else if ($kelas == "XI" || $kelas == "xi" )
{
    if ($nilai >= 78)
    {
        echo "Selamat Anda Lulus";
    }
    else
    {
echo "Selamat Anda tidak Lulus";
    }
}
else if ($kelas == "XII" || $kelas == "xi")
{
    if ($nilai >= 80)
    {
        echo "selamat anda Lulus";
    }
    else
    {
        echo "Selamat Tidak Lulus";
    }
}
else 
{
    echo "Tidak ada kelas";
}
?>
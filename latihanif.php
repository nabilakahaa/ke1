<?php 
 $nilai =8;

if ($nilai >= 90 && $nilai<=100)  {
    echo "Grade A";
}else if ($nilai>=80 && $nilai <90){ 
    echo "Grade B";
} else if ($nilai >=70 && $nilai <80 ) {
    echo "Grade C";
} else if ($nilai >= 60 && $nilai <70) {
    echo "Grade D";
}else if ($nilai >=0 && $nilai <60) {
    echo "Grade E";
}else   {
    echo "Nilai Kacau";
}
?>
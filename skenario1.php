<?php
$nilai = 69;

if($nilai <= 100 && $nilai >= 90)
{
    echo "A";
}
else if ($nilai <= 89 && $nilai > 80)
{
    echo "B";
}
 else if ($nilai <= 79 && $nilai > 70) 
{
    echo "C";
}
else if($nilai <= 69 && $nilai > 0) 
{
    echo "D";
}    
else {
    echo "nilai wajib di atas 0";
}
?>

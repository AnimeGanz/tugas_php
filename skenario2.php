<?php
$waktu=date("18.00");
if($waktu >=date(00.00) && $waktu <=date(04.00))
{
    echo $waktu,"Dini hari";
}
else if($waktu >=date(04.00 ) && $waktu <=date(10.00))
{
    echo $waktu,"Pagi hari";
}
else if($waktu >=date(10.00 ) && $waktu <=date(15.00))
{
    echo $waktu,"Siang hari";
}
else if($waktu >=date(15.00 ) && $waktu <=date(18.00))
{
    echo $waktu,"Sore hari";
}
else if($waktu >=date(18.00 ) && $waktu <=date(00.00))
{
    echo $waktu,"Malam hari";
}
else
{
    echo "Anda di indonesia";
}
?>
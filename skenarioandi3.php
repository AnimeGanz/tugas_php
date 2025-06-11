<html>
    <head>
        <title> Skenario Andi </title>
        <style>
            h1 {
                background-color: gold;
                text-align: center;
            }
            h2 {
                background-color: red;
                text-align: center;
                color: white;
            }
            .tr,td {
                    text-align: center;
            }
            .table {
                align-items: center;
                margin: auto;
            }
            .container {
                display: flex;
                justify-content: center;
                align-items: center;
            }
            .andi {
                display: flex;
                justify-content: center;
                align-items: center;
                background-color: darkgoldenrod;
                color: white;
            }
        </style>
    </head>
<body>

<h1>By Raihan dan Syahrul</h1>
<h2>JADWAL ANDI DI PAGI HARI</h2>

<div class = "container">
<table border= 1 style="width: 50%">
 <tr><td>Pukul</td><td>Kegiatan</td></tr>

    <tr><td>04.25 - 04.30</td><td>Andi Bangun Tidur</td></tr>

    <tr><td>04.35 - 04.40</td><td>Andi Wudhu Dan Shalat</td></tr>

    <tr><td>04.45 - 05.00</td><td>Andi Mandi Biar Wangi</td></tr>

    <tr><td>05.05 - 05.35</td><td> Andi Makan Agar Tidak Kelaparan di Sekolah</td></tr>

    <tr><td>05.40 - 06.50</td><td>Andi Persiapan Sekolah Dan Berangkat Sekolah</td></tr>

    <tr><td>07.00 - 15.30 </td><td>Andi Sekolah Dan Belajar</td></tr>

    <tr><td>15.30 - 15.45</td><td>Andi Perjalanan Pulang Sekolah</td></tr>

    <tr><td>15.47 - 16.01</td><td>Andi Mandi dan Berangkat Ngaji</td></tr>

    <tr><td>16.05 - 16.35</td><td>Andi Mengaji</td></tr>

    <tr><td>16.40 - 16.50</td><td>Andi Membeli Bumbu Saat Pulang</td></tr>

    <tr><td>16.52 - 17.22</td><td>Andi Chatting Dengan Raya</td></tr>

    <tr><td>17.23 - 17.53 </td><td>Andi Istirahat(True)/Andi Mengobrol Bersama Keluarga(False)</td></tr>

    <tr><td>17.54 - 18.24</td><td>Andi Menghafalkan Dialog</td></tr>
    
    <tr><td>18.25 - 18.35 </td><td>Andi Sholat Maghrib dan Makan Malam</td></tr>

    <tr><td>18.40 - 20.40</td><td>Andi Mengerjakan Tugas</td></tr>

    <tr><td>20.41 - 20.56 </td><td>Andi Sholat Isya</td></tr>

    <tr><td>20.57 - 21.27</td><td>Andi Kumpul Keluarga dan Mengobrol(True)</td></tr>

    <tr><td>21.27 - 04.25</td><td>Andi Free dan Bobok Manis</td></tr>
</table>
</div>

<?php
echo "</br>";
echo '<div class = "andi">';
$waktu = date ("17:53:00");
$aktivitas = FALSE;

if($waktu >= date ("04:25:00") && $waktu <= date ("04:30:00")){
    if($aktivitas = "Andi Bangun Tidur"){
                echo "Pada Pukul $waktu $aktivitas";
    } else {
    }
}else if($waktu >= date ("04:35:00") && $waktu <= date ("04:40:00")){
    if($aktivitas = "Andi Wudhu Dan Shalat Subuh"){
                echo "Pada Pukul $waktu $aktivitas";
    } else {
    }
}else if($waktu >= date ("04:45:00") && $waktu <= date ("05:00:00")){
    if($aktivitas = "Andi Mandi Biar Wangi"){
                echo "Pada Pukul $waktu $aktivitas";
    } else {
    }
}else if($waktu >= date ("05:05:00") && $waktu <= date ("05:35:00")){
    if($aktivitas = "Andi Makan Agar Tidak Kelaparan"){
                echo "Pada Pukul $waktu $aktivitas";
    } else {
    }
}else if($waktu >= date ("05:40:00") && $waktu <= date ("06:50:00")){
    if($aktivitas = "Andi Persiapan Dan Berangkat Sekolah"){
                echo "Pada Pukul $waktu $aktivitas";
    } else {
    }
}else if($waktu >= date ("07:00:00") && $waktu <= date ("15:30:00")){
    if($aktivitas){
                echo "Pada Pukul $waktu Andi Sekolah Dan belajar";
    } else {
        echo "Pada Pukul $waktu Bolos";
    }
    
}elseif($waktu >= date ("15:30:00") && $waktu <= date ("15:46:00")){
        if($aktivitas = "Andi Perjalanan Pulang dari Sekolah"){
                    echo "Pada Pukul $waktu $aktivitas";
        } else {
        }
}else if($waktu >= date ("15:47:00") && $waktu <= date ("16:01:00")){
        if($aktivitas = "Andi Mandi dan Berangkat Ngaji"){
                    echo "Pada Pukul $waktu $aktivitas";
        } else {
        }
}else if($waktu >= date ("16:05:00") && $waktu <= date ("16:35:00")){
        if($aktivitas = "Andi Mengaji"){
                    echo "Pada Pukul $waktu $aktivitas";
        } else {
        }
}else if($waktu >= date ("16:40:00") && $waktu <= date ("16:50:00")){
        if($aktivitas = "Andi Membeli Bumbu Saat Pulang (dititipin)"){
                    echo "Pada Pukul $waktu $aktivitas";
        } else {
        }
}else if($waktu >= date ("16:52:00") && $waktu <= date ("17:22:00")){
        if($aktivitas = "Andi Chatting Dengan Raya"){
                    echo "Pada Pukul $waktu $aktivitas";
        } else {
        }
}else if($waktu >= date ("17:23:00") && $waktu <= date ("17:53:00")){
        if($aktivitas){
                    echo "Pada Pukul $waktu Andi Istirahat";
        } else{
            echo "Pada Pukul $waktu Andi Ngobrol Dengan Keluarga (diajukan)";
        }
}else if($waktu >= date ("17:54:00") && $waktu <= date ("18:24:00")){
            if($aktivitas = "Andi Menghafalkan Dialog"){
                    echo "Pada Pukul $waktu $aktivitas";
            } else {
            }
}else if($waktu >= date ("18:25:00") && $waktu <= date ("18:35:00")){
            if($aktivitas = "Andi Sholat Maghrib dan Makan Malam"){
                    echo "Pada Pukul $waktu $aktivitas";
            } else {
            }
}else if($waktu >= date ("18:40:00") && $waktu <= date ("18:55:00")){
            if($aktivitas = "Andi Mengerjakan Tugas"){
                    echo "Pada Pukul $waktu $aktivitas";
            } else{
            }
}else if($waktu >= date ("18:56:00") && $waktu <= date ("20:56:00")){
            if($aktivitas = "Andi Sholat Isya"){
                    echo "Pada Pukul $waktu $aktivitas";
            } else{
            }
}else if($waktu >= date ("20:57:05:00") && $waktu <= date ("21:27:00")){
            if($aktivitas = "Andi Kumpul Keluarga dan Mengobrol"){
                    echo "Pada Pukul $waktu $aktivitas";
            } else {
            }
}else if($waktu >= date ("21:27:00") && $waktu <= date ("24:59:00")){
            if($aktivitas = "Andi Sedang Bobok Manis"){
                    echo "Pada Pukul $waktu $aktivitas";
            } else {
            }
}else if($waktu >= date ("00:00:00") && $waktu <= date ("04:00:00")){
            if($aktivitas = "Andi Sedang Bobok Manis"){
                    echo "Pada Pukul $waktu $aktivitas";
            } else {
            }
} else {
        echo "Isekai";
}

echo "</div>";
?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas LKPD Rizki dan Syahrul</title>
    <style>
    body {
        font-family: Arial, sans-serif;
        background-image: url('hdcuy.jpg');
        background-size: cover;
        background-repeat: no-repeat;
        background-position: center;
        margin: 0;
        padding: 0;
    }

    .container {
        max-width: 500px;
        background-color: rgba(255, 247, 9, 0.7);
        backdrop-filter: blur(1px);
        margin: auto;
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
    }
</style>
    <style>
        .container {
            max-width: 500px;
            background-color:  rgba(198, 87, 165, 0.69);
            margin: auto;
            padding: 50px;
            border-radius: 25px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>
<body>
<div class="container";>
<?php
echo "<h3>case 1</h3>";
$hari = ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"];
$tanggal = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10, 11, 12, 13, 14, 15, 16, 17, 18, 19, 20, 21, 22, 23, 24, 25, 26, 27, 28, 29, 30, 31];
$bulan = ["Jan", "Feb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sep", "Okt", "Nov", "Des"];
$tahun = [2024, 2025, 2026];

$hariOutput = "";
for ($i = 0; $i < count($hari); $i++) {
    if ($hari[$i] == "Rabu") {
        $hariOutput = $hari[$i];
        break;
    }
}

$tanggalOutput = "";
foreach ($tanggal as $tgl) {
    if ($tgl == 9) {
        $tanggalOutput = $tgl;
        break;
    }
}

$bulanOutput = "";
$i = 0;
while ($i < count($bulan)) {
    if ($bulan[$i] == "Apr") {
        $bulanOutput = $bulan[$i];
        break;
    }
    $i++;
}

$tahunOutput = "";
$j = 0;
do {
    if ($tahun[$j] == 2025) {
        $tahunOutput = $tahun[$j];
        break;
    }
    $j++;
} while ($j < count($tahun));

// Output
echo "$hariOutput, $tanggalOutput - $bulanOutput - $tahunOutput";
?>

<?php 
echo "<h3>case 2</h3>";
if (ob_get_level() == 0) ob_start();
?>
<!DOCTYPE html>
<html>
<head>
    <title>anak ayam turun 30</title>
    <style>
        body { font-family: Arial, sans-serif;}
        .lirik { font-size: 18px; line-height: 1.6; margin-top: 20px; }
        .btn-kecil {
            padding: 5px 12px;
            font-size: 14px;
            background-color:rgba(247, 99, 227, 0.68);
            color: white;
            border: none;
            border-radius: 6px;
            cursor: pointer;
        }
        .btn-kecil:hover {
            background-color: #0056b3;
        }
    </style>
</head>
<body>

<h2>anak ayam turun 30</h2>

<?php if (!isset($_POST['start'])): ?>
    <form method="post">
        <button type="submit" name="start" class="btn-kecil">Mulai</button>
    </form>
<?php else: ?>
    <div class="lirik">
        <?php
        for ($i = 30; $i >= 1; $i--) {
            if ($i > 1) {
                echo "anak ayam turun $i, mati satu tinggal " . ($i - 1) . "<br>";
            } else {
                echo "anak ayam turun 1, meninggal satu tinggal induknya <br>";
            }
            echo str_pad('', 4096) . "\n";
            flush();
            ob_flush();
            sleep(1);
        }
        ?>
    </div>
    <br>
    <form method="get">
        <button type="submit" class="btn-kecil">Ulangi</button>
    </form>
<?php endif; ?>

</body>
</html>

<?php
echo "<h3>case 3</h3>";
// Mawar yang dimiliki Sholeh
for ($mawar = 21; $mawar >= 10; $mawar--) {
    echo "Mawar yang dimiliki Sholeh: $mawar<br>";
}
echo "Jumlah Mawar yang dimiliki Sholeh: 12<br><br>";

// Mawar yang akan diberikan ke ibunya
for ($mawar = 21; $mawar >= 10; $mawar -= 4) {
    echo "Mawar yang diberikan ke ibunya: $mawar<br>";
}
echo "Jumlah Mawar yang diberikan ke ibunya: 3<br><br>";
?>

<?php
echo "<h3>case 4</h3>";
$playlist = [
    ["suasana" => "galau",        "lagu" => "Mesin Waktu - Budi Doremi"],
    ["suasana" => "bersemangat", "lagu" => "Selamat Pagi - Ran"],
    ["suasana" => "marah",        "lagu" => "Yang Patah Tumbuh, yang Hilang Berganti - Banda Neira"]
];


if (!isset($_POST['suasana'])) {
    echo '
    <form method="post">
        Suasana hati Ambyar (galau / bersemangat / marah): 
        <input type="text" name="suasana" required>
        <button type="submit">Play Song</button>
    </form>
    ';
} else {
    $input = strtolower(trim($_POST['suasana']));
    $output = "Ambyar tidak menyetel lagu";

    foreach ($playlist as $item) {
        $check = ($item["suasana"] === $input);
        $output = $check ? "Ambyar menyetel lagu \"" . $item["lagu"] . "\"" : $output;
    }

    echo $output . "<br><br>";
    echo '<a href="">Ulangi</a>';
}
?>
</body>
</html>
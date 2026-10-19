
<?php

//variabel
$jenis = "motor";
$lamaJam = 5;

//rumu / metode
if ($jenis == "motor") {
    $tarifAwal = 2000;
    $tarifLanjut = 1000;
} elseif ($jenis == "mobil") {
    $tarifAwal = 5000;
    $tarifLanjut = 3000;
} else {
    $tarifAwal = 0;
    $tarifLanjut = 0;
}

if ($jenis != "motor" && $jenis != "mobil") {
    $totalTarif = 0;
    $pesan = "Jenis kendaraan tidak valid";
} elseif ($lamaJam <= 0) {
    $totalTarif = 0;
    $pesan = "Lama parkir tidak valid";
} elseif ($lamaJam <= 2) {
    $totalTarif = $tarifAwal;
    $pesan = "Tarif parkir berhasil dihitung";
} else {
    $jamTambahan = ceil($lamaJam - 2);
    $totalTarif = $tarifAwal + ($jamTambahan * $tarifLanjut);
    $pesan = "Tarif parkir berhasil dihitung";
}

?>

<!--- HTML penampilnya -->
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Tarif Parkir</title>
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center p-6">

    <div class="bg-white w-full max-w-sm rounded-2xl shadow-lg p-6">
        <h2 class="text-2xl font-bold text-green-800 mb-4">
            Tarif Parkir
        </h2>

        <div class="space-y-3 text-gray-600">
            <p>Jenis Kendaraan:
                <span class="font-semibold text-gray-900">
                    <?= ucfirst($jenis) ?>
                </span>
            </p>

            <p>Lama Parkir:
                <span class="font-semibold text-gray-900">
                    <?= $lamaJam ?> jam
                </span>
            </p>

            <p>Status:
                <span class="font-semibold text-gray-900">
                    <?= $pesan ?>
                </span>
            </p>
        </div>

        <div class="mt-5 bg-green-900 text-black rounded-xl p-4">
            <p class="text-sm text-gray-300">Total Tarif</p>
            <p class="text-3xl font-bold mt-1">
                Rp <?= number_format($totalTarif, 0, ',', '.') ?>
            </p>
        </div>
    </div>

</body>
</html>

<?php

//variabelnya
$totalba = 800000;

//rumus dan metode yang dipakai if else
if ($totalba >= 500000) {
    $diskon = 15;
} elseif ($totalba >= 200000) {
    $diskon = 10;
} else {
    $diskon = 0;
}

$jumdiskon = $totalba * $diskon /100;
$bayar = $totalba - $jumdiskon;

echo "<h3>Diskon Toko</h3>";
echo "Total awal: Rp " . number_format($totalba, 0, ",", ".") . "<br>";
echo "Diskon $diskon% <br>";
echo "Jumlah diskon: Rp " . number_format($jumdiskon, 0, ",", ".") . "<br>";
echo "Total bayar: Rp " . number_format($bayar, 0, ",", ".");

?>
<?php

//variabelnya
$nambar = "Jam Dinding";
$harga = 27000;
$jumbar = 2;

//rumus
$total = $harga * $jumbar;

//nampilinnya
echo "<h3>Kalkulator Belanja</h3>";
echo "Nama barang: $nambar<br>";
echo "Harga barang: Rp " . number_format($harga, 0, ",", ".") . "<br>";
echo "Jumlah barang: $jumbar<br>";
echo " Total harga: Rp " . number_format($total, 0, ",", ".") . "<br>";

//fungsi yang digunakan untuk memformat angka desimal dan ribuan adlah fungsi number_format()

?>
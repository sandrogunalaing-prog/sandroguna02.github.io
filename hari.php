<?php

//variabelnya
$nohari = 3;

//manggil/nampilinnya pakai metode atau fitur dah ini si match
$nahari = match ($nohari){
    1 => "Senin",
    2 => "Selasa",
    3 => "Rabu",
    4 => "Kamis",
    5 => "Jumaat",
    6 => "Sabtu",
    7 => "Minggu",
    default => "Nomor Hari ZONK, tidak VALID"
};

echo "<h3>Nama Hari Ini</h3>";
echo "Nomor: $nohari<br>";
echo "Hari: $nahari";

?>
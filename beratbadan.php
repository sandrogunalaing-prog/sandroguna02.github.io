
<?php

//variabelnya
$bb = 80;
$ting = 1.80;

//rumus dan cara tampil/manggilnya
$bmi = $bb / ($ting * $ting);

if ($bmi < 18.5) {
    $kategori = "Kurus";
} elseif ($bmi < 25) {
    $kategori = "Normal";
} elseif ($bmi < 30) {
    $kategori = "Gemuk";
} else {
    $kategori = "Obesitas";
}

echo "<h3>Indeks Massa Tubuh</h3>";
echo "Berat: $bb kg<br>";
echo "Tinggi: $ting meter<br>";
echo "BMI: " . number_format($bmi, 1, ',', '.') . "<br>";
echo "Kategori: $kategori";

?>

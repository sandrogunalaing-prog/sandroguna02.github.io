<?php

//variabelnya
$angka = 999;

//cara manggil/nampilin
echo "<h3>Genap atau Ganjil yaaa</h3>";

echo ($angka % 2 == 0)
? "$angka adalah bilangan Genap"
: "$angka adalah bilangan Ganjil";

//disini yang digunakan ada 2 operator ternary sama modulus
//modulus buat nentuin angkanya genap atau ganjil dengan cara dibagi 2 = 0
//ternary yang menentukan false atau true dari hasil modulus

?>
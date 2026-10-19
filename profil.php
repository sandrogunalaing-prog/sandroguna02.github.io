<?php
// ============================================
// BAGIAN 1: DATA & LOGIKA (PHP)
// ============================================

// Atur zona waktu ke WITA (Bali) agar jam sesuai
date_default_timezone_set('Asia/Makassar');

// Data diri 
$nama       = "Alessandro Gunalaing";
$panggilan  = "Sandro";
$peran      = "Mahasiswa RSK";
$tahunLahir = 2000;
$kota       = "Nusa Dua";
$github     = "sandrogunalaing-prog";
$email      = "email@contoh.com";

// Menghitung umur dari tahun lahir
$tahunSekarang = (int) date('Y');
$umur          = $tahunSekarang - $tahunLahir;

// Menentukan sapaan berdasarkan jam sekarang (0-23)
$jam = (int) date('H');

if ($jam >= 4 && $jam < 11) {
    $sapaan = "Selamat pagi";
} elseif ($jam >= 11 && $jam < 15) {
    $sapaan = "Selamat siang";
} elseif ($jam >= 15 && $jam < 18) {
    $sapaan = "Selamat sore";
} else {
    $sapaan = "Selamat malam";
}

// Status: masih remaja atau sudah dewasa (operator ternary)
$kategoriUmur = ($umur >= 18) ? "dewasa" : "remaja";

// Tanggal hari ini dalam format 13-10-2026
$tanggalHariIni = date('d-m-Y');
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- BAGIAN 2: TAMPILAN (HTML) yang diisi data dari PHP -->
    <title>Profil - <?= $nama ?></title>
    <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>
</head>
<body class="bg-slate-100 text-slate-800">

    <header class="bg-white border-b border-slate-200">
        <div class="max-w-4xl mx-auto px-4 py-10 text-center">
            <img src="blank<?= $github ?>.png" alt="Foto profil"
                 class="w-28 h-28 rounded-full mx-auto mb-4 border-4 border-slate-200">
            <p class="text-blue-600 font-semibold"><?= $sapaan ?>! 👋</p>
            <h1 class="text-3xl font-bold">Halo, saya <?= $panggilan ?></h1>
            <p class="text-slate-500 mt-1"><?= $peran ?></p>
        </div>
    </header>

    <main class="max-w-4xl mx-auto px-4 py-10 grid md:grid-cols-2 gap-6">

        <section class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-bold mb-3">Tentang Saya</h2>
            <p>Nama lengkap: <strong><?= $nama ?></strong></p>
            <p>Asal kota: <?= $kota ?></p>
            <p>Umur: <?= $umur ?> tahun (<?= $kategoriUmur ?>)</p>
        </section>

        <section class="bg-white rounded-xl shadow p-6">
            <h2 class="text-xl font-bold mb-3">Kontak</h2>
            <p>GitHub:
                <a href="https://github.com/<?= $github ?>" class="text-blue-600 underline"><?= $github ?></a>
            </p>
            <p>Email:
                <a href="mailto:<?= $email ?>" class="text-blue-600 underline"><?= $email ?></a>
            </p>
        </section>

    </main>

    <footer class="text-center text-sm text-slate-500 pb-8">
        Halaman ini dibuat dengan PHP &middot; Diakses pada <?= $tanggalHariIni ?>, pukul <?= date('H:i') ?> WITA
        <br>&copy; <?= $tahunSekarang ?> <?= $nama ?>
    </footer>

</body>
</html>
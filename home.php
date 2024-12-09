<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link rel="stylesheet" href="style.css?v=<?= filemtime('style.css') ?>">
</head>

<body>
    <div class="container">
        <nav>
            <a href="home.php">Home</a>
            <a href="dataBarang.php">Data Barang</a>
            <a href="dataCustomer.php">Data Customer</a>
        </nav>

        <header>
            <h1>Selamat Datang di Aplikasi Manajemen</h1>
            <p>Manajemen yang mudah untuk meningkatkan efisiensi bisnis Anda</p>
        </header>

        <section class="features">
            <h2>Fitur Unggulan</h2>
            <ul>
                <li><i class="icon">&#x1F4CB;</i> Mudah digunakan</li>
                <li><i class="icon">&#x1F6E0;</i> Tampilan responsif</li>
                <li><i class="icon">&#x1F4C8;</i> Integrasi mudah dengan sistem lain</li>
                <li><i class="icon">&#x1F4C3;</i> Keamanan data terjamin</li>
            </ul>
        </section>

        <section class="call-to-action">
            <h2>Mari Mulai Bersama Kami!</h2>
            <p>Dapatkan solusi manajemen yang lebih baik dengan fitur yang lengkap dan pelayanan pelanggan terbaik.</p>
            <a href="katalog.php" class="btn btn-primary">Lihat Katalog Produk</a>
        </section>
    </div>
</body>

</html>

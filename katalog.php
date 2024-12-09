<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Katalog Produk</title>
    <link rel="stylesheet" href="style.css?v=<?= filemtime('style.css') ?>">
</head>

<body>
    <div class="container">
        
        <h1>Katalog Produk</h1>
        <div class="product-list">
            <!-- Contoh produk -->
            <div class="product">
                <img src="rajut.jpg" alt="Produk A">
                <h2>Rajut</h2>
                <p>Harga: Rp 98.000</p>
            </div>
            <!-- Tambahkan produk lainnya di sini -->
            
            <div class="product">
                <img src="zipper.jpg" alt="Produk B">
                <h2>hoodie zipper</h2>
                <p>Harga: Rp 367.000</p>
            </div>
        </div>
         
        <div class="product">
                <img src="hoodie.jpg" alt="Produk B">
                <h2>hoodie </h2>
                <p>Harga: Rp 190.000</p>
            </div>
        </div>
         
       
        
        <!-- Tombol kembali ke halaman home -->
        <a href="home.php" class="btn btn-back">Kembali ke Home</a>
    </div>
</body>

</html>

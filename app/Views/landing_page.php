<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page UMKM</title>
    

</head>
<style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: #001f3f;
        color: #ffffff;
    }

    header {
        background: url('https://source.unsplash.com/1600x900/?business') no-repeat center center/cover;
        color: #fff;
        text-align: center;
        padding: 100px 0;
    }

    header .container {
        max-width: 1000px;
        margin: auto;
        padding: 0 20px;
    }

    header h1 {
        font-size: 50px;
        margin-bottom: 10px;
    }

    header p {
        font-size: 20px;
        margin-bottom: 20px;
    }

    .btn {
        display: inline-block;
        background-color: #333;
        color: #fff;
        padding: 10px 20px;
        text-decoration: none;
        border-radius: 5px;
        transition: background-color 0.3s;
    }

    .btn:hover {
        background-color: #555;
    }

    .section {
        padding: 60px 0;
    }

    .section h2 {
        text-align: center;
        margin-bottom: 20px;
    }

    .section p {
        text-align: center;
        max-width: 600px;
        margin: auto;
        font-size: 18px;
        line-height: 1.6;
    }

    .bg-light {
        background-color: #f9f9f9;
    }

    .products {
        display: flex;
        justify-content: space-around;
        flex-wrap: wrap;
    }

    .product {
        background-color: #f9f9f9;
        padding: 20px;
        margin: 10px;
        border-radius: 5px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        text-align: center;
        width: 45%;
    }

    .product i {
        font-size: 50px;
        margin-bottom: 10px;
    }

    form {
        max-width: 600px;
        margin: auto;
        display: flex;
        flex-direction: column;
    }

    form label {
        margin-bottom: 5px;
        font-weight: bold;
    }

    form input,
    form textarea {
        margin-bottom: 10px;
        padding: 10px;
        border: 1px solid #ccc;
        border-radius: 5px;
    }

    form button {
        padding: 10px;
        border: none;
        background-color: #333;
        color: #fff;
        border-radius: 5px;
        cursor: pointer;
    }

    form button:hover {
        background-color: #555;
    }

    footer {
        background-color: #333;
        color: #fff;
        text-align: center;
        padding: 10px 0;
    }

    footer .container {
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
    }

    .social-icons a {
        color: #fff;
        margin: 0 5px;
        text-decoration: none;
    }

    .social-icons a:hover {
        color: #ddd;
    }

    header {
        position: relative;
        background: url('https://source.unsplash.com/1600x900/?business') no-repeat center center/cover;
        color: #fff;
        text-align: center;
        padding: 100px 0;
    }

    header .container {
        position: relative;
        max-width: 1000px;
        margin: auto;
        padding: 0 20px;
    }

    header .logo {
        position: absolute;
        top: 20px;
        left: 20px;
        width: 100px;
        /* Sesuaikan ukuran logo */
        height: auto;
    }
</style>

<body>
    <header>
        <div class="container">
            <img src="img/logo.png" alt="Logo" class="logo">
            <h1>Selamat Datang di Service AC KangFJK</h1>
            <p>jasa cuci AC yang terpercaya dan bersih</p>
            <a href="#about" class="btn">Pelajari Lebih Lanjut</a>
        </div>
    </header>

    <section id="about" class="section">
        <div class="container">
            <h2>Tentang Kami</h2>
            <p>Kami adalah penyedia jasa service AC yang berpengalaman dan terpercaya di kota Yogyakarta. Kami menyediakan berbagai layanan untuk memastikan AC Anda tetap berfungsi dengan baik dan efisien.Layanan Kami:</p>
            <br>
            <p>>Pembersihan AC: Menghilangkan debu dan kotoran dari unit indoor dan outdoor untuk meningkatkan kinerja dan efisiensi AC.</p>
            <p>> Perbaikan AC: Mengatasi berbagai masalah teknis pada AC, termasuk kerusakan komponen dan kebocoran.</p>
            <p>> Perawatan Rutin: Jadwal perawatan berkala untuk mencegah kerusakan dan memperpanjang umur AC. </p>
            <p>> Instalasi AC: Pemasangan unit AC baru dengan proses yang cepat dan profesional.</p>
        </div>
    </section>
    <section id="products" class="section bg-light">
        <div class="container">
            <h2>Pilihan Jasa</h2>
            <div class="products">
                <div class="product">
                    <i class="fas fa-seedling"></i>
                    <h3>Produk 1</h3>
                    <p>Deskripsi produk 1.</p>
                </div>
                <div class="product">
                    <i class="fas fa-leaf"></i>
                    <h3>Produk 2</h3>
                    <p>Deskripsi produk 2.</p>
                </div>
                <!-- Tambahkan lebih banyak produk sesuai kebutuhan -->
            </div>
        </div>
    </section>
    <section id="contact" class="section">
        <div class="container">
            <h2>Hubungi Kami</h2>
            <form action="<?= base_url('contact/send') ?>" method="post">
                <label for="name">Nama:</label>
                <input type="text" id="name" name="name" required>

                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required>

                <label for="message">Pesan:</label>
                <textarea id="message" name="message" required></textarea>

                <button type="submit" class="btn">Kirim</button>
            </form>
        </div>
    </section>
    <footer>
        <div class="container">
            <p>&copy; 2024 UMKM Kami. All rights reserved.</p>
            <div class="social-icons">
                <a href="#"><i class="fab fa-facebook-f"></i></a>
                <a href="#"><i class="fab fa-twitter"></i></a>
                <a href="#"><i class="fab fa-instagram"></i></a>
                <a href="#"><i class="fab fa-linkedin-in"></i></a>
            </div>
        </div>
    </footer>
</body>

</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Penerimaan Peserta Didik Baru (PPDB) Online</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&family=Poppins:wght@300;500&display=swap" rel="stylesheet">
    <style>
        /* Basic Reset */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f4f7fa;
            color: #333;
        }
        h1, h2 {
            font-family: 'Poppins', sans-serif;
            color: #2c3e50;
        }
        a {
            text-decoration: none;
            color: #3498db;
        }
        .navbar {
            background-color: #3498db;
            padding: 15px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        .navbar a {
            color: white;
            font-size: 18px;
            margin: 0 15px;
            font-weight: bold;
        }
        .navbar a:hover {
            color: #f39c12;
        }
        .hero-section {
            height: 80vh;
            background-image: url('pro.jpg'); /* Ganti dengan nama file gambar */
            background-size: cover;
            background-position: center;
            display: flex;
            justify-content: center;
            align-items: center;
            text-align: center;
            color: white;
        }
        .hero-section h1 {
            font-size: 3.5rem;
            text-transform: uppercase;
            margin-bottom: 20px;
        }
        .hero-section p {
            font-size: 1.5rem;
            margin-bottom: 30px;
        }
        .cta-button {
            padding: 12px 30px;
            font-size: 1.2rem;
            background-color: #f39c12;
            border-radius: 30px;
            color: white;
            transition: background-color 0.3s;
        }
        .cta-button:hover {
            background-color: #e67e22;
        }
        .info-section {
            padding: 50px 15px;
            text-align: center;
        }
        .info-section h2 {
            margin-bottom: 30px;
        }
        .info-cards {
            display: flex;
            justify-content: space-around;
            margin-top: 30px;
        }
        .info-card {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 30%;
        }
        .info-card h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }
        .info-card p {
            font-size: 1rem;
            color: #7f8c8d;
        }
        .img-container {
            text-align: center;
            margin-top: 50px; /* Mengatur jarak dari atas */
        }

        .img-container img {
            max-width: 500px; /* Mengatur lebar maksimum gambar */
            border-radius: 15px; /* Membuat sudut gambar melengkung */
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.5); /* Memberikan efek bayangan */
            background-color: rgba(255, 255, 255, 0.8); /* Menambahkan lapisan warna pada gambar */
            padding: 10px;
        }
    </style>
</head>
<body>

    <!-- Navbar -->
    <div class="navbar">
        <a href="#">UPT SDN LEBAKWANA</a>
        <div>
            <a href="login.php">LOGIN</a>
            <a href="register.php">DAFTAR</a>
            <a href="login.php">FAQ</a>
            <a href="registrasi.php">KONTAK</a>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero-section">
        <div>
            <h1>Penerimaan Peserta Didik Baru (PPDB) Online</h1>
            <div class="img-container">
                <img src="images/pro.jpg" alt="Profil">
            </div>
        </div>
    </section>

    <!-- Information Section -->
    <section class="info-section">
        <h2>Informasi PPDB 2024</h2>
        <p>Pendaftaran peserta didik baru untuk tahun ajaran 2024-2025 kini dibuka. Segera daftarkan diri Anda untuk bergabung dengan kami!</p>
        
        <div class="info-cards">
            <div class="info-card">
                <h3>Langkah 1</h3>
                <p>Masuk atau Daftar untuk memulai proses pendaftaran.</p>
            </div>
            <div class="info-card">
                <h3>Langkah 2</h3>
                <p>Isi data diri dan berkas yang diperlukan untuk pendaftaran.</p>
            </div>
            <div class="info-card">
                <h3>Langkah 3</h3>
                <p>Tunggu pengumuman hasil seleksi dari panitia.</p>
            </div>
        </div>
    </section>

</body>
</html>

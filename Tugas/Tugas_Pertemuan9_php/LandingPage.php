<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tugas Pemrograman Web (PHP)</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary-color: #007bff;
            --secondary-color: #6c757d;
            --accent-color: #28a745;
            --light-bg: #f8f9fa;
            --dark-text: #343a40;
            --white: #ffffff;
            --gradient-start: #4facfe;
            --gradient-end: #00f2fe;
        }

        body {
            font-family: 'Poppins', sans-serif;
            background: linear-gradient(to right, var(--gradient-start), var(--gradient-end));
            color: var(--dark-text);
            margin: 0;
            padding: 0;
            line-height: 1.6;
        }

        header {
            background-color: var(--white);
            padding: 30px 20px;
            text-align: center;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            margin-bottom: 30px;
        }

        header h1 {
            margin: 0;
            font-size: 2.8em;
            color: var(--primary-color);
            letter-spacing: -1px;
        }

        .user-info {
            margin-top: 15px;
            font-size: 1.1em;
            color: var(--secondary-color);
        }

        .user-info p {
            margin: 5px 0;
        }

        .container {
            max-width: 900px;
            margin: 0 auto;
            padding: 20px;
        }

        .card {
            background: var(--white);
            margin-bottom: 25px;
            padding: 30px;
            border-radius: 15px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.12);
        }

        .card h2 {
            margin-top: 0;
            color: var(--primary-color);
            font-size: 2em;
            border-bottom: 2px solid var(--light-bg);
            padding-bottom: 15px;
            margin-bottom: 20px;
        }

        ul {
            list-style: none; /* Remove default bullet points */
            padding-left: 0;
        }

        ul li {
            margin-bottom: 12px;
        }

        ul li a {
            color: var(--dark-text);
            text-decoration: none;
            font-size: 1.1em;
            display: block;
            padding: 10px 15px;
            background-color: var(--light-bg);
            border-radius: 8px;
            transition: background-color 0.3s ease, color 0.3s ease, transform 0.2s ease;
        }

        ul li a:hover {
            background-color: var(--primary-color);
            color: var(--white);
            transform: translateX(5px);
            text-decoration: none;
        }

        footer {
            text-align: center;
            padding: 30px;
            font-size: 0.95em;
            color: var(--dark-text);
            margin-top: 40px;
            background-color: rgba(255, 255, 255, 0.7);
            border-top-left-radius: 15px;
            border-top-right-radius: 15px;
            box-shadow: 0 -2px 10px rgba(0, 0, 0, 0.05);
        }
    </style>
</head>
<body>
    <header>
        <h1>Daftar Tugas Pemrograman Web (PHP)</h1>
        <div class="user-info">
            <p>Nama: **Raihan Ahmad Kusumardana**</p>
            <p>NPM: **2310631170042**</p>
        </div>
    </header>

    <div class="container">
        <div class="card">
            <h2>Pertemuan 6</h2>
            <ul>
                <li><a href="Tugas_Pertemuan6_php/PerhitunganTotalPembelian.html" target="_blank">Perhitungan Total Pembelian</a></li>
            </ul>
        </div>

        <div class="card">
            <h2>Pertemuan 7</h2>
            <ul>
                <li><a href="Tugas_Pertemuan7_php/index.php" target="_blank">Index Tugas</a></li>
                <li><a href="Tugas_Pertemuan7_php/genap_ganjil.php" target="_blank">Genap Ganjil</a></li>
                <li><a href="Tugas_Pertemuan7_php/Genap.php" target="_blank">Genap</a></li>
                <li><a href="Tugas_Pertemuan7_php/hewan.php" target="_blank">Hewan</a></li>
                <li><a href="Tugas_Pertemuan7_php/Kendaraan.php" target="_blank">Kendaraan</a></li>
            </ul>
        </div>

        <div class="card">
            <h2>Pertemuan 8</h2>
            <ul>
                <li><a href="Tugas_Pertemuan9_php/Tugas_Pertemuan8_php/latihan_nilai.php" target="_blank">Latihan Nilai</a></li>
            </ul>
        </div>
    </div>

    <footer>
        &copy; <?php echo date("Y"); ?> **Tugas PHP** - Dibuat untuk tugas kuliah
    </footer>
</body>
</html>
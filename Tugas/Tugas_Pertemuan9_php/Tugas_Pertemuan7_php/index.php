<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Latihan Praktikum PHP</title>
    <style>
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f0f4f8;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #333;
        }

        .container {
            max-width: 800px;
            margin: auto;
            background-color: #ffffff;
            border-radius: 10px;
            padding: 30px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }

        ul {
            padding-left: 20px;
        }

        li {
            margin-bottom: 10px;
        }

        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }

        a:hover {
            text-decoration: underline;
        }

        hr {
            margin: 30px 0;
        }

        .content {
            background-color: #eef2f7;
            padding: 15px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1>Latihan Praktikum PHP</h1>
        <p>Pilih soal yang ingin kamu lihat:</p>
        <ul>
            <li><a href="?page=kendaraan">Soal 1: Switch - Menentukan Jenis Kendaraan</a></li>
            <li><a href="?page=genap">Soal 2: For - Menampilkan Bilangan Genap</a></li>
            <li><a href="?page=hewan">Soal 3: Foreach - Menampilkan Daftar Hewan</a></li>
            <li><a href="?page=genap_ganjil">Soal 4: Ternary - Cek Genap atau Ganjil</a></li>
        </ul>

        <hr>

        <div class="content">
            <?php
            if (isset($_GET['page'])) {
                $page = $_GET['page'];
                $file = "$page.php";
                if (file_exists($file)) {
                    include $file;
                } else {
                    echo "<p>Halaman tidak ditemukan.</p>";
                }
            } else {
                echo "<p>Silakan pilih soal dari menu navigasi di atas untuk melihat hasil praktikum PHP.</p>";
            }
            ?>
        </div>
    </div>
</body>
</html>

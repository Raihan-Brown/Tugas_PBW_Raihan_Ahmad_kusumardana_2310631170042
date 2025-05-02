<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Hasil Perhitungan</title>
    <link rel="stylesheet" href="tampilan.css">
</head>
<body>
<div class="container">
    <h2>Hasil Perhitungan Pembelian</h2>
    <hr>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nama_barang = $_POST['nama_barang'];
        $harga_satuan = (int) $_POST['harga_satuan'];
        $jumlah_beli = (int) $_POST['jumlah_beli'];
        define("PAJAK", 0.10);

        $total_sebelum_pajak = $harga_satuan * $jumlah_beli;
        $pajak = $total_sebelum_pajak * PAJAK;
        $total_bayar = $total_sebelum_pajak + $pajak;

        echo "<div class='label'>Nama Barang:</div> $nama_barang";
        echo "<div class='label'>Harga Satuan:</div> Rp " . number_format($harga_satuan, 0, ',', '.');
        echo "<div class='label'>Jumlah Beli:</div> $jumlah_beli";
        echo "<div class='label'>Total Harga (Sebelum Pajak):</div> Rp " . number_format($total_sebelum_pajak, 0, ',', '.');
        echo "<div class='label'>Pajak (10%):</div> Rp " . number_format($pajak, 0, ',', '.');
        echo "<div class='label total'>Total Bayar:</div> Rp " . number_format($total_bayar, 0, ',', '.');
        echo "<br><a href='PerhitunganTotalPembelian.html'><button class='back-button'>Kembali</button></a>";
    } else {
        echo "<p>Data tidak ditemukan.</p>";
    }
    ?>
</div>
</body>
</html>

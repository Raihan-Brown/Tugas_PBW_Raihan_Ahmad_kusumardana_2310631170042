<h3>Soal 1: Menentukan Jenis Kendaraan Berdasarkan Jumlah Roda</h3>

<form method="post">
    <label for="roda">Masukkan jumlah roda kendaraan:</label><br>
    <input type="number" name="roda" id="roda" min="1" required>
    <button type="submit">Cek Jenis Kendaraan</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $jumlah_roda = $_POST['roda'];
    echo "<p><strong>Jumlah roda:</strong> $jumlah_roda</p>";

    switch ($jumlah_roda) {
        case 2:
            echo "Jenis Kendaraan: Sepeda Motor";
            break;
        case 3:
            echo "Jenis Kendaraan: Bajaj atau kendaraan roda tiga lainnya";
            break;
        case 4:
            echo "Jenis Kendaraan: Mobil pribadi atau taksi";
            break;
        case 6:
            echo "Jenis Kendaraan: Truk kecil atau kendaraan niaga";
            break;
        default:
            echo "Jenis kendaraan tidak diketahui untuk jumlah roda: $jumlah_roda";
            break;
    }
}
?>

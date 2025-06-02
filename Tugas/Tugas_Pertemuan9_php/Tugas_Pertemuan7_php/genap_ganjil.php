<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Soal 4: Genap atau Ganjil</title>
</head>
<body>

<h3>Soal 4: Menentukan Apakah Angka Genap atau Ganjil</h3>

<form method="post">
    <label for="angka">Masukkan sebuah angka:</label><br>
    <input type="number" name="angka" id="angka" required>
    <button type="submit">Cek</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $angka = $_POST['angka'];
    $hasil = ($angka % 2 == 0) ? "Genap" : "Ganjil";
    echo "<p>Angka $angka adalah <strong>$hasil</strong>.</p>";
}
?>
</body>
</html>

<h3>Soal 2: Menampilkan Bilangan Genap dari 2 sampai Angka Maksimal</h3>

<form method="post">
    <label for="max">Masukkan angka maksimal (≥ 2):</label><br>
    <input type="number" name="max" id="max" min="2" required>
    <button type="submit">Tampilkan Bilangan Genap</button>
</form>

<?php
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $max = $_POST['max'];
    echo "<p>Bilangan genap dari 2 sampai $max:</p>";

    for ($i = 2; $i <= $max; $i += 2) {
        echo "$i ";
    }
}
?>

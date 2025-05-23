<h3>Soal 3: Menampilkan Daftar Nama Hewan</h3>

<?php
$hewan = ["Kucing", "Anjing", "Kelinci", "Burung", "Ikan", "Kuda"];

echo "<p>Daftar hewan yang ada di array:</p>";
echo "<ul>";
foreach ($hewan as $h) {
    echo "<li>$h</li>";
}
echo "</ul>";
?>

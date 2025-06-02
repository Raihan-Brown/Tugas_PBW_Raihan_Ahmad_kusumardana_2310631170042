<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Predikat dan status</title>
</head>
<body>
    <h1>Latihan Nilai</h1>
    <form action="" method="post">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama" required><br>
        <label for="nilai">Nilai:</label>
        <input type="text" name="nilai" id="nilai" required>
        <input type="submit" value="Kirim">
    </form>
    <?php
    $predikat = "";
    $status = "";
    if (isset($_POST['nama']) && isset($_POST['nilai'])) {
        $nama = $_POST['nama'];
        $nilai = $_POST['nilai'];

        if ($nilai >= 80) {
            $predikat = "A";
            $status = "Lulus";
        } elseif ($nilai >= 70) {
            $predikat = "B";
            $status = "Lulus";
        } elseif ($nilai >= 60) {
            $predikat = "C";
            $status = "Lulus";
        } elseif ($nilai >= 50) {
            $predikat = "D";
            $status = "Remedial";
        } else {
            $predikat = "E";
            $status = "Tidak Lulus";
        }
        echo "<h2>Hasil</h2>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Nilai: $nilai</p>";
        echo "<p>Predikat: $predikat</p>";
        echo "<p>Status: $status</p>";
    }
    ?>
</body>
</html>
<?php
// 1. session_start() harus di paling atas
session_start();

include 'includes/proses_index.php'; //cite: 1, 10

// Proteksi akses
if (!isset($_SESSION['login_Un51k4'])) { //cite: 7
    header("Location: form_login.php?message=" . urlencode("Mengakses fitur harus login dulu bro.")); //cite: 7
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Daftar Buku</title>
</head>
<body>
    <?php include 'nav.php'; //cite: 21 ?>
    <div class="container mt-4">
        <h2>Daftar Buku</h2>

        <form method="get" class="row g-3 mb-4">
            <div class="col-md-5">
                <label for="judul" class="form-label">Cari Berdasarkan Judul</label>
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Masukkan judul buku" value="<?php echo htmlspecialchars($search_judul); ?>">
            </div>
            <div class="col-md-3">
                <label for="tahun_terbit" class="form-label">Cari Berdasarkan Tahun Terbit</label>
                <input type="number" class="form-control" id="tahun_terbit" name="tahun_terbit" placeholder="Masukkan tahun terbit" value="<?php echo htmlspecialchars($search_tahun); ?>">
            </div>
            <div class="col-md-2 align-self-end">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
            <div class="col-md-2 align-self-end">
                <a href="index.php" class="btn btn-secondary">Reset</a>
            </div>
        </form>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Judul</th>
                    <th>Penulis</th>
                    <th>Tahun Terbit</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // PERBAIKAN: Cek apakah $result valid dan ada baris data
                if ($result && $result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()):
                ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row['ID']); ?></td>
                            <td><?php echo htmlspecialchars($row['Judul']); ?></td>
                            <td><?php echo htmlspecialchars($row['Penulis']); ?></td>
                            <td><?php echo htmlspecialchars($row['Tahun_Terbit']); ?></td>
                            <td>Rp<?php echo number_format($row['Harga'], 2, ',', '.'); ?></td>
                            <td><?php echo number_format($row['Stok'], 0, ',', '.'); ?></td>
                            <td>
                                <a href="<?= $base_url ?>pages/buku/form_edit.php?id=<?php echo htmlspecialchars($row['ID']); ?>" class="btn btn-sm btn-warning">Edit</a>
                            </td>
                        </tr>
                <?php
                    endwhile;
                } else {
                    // Tampilkan pesan jika tidak ada data
                    echo '<tr><td colspan="7" class="text-center">Tidak ada buku yang ditemukan.</td></tr>';
                }
                ?>
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
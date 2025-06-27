<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Registrasi Pengguna Baru</title>
</head>
<body class="container mt-5">
    <h2>Daftar Akun Baru</h2>
    <?php if (isset($_GET['message'])): ?>
        <div class="alert alert-info"><?= htmlspecialchars($_GET['message']) ?></div>
    <?php endif; ?>
    <form method="post" action="includes/pengguna/proses_register_pengguna.php">
        <div class="mb-3">
            <label for="username" class="form-label">Nama Pengguna (Username):</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Kata Sandi:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <div class="mb-3">
            <label for="confirm_password" class="form-label">Konfirmasi Kata Sandi:</label>
            <input type="password" class="form-control" id="confirm_password" name="confirm_password" required>
        </div>
        <button type="submit" class="btn btn-primary">Daftar</button>
        <p class="mt-3">Sudah punya akun? <a href="form_login.php">Masuk di sini</a></p>
    </form>
</body>
</html>
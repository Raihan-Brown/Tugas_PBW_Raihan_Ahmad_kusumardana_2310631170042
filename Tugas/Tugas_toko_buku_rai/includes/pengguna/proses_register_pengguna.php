<?php
include '../koneksi_db.php'; //cite: 11

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = trim($_POST['username']);
    $password = $_POST['password'];
    $confirm_password = $_POST['confirm_password'];

    // Validasi input
    if (empty($username) || empty($password) || empty($confirm_password)) {
        header("Location: ../../register_pengguna.php?message=" . urlencode("Semua field harus diisi."));
        exit;
    }

    if ($password !== $confirm_password) {
        header("Location: ../../register_pengguna.php?message=" . urlencode("Konfirmasi kata sandi tidak cocok."));
        exit;
    }

    // Pastikan username belum ada di database
    $stmt_check = $conn->prepare("SELECT ID FROM pengguna WHERE nama = ?");
    $stmt_check->bind_param("s", $username);
    $stmt_check->execute();
    $stmt_check->store_result();

    if ($stmt_check->num_rows > 0) {
        header("Location: ../../register_pengguna.php?message=" . urlencode("Nama pengguna sudah ada. Pilih nama lain."));
        $stmt_check->close();
        exit;
    }
    $stmt_check->close();

    // Hashing password untuk keamanan
    // SANGAT PENTING: Selalu hash password sebelum menyimpannya ke database
    $hashed_password = password_hash($password, PASSWORD_DEFAULT);

    // Masukkan data pengguna baru ke database
    $stmt_insert = $conn->prepare("INSERT INTO pengguna (nama, katasandi) VALUES (?, ?)");
    $stmt_insert->bind_param("ss", $username, $hashed_password);

    if ($stmt_insert->execute()) {
        header("Location: ../../form_login.php?message=" . urlencode("Registrasi berhasil! Silakan login."));
        exit;
    } else {
        header("Location: ../../register_pengguna.php?message=" . urlencode("Gagal registrasi: " . addslashes($stmt_insert->error)));
        exit;
    }
    $stmt_insert->close();
}
?>
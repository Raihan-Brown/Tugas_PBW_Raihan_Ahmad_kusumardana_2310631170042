<?php
session_start();
include '../koneksi_db.php'; //cite: 11

// Proses jika form dikirim
if ($_SERVER['REQUEST_METHOD'] == 'POST') { //cite: 8
    $username = $_POST['username']; //cite: 8
    $password = $_POST['password']; //cite: 8

    // Cek user di database
    // Gunakan prepared statement untuk mencegah SQL Injection
    $stmt = $conn->prepare("SELECT id, nama, katasandi FROM pengguna WHERE nama = ?"); //cite: 8
    $stmt->bind_param("s", $username); //cite: 8
    $stmt->execute(); //cite: 8

    $result = $stmt->get_result(); //cite: 8

    // Validasi hasil
    if ($result->num_rows === 1) { //cite: 8
        $user = $result->fetch_assoc(); //cite: 8
        
        // Verifikasi password yang dimasukkan dengan hash yang disimpan di database
        if (password_verify($password, $user['katasandi'])) { // Perbaikan: Gunakan password_verify()
            $_SESSION['id'] = $user['id']; //cite: 8
            $_SESSION['nama'] = $user['nama']; //cite: 8
            $_SESSION['login_Un51k4'] = true; //cite: 8
            header("Location: ../../index.php"); //cite: 8
            exit;
        } else {
            // Password salah
            header("Location: ../../form_login.php?message=" . urlencode("Password salah broo...")); //cite: 8
            exit;
        }
    } else {
        // Username tidak ditemukan
        header("Location: ../../form_login.php?message=" . urlencode("Username tidak ditemukan.")); //cite: 8
        exit;
    }

    $stmt->close(); //cite: 8
}
?>
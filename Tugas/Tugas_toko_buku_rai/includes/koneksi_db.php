<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "pbw_toko_buku";

$conn = new mysqli($host, $user, $password, $database);
if ($conn->connect_error) {
    die("Koneksi gagal: " . $conn->connect_error);
}
?>
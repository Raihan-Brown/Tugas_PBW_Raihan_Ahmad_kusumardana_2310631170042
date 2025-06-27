<?php
// File: proses_index.php (atau includes/proses_index.php sesuai struktur Anda)

// Pastikan file koneksi database sudah ada dan menghasilkan objek $conn
include 'koneksi_db.php';

// Inisialisasi variabel pencarian
$search_judul = isset($_GET['judul']) ? $_GET['judul'] : '';
$search_tahun = isset($_GET['tahun_terbit']) ? $_GET['tahun_terbit'] : '';

// Inisialisasi variabel $result menjadi null untuk menghindari error jika query gagal
$result = null;

// Mulai membangun query menggunakan placeholder (?) untuk parameter
$query = "SELECT ID, Judul, Penulis, Tahun_Terbit, Harga, Stok FROM buku WHERE 1=1";
$params = []; // Array untuk menyimpan nilai parameter
$types = '';   // String untuk menyimpan tipe data parameter (s: string, i: integer, d: double, b: blob)

if (!empty($search_judul)) {
    $query .= " AND Judul LIKE ?";
    $params[] = "%" . $search_judul . "%"; // Tambahkan wildcard untuk LIKE
    $types .= 's'; // 's' karena ini string
}

if (!empty($search_tahun)) {
    // Validasi input tahun_terbit harus berupa integer
    if (filter_var($search_tahun, FILTER_VALIDATE_INT)) {
        $query .= " AND Tahun_Terbit = ?";
        $params[] = (int)$search_tahun; // Pastikan ini integer
        $types .= 'i'; // 'i' karena ini integer
    } else {
    }
}

// Persiapkan statement
if ($stmt = $conn->prepare($query)) {
    // Bind parameter jika ada
    if (!empty($params)) {
        // bind_param memerlukan referensi (&), jadi kita gunakan call_user_func_array
        // Argumen pertama adalah string tipe data, diikuti oleh variabel parameter
        call_user_func_array([$stmt, 'bind_param'], array_merge([$types], refValues($params)));
    }

    // Eksekusi statement
    if ($stmt->execute()) {
        $result = $stmt->get_result(); // Ambil hasil query
    } else {
        // Penanganan error eksekusi query
        error_log("Error executing query: " . $stmt->error);
        // Anda bisa menampilkan pesan error yang user-friendly atau log lebih detail
        // Misalnya: die("Terjadi kesalahan saat mengambil data buku.");
    }

    $stmt->close(); // Tutup statement setelah selesai
} else {
    // Penanganan error persiapan statement
    error_log("Error preparing query: " . $conn->error);
    // Misalnya: die("Terjadi kesalahan sistem, silakan coba lagi nanti.");
}

// Fungsi helper untuk mendapatkan referensi dari array, diperlukan oleh bind_param
function refValues($arr){
    if (strnatcmp(phpversion(),'5.3') >= 0) // PHP 5.3+
    {
        $refs = array();
        foreach($arr as $key => $value)
            $refs[$key] = &$arr[$key];
        return $refs;
    }
    return $arr;
}
?>
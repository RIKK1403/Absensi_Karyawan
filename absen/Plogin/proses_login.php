<?php
session_start();
include '../koneksi.php';

// Tangkap data dari form login
$email = $_POST['email'];
$password = $_POST['password'];

// Cek pengguna dalam database
$sql = "SELECT * FROM akun WHERE email = ?";
$stmt = $koneksi->prepare($sql);
$stmt->bind_param("s", $email);
$stmt->execute();
$result = $stmt->get_result();

// Cek jika data ditemukan
if ($result->num_rows > 0) {
    $user = $result->fetch_assoc();

    // Verifikasi password
    if (password_verify($password, $user['password'])) {
        // Menyimpan user_id dalam sesi
        $_SESSION['id_akun'] = $user['id'];
        $_SESSION['email'] = $user['email'];
        $_SESSION['role'] = $user['role'];

        // Arahkan ke halaman sesuai role
        if ($user['role'] == 'user') {
            header("Location: ../karyawan/dashboardUser.html");
        exit();
    } else {
        echo "Password salah!";
    }
} else {
    echo "Email tidak ditemukan!";
}

$stmt->close();
$koneksi->close();

}
?>
<?php
session_start();
require_once 'koneksi.php';

// Pastikan pengguna sudah login sebelum melanjutkan
if (!isset($_SESSION['username'])) {
    header("location:login.php");
    exit(); // Pastikan untuk keluar dari skrip setelah melakukan redirect
}

if (session_status() == PHP_SESSION_NONE) {
    session_start();
}

// Query untuk mengambil nama dari tabel user berdasarkan username
$username = $_SESSION['username'];
$sql = "SELECT nama FROM user WHERE username = ?";
$stmt = mysqli_prepare($conn, $sql);
if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $username);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $nama);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);
} else {
    echo "Terjadi kesalahan pada query: " . mysqli_error($conn);
}
?>
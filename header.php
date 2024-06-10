<?php
session_start();
require_once 'koneksi.php';

// Pastikan pengguna sudah login sebelum melanjutkan
if(!isset($_SESSION['admin_username'])){
    header("location:login.php");
    exit(); // Pastikan untuk keluar dari skrip setelah melakukan redirect
}

// Query untuk mengambil nama dari tabel master_akses berdasarkan username
$username = $_SESSION['admin_username'];
$sql = "SELECT ma.nama 
        FROM admin a 
        INNER JOIN admin_akses aa ON a.login_id = aa.login_id 
        INNER JOIN master_akses ma ON aa.akses_id = ma.akses_id 
        WHERE a.username = ?";
$stmt = mysqli_prepare($conn, $sql);
mysqli_stmt_bind_param($stmt, "s", $username);
mysqli_stmt_execute($stmt);
mysqli_stmt_bind_result($stmt, $nama);
mysqli_stmt_fetch($stmt);
mysqli_stmt_close($stmt);
?>
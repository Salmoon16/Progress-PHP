<?php
session_start(); // Wajib buat akses $_SESSION

// Proteksi halaman
if (!isset($_SESSION["user"])) {
    header("Location: um1.php");
    exit();
}

// Kalau user udah login, lanjut jalanin kode di bawah ini
echo "Selamat datang, " . $_SESSION["user"];
?>

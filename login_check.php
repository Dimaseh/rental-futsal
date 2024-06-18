<?php
require 'connection.php';
session_start();

// Periksa login
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $password = $_POST['password'];

    // Query untuk memeriksa kredensial pengguna
    $query = "SELECT * FROM user WHERE username = '$username' && password = '$password'";
    $result = mysqli_query($connect, $query);

    // Periksa hasil query
    if (mysqli_num_rows($result) === 1) {
        // Login berhasil, arahkan ke halaman utama atau halaman yang diinginkan
        $_SESSION["login"] = true;
        header("Location: admin.php");
        exit;
    } else {
        // Login gagal, tampilkan pesan error atau arahkan kembali ke halaman logi
        header("Location: login.php?error=1");
    }
}

?>
<?php
session_start();
require 'user.php';

// buat masuk
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    if (!isset($_SESSION['user'])) {
        $user = new User($username, $email, $password);
        $_SESSION['users'][] = ['username' => $username, 'email' => $email, 'password' => $password];
        $_SESSION['user'] = $user;//kalau terisi maka lanjut ke index
        header('Location: index.php');
        exit();
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Masuk</title>
</head>
<body>
    <h1>Silahkan masukkan datamu!</h1>
    <form method="POST">
        <input type="text" name="username" placeholder="Username" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Kirim</button>
    </form>
    <p>Harap diisi dengan benar yaa :v </p>
</body>
</html>
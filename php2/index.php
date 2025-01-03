<?php
/*
- Variabel
- All Type Data
- Array Manipulation
- Casting Data
- Constant Data
- Function
- Parameter/Arguments
- Class
- Object
- Property
- Method
- Construct
- Destruct
- Inheritance with Class
- 3 Types of Visibility/Access Modifier
- Abstract Keyword
- Interface Keyword
- Inheritance with Interface
- Differences Between Abstract and Interface
- Static Method
- Arithmetic Operators
- Assignment Operators
- Comparison Operators
- Increment / Decrement Operators
- Logical Operators
- Conditional Assignment Operators
- If-Else Statements
- Switch Statement
- All Loops
- Super Global Variables
- Manipulation Data with Form HTML
*/
session_start();
require 'config.php';

// Proteksi login
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>salamander.com</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        header {
            background-color: #007bff;
            color: #ffffff;
            padding: 1rem;
            text-align: center;
        }
        nav {
            text-align: center;
            margin: 1rem 0;
        }
        nav a {
            text-decoration: none;
            color: #007bff;
            margin: 0 1rem;
            font-weight: bold;
        }
        nav a:hover {
            color: #0056b3;
        }
        .container {
            padding: 2rem;
        }
        h1 {
            color: #333;
        }
    </style>
</head>
<body>
    <header>
        <h1>Salimin Mart</h1>
    </header>
    <nav>
        <a href="modules/products.php">Manajemen Produk</a> |
        <a href="modules/transactions.php">Transaksi</a> |
        <a href="login.php?logout=true">Logout</a>
    </nav>
    <div class="container">
        <h2>Selamat datang, <?= htmlspecialchars($_SESSION['username']); ?>!</h2>
        <p>Gunakan menu di atas untuk mengakses fitur sistem.</p>
    </div>
</body>
</html>

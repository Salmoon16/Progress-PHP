<?php
/*require_once '../classes/Product.php';

// Simulasi data produk
$products = [
    new Product("Laptop", 15000000, 10),
    new Product("Mouse", 150000, 50),
    new Product("Keyboard", 250000, 30)
];

// Menampilkan produk dalam tabel
echo "<h2>Daftar Produk</h2>";
echo "<table border='1'>";
echo "<tr><th>Nama</th><th>Harga</th><th>Stok</th></tr>";
foreach ($products as $product) {
    echo "<tr>
            <td>{$product->getName()}</td>
            <td>{$product->getPrice()}</td>
            <td>{$product->getStock()}</td>
          </tr>";
}
echo "</table>";
?> */

session_start();
require '../config.php';
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header('Location: ../login.php');
    exit;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Produk</title>
    <link rel="stylesheet" href="../style.css">
</head>
<body>
    <header>
        <h1>Manajemen Produk</h1>
    </header>
    <nav>
        <a href="../index.php">Dashboard</a> |
        <a href="transactions.php">Transaksi</a> |
        <a href="../login.php?logout=true">Logout</a>
    </nav>
    <div class="container">
        <h2>Daftar Produk</h2>
        <table>
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Nama Produk</th>
                    <th>Harga</th>
                    <th>Stok</th>
                    <th>Aksi</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>1</td>
                    <td>Produk A</td>
                    <td>10000</td>
                    <td>20</td>
                    <td><button>Edit</button> <button>Hapus</button></td>
                </tr>
                <tr>
                    <td>2</td>
                    <td>Produk B</td>
                    <td>15000</td>
                    <td>15</td>
                    <td><button>Edit</button> <button>Hapus</button></td>
                </tr>
            </tbody>
        </table>
        <h2>Tambah Produk</h2>
        <form>
            <input type="text" placeholder="Nama Produk">
            <input type="number" placeholder="Harga">
            <input type="number" placeholder="Stok">
            <button>Tambah</button>
        </form>
    </div>
</body>
</html>

<?php
session_start();
require '../config.php';

// Proteksi login
if (!isset($_SESSION['logged_in'])) {
    header('Location: ../login.php');
    exit;
}

global $products;

// Handle transaksi
$transactions = [];
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['process_transaction'])) {
    $customerName = $_POST['customer_name'];
    $productId = (int) $_POST['product_id'];
    $quantity = (int) $_POST['quantity'];

    foreach ($products as &$product) {
        if ($product['id'] === $productId) {
            if ($product['stock'] >= $quantity) {
                $product['stock'] -= $quantity;
                $total = $quantity * $product['price'];

                $transactions[] = [
                    "customer" => $customerName,
                    "product" => $product['name'],
                    "quantity" => $quantity,
                    "total" => $total,
                ];
                break;
            } else {
                $error = "Stok tidak mencukupi!";
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../style.css">
    <title>Transaksi</title>
</head>
<body>
    <h1>Transaksi</h1>
    <a href="../index.php">Kembali ke Dashboard</a>
    <hr>

    <h2>Proses Transaksi</h2>
    <?php if (isset($error)) echo "<p style='color:red;'>$error</p>"; ?>
    <form method="POST" action="">
        <label for="customer_name">Nama Pelanggan:</label>
        <input type="text" id="customer_name" name="customer_name" required>
        <label for="product_id">Pilih Produk:</label>
        <select id="product_id" name="product_id" required>
            <?php foreach ($products as $product): ?>
                <option value="<?= $product['id']; ?>"><?= $product['name']; ?> - Stok: <?= $product['stock']; ?></option>
            <?php endforeach; ?>
        </select>
        <label for="quantity">Jumlah:</label>
        <input type="number" id="quantity" name="quantity" required>
        <button type="submit" name="process_transaction">Proses</button>
    </form>

    <h2>Riwayat Transaksi</h2>
    <table border="1">
        <tr>
            <th>Pelanggan</th>
            <th>Produk</th>
            <th>Jumlah</th>
            <th>Total</th>
        </tr>
        <?php foreach ($transactions as $transaction): ?>
            <tr>
                <td><?= $transaction['customer']; ?></td>
                <td><?= $transaction['product']; ?></td>
                <td><?= $transaction['quantity']; ?></td>
                <td><?= $transaction['total']; ?></td>
            </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

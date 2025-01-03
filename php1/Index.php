<?php
// Mulai sesi untuk login
session_start();

// === LOGIN ===
const USERNAME = "ikhwan";
const PASSWORD = "memew";

// Handle Login
if (!isset($_SESSION['logged_in']) && $_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['username'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    if ($username === USERNAME && $password === PASSWORD) {
        $_SESSION['logged_in'] = true;
    } else {
        $loginError = "Username atau password salah!";
    }
}

// Logout
if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit;
}

// Jika belum login, tampilkan form login
if (!isset($_SESSION['logged_in'])) {
    ?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Login</title>
    </head>
    <body>
        <h1>Login Sistem</h1>
        <form method="POST" action="">
            <label for="username">Username:</label>
            <input type="text" id="username" name="username" required>
            <label for="password">Password:</label>
            <input type="password" id="password" name="password" required>
            <button type="submit">Login</button>
        </form>
        <?php if (isset($loginError)) echo "<p style='color:red;'>$loginError</p>"; ?>
    </body>
    </html>
    <?php
    exit;
}

// === SISTEM MANAJEMEN SISWA ===
// Class Siswa
class Siswa {
    private string $nama;
    private int $umur;
    private float $nilai;

    public function __construct(string $nama, int $umur, float $nilai) {
        $this->nama = $nama;
        $this->umur = $umur;
        $this->nilai = $nilai;
    }

    public function getNama(): string {
        return $this->nama;
    }

    public function setNama(string $nama) {
        $this->nama = $nama;
    }

    public function getUmur(): int {
        return $this->umur;
    }

    public function setUmur(int $umur) {
        $this->umur = $umur;
    }

    public function getNilai(): float {
        return $this->nilai;
    }

    public function setNilai(float $nilai) {
        $this->nilai = $nilai;
    }
}

// Inisialisasi data siswa (simulasi data awal)
$siswaList = [
    new Siswa("Ahmad", 16, 90),
    new Siswa("Budi", 17, 85)
];

// Tambah Siswa
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action']) && $_POST['action'] === 'add') {
    $nama = $_POST['nama'];
    $umur = (int) $_POST['umur'];
    $nilai = (float) $_POST['nilai'];
    $siswaList[] = new Siswa($nama, $umur, $nilai);
}

// Edit atau Hapus Siswa
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['action'])) {
    $index = (int) $_POST['index'];
    if ($_POST['action'] === 'delete') {
        unset($siswaList[$index]);
        $siswaList = array_values($siswaList); // Reindex array
    } elseif ($_POST['action'] === 'edit') {
        $siswaList[$index]->setNama($_POST['nama']);
        $siswaList[$index]->setUmur((int) $_POST['umur']);
        $siswaList[$index]->setNilai((float) $_POST['nilai']);
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Manajemen Siswa</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h1 { color: #333; }
        table { width: 100%; border-collapse: collapse; }
        table, th, td { border: 1px solid #ddd; }
        th, td { padding: 8px; text-align: left; }
        th { background-color: #f4f4f4; }
        button { padding: 5px 10px; cursor: pointer; border: none; border-radius: 3px; }
        button[type="submit"] { background-color: #4CAF50; color: white; }
        button[type="submit"]:hover { background-color: #45a049; }
        button[style="color:red;"] { background-color: #f44336; }
    </style>
</head>
<body>
    <h1>Sistem Manajemen Siswa</h1>
    <a href="?logout=true">Logout</a>

    <h2>Tambah Siswa</h2>
    <form method="POST" action="">
        <input type="hidden" name="action" value="add">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required>
        <label for="umur">Umur:</label>
        <input type="number" id="umur" name="umur" required>
        <label for="nilai">Nilai:</label>
        <input type="number" id="nilai" name="nilai" step="0.1" required>
        <button type="submit">Tambah</button>
    </form>

    <h2>Daftar Siswa</h2>
    <table>
        <tr>
            <th>Nama</th>
            <th>Umur</th>
            <th>Nilai</th>
            <th>Aksi</th>
        </tr>
        <?php foreach ($siswaList as $key => $siswa): ?>
        <tr>
            <td><?= $siswa->getNama(); ?></td>
            <td><?= $siswa->getUmur(); ?></td>
            <td><?= $siswa->getNilai(); ?></td>
            <td>
                <!-- Form Edit -->
                <form method="POST" action="" style="display:inline;">
                    <input type="hidden" name="action" value="edit">
                    <input type="hidden" name="index" value="<?= $key; ?>">
                    Nama: <input type="text" name="nama" value="<?= $siswa->getNama(); ?>" required>
                    Umur: <input type="number" name="umur" value="<?= $siswa->getUmur(); ?>" required>
                    Nilai: <input type="number" name="nilai" value="<?= $siswa->getNilai(); ?>" step="0.1" required>
                    <button type="submit">Simpan</button>
                </form>
                <!-- Form Hapus -->
                <form method="POST" action="" style="display:inline;">
                    <input type="hidden" name="action" value="delete">
                    <input type="hidden" name="index" value="<?= $key; ?>">
                    <button type="submit" style="color:red;">Hapus</button>
                </form>
            </td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

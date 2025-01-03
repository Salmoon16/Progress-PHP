<?php
require 'user.php';
require 'task.php';
session_start();

if (!isset($_SESSION['user'])) {
    header('Location: masuk.php'); 
    exit();
}


$user = $_SESSION['user'];
$tasks = isset($_SESSION['tasks']) ? $_SESSION['tasks'] : [];

// Buat Nambahin tugas
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['task_title'])) {
    $task = new Task($_POST['task_title']);
    $tasks[] = $task;
    $_SESSION['tasks'] = $tasks;
}

// Buat penghapusan tugas
if (isset($_GET['delete'])) {
    unset($tasks[$_GET['delete']]);
    $_SESSION['tasks'] = array_values($tasks);
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>DaftarTugas.com</title>
</head>
<body>
  <div class="container"> 
    <h1>Selamat Datang, <?php echo htmlspecialchars($user->getUsername()); ?></h1>
    <form method="POST">
      <input type="text" name="task_title" placeholder="Tambah Tugas Kamu" required>
      <button type="submit">Tambah</button>
    </form>
    <ul>
      <?php foreach ($tasks as $index => $task): ?>
            <li>
              <?php echo htmlspecialchars($task->getTitle()); ?>
              <a href="?delete=<?php echo $index; ?>">Delete</a>
            </li>
            <?php endforeach; ?>
          </ul>
          <a href="logout.php">Logout</a>
        </div>
</body>
</html>
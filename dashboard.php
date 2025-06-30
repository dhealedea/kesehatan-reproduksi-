<?php
session_start();
if (!isset($_SESSION['user_id'])) {
  header("Location: login.php");
  exit();
}
?>

<h2>Selamat datang, <?php echo $_SESSION['nama']; ?>!</h2>
<p>Ini adalah dashboard pengguna.</p>
<a href="logout.php">Logout</a>

<?php include 'config.php'; session_start(); ?>
<form method="POST">
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit" name="login">Login</button>
</form>

<?php
if (isset($_POST['login'])) {
  $email = $_POST['email'];
  $password = $_POST['password'];

  $result = mysqli_query($conn, "SELECT * FROM users WHERE email='$email'");
  $user = mysqli_fetch_assoc($result);

  if ($user && password_verify($password, $user['password'])) {
    $_SESSION['user_id'] = $user['id'];
    $_SESSION['nama'] = $user['nama_lengkap'];
    header("Location: dashboard.php");
  } else {
    echo "Login gagal. Cek kembali email dan password.";
  }
}
?>

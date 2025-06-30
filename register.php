<?php include 'config.php'; ?>
<form method="POST">
  <input type="text" name="nama" placeholder="Nama Lengkap" required>
  <input type="email" name="email" placeholder="Email" required>
  <input type="password" name="password" placeholder="Password" required>
  <button type="submit" name="daftar">Daftar</button>
</form>

<?php
if (isset($_POST['daftar'])) {
  $nama = $_POST['nama'];
  $email = $_POST['email'];
  $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);
  
  $query = "INSERT INTO users (nama_lengkap, email, password) VALUES ('$nama', '$email', '$pass')";
  if (mysqli_query($conn, $query)) {
    echo "Registrasi berhasil. <a href='login.php'>Login di sini</a>";
  } else {
    echo "Gagal daftar: " . mysqli_error($conn);
  }
}
?>
